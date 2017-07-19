<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author User
 */
class Categoria extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('categoria_model');
        $this->load->helper('url_helper');
    }
        public function index() {
        // usamos la clase Categoria y llamamos al metodo que obtiene todos los categorias
        $data['categorias'] = $this->categoria_model->obtenerCategorias();
        $data['titulo'] = "categoria";
        // cargar la vista
        $this->load->view('templates/header',$data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('Categoria/index', $data);
        $this->load->view('templates/js');
        $this->load->view('templates/footer');
    }
    
    public function InCategoria(){
        $data['Mensaje'] = "Categoria creada correctamente";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('NombreCategoria', 'NombreCategoria', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/menuAdmin');
            $this->load->view('Categoria/INCategoria');
            $this->load->view('templates/js');
            $this->load->view('templates/footer');
        } else {
            $this->categoria_model->ingressarCategoria();
            
            $this->load->view('templates/header');
            $this->load->view('templates/menuAdmin');
            $this->load->view('Categoria/INCategoria',$data);
            $this->load->view('templates/js');
            $this->load->view('templates/footer');
        }
        
    }
    
    

}
