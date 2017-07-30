<?php

class Proveedor extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
public function index(){
    
            
        $data = array(
            
            'titulo' => "Provedor",
           
        );

    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('Proveedor/index', $data);
        $this->load->view('templates/footer');
    
    
}

public function NuevoProveedor(){
    
            
        $data = array(
            
            'titulo' => "Provedor",
           
        );

    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('Proveedor/NuevoProveedor', $data);
        $this->load->view('templates/footer');
    
    
}

}