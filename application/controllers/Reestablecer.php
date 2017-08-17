<?php

class Reestablecer extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('inventario_model');
    }

    public function index() {
        
//        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
//            redirect(base_url().'usuario/login'); 
//        }
        $data=[
            'titulo'=>'Restauracion',
            'listadoCategoriaDel'=> $this->inventario_model->mostrarCategoriaEliminada()
            
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('restauracion/index', $data);
        $this->load->view('templates/footer');
    }

    public function activoCategoria($codCategoria) {
        $activoCat = $this->inventario_model->activarCategoria($codCategoria);
        if ($activoCat) {
            echo "<script type='text/javascript'>"
            . "alert('la categorìa fue activada correctamente y se podra ver en el listado de categorias');"
                    . "location.href = 'http://localhost/ImmerPRO_CI/categoria';"
                    . "</script>";
            
        }
        

    }

}
