<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubCategoria
 *
 * @author User
 */
class SubCategoria extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
       
        $this->load->model('categoria_model');
       
    }
        public function index() {
        // usamos la clase SubCategoria y llamamos al metodo que obtiene todas las Subcategorias
        $data['Subcategorias'] = $this->subcategoria_model->obtenerSubCategorias();
        $data['titulo'] = "Subcategoria";
        // cargar la vista
        $this->load->view('templates/header',$data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('SubCategoria/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function SubInCategoria(){
        $data['titulo'] = "Ingresar Subcategoria";
        $data['Mensaje'] = "SubCategoria creada correctamente";
        $data['categorias'] = $this->categoria_model->obtenerCategorias();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('NombreSubCategoria', 'FechaSubCategoria', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('templates/menuAdmin');
            $this->load->view('SubCategoria/SubINCategoria');
            $this->load->view('templates/footer');
        } else {
            $this->subcategoria_model->ingressarSubCategoria();
            
            $this->load->view('templates/header',$data);
            $this->load->view('templates/menuAdmin');
            $this->load->view('SubCategoria/SubINCategoria',$data);
            $this->load->view('templates/footer');
        }
        
    }
    
    

}
