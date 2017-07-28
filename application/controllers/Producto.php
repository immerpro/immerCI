<?php

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('productos_model');
        $this->load->helper('url_helper');
    }

    // metodo que ejecuta la vista principal
    public function index() {
        // usamos la clase Producto y llamamos al metodo que obtiene todos los productos 
        $data['productos'] = $this->productos_model->obtenerProductos();
        $data['titulo'] = "producto";
        // cargar la vista
        $this->load->view('templates/header',$data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('productos/index', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data['correcto'] = "se creo el producto correctamente";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('DescripcionProducto', 'DescripcionProducto', 'required');
        $this->form_validation->set_rules('NombreProdu'
                . 'cto', 'NombreProducto', 'required');
        $this->form_validation->set_rules('CodigoDeBarras', 'CodigoDeBarras', 'required');
        $this->form_validation->set_rules('minimoStock', 'minimoStock', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/menuAdmin');
            $this->load->view('productos/crear');
            $this->load->view('templates/footer');
        } else {
            $this->productos_model->agregarProducto();
            
            $this->load->view('templates/header');
            $this->load->view('templates/menuAdmin');
            $this->load->view('productos/crear',$data);
            $this->load->view('templates/footer');
        }
    }

}
