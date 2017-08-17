<?php

class Admin extends CI_Controller{
    //put your code here
   public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
    }
    public function index() {
//        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 2) {
//            redirect(base_url().'usuario/login'); 
//        }
        $data['titulo'] = 'Colaborador';
        $this->load->view('templates/header', $data);
                $this->load->view('templates/menuAdmin');
                $this->load->view('Admin/index');
                $this->load->view('templates/footer');
        
    }
}
