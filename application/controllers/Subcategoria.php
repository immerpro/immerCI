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
        $this->load->model('subcategoria_model');
        $this->load->model('categoria_model');

        $this->load->helper('url_helper');
    }

    public function index() {
        // usamos la clase SubCategoria y llamamos al metodo que obtiene todas las Subcategorias
        $data['Subcategorias'] = $this->subcategoria_model->obtenerSubCategorias();
        $data['titulo'] = "Subcategoria";
        // cargar la vista
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('SubCategoria/index', $data);
        $this->load->view('templates/footer');
    }

    public function SubInCategoria() {
         $mostrarNombre= $this->categoria_model->nombrecategoria($this->uri->segment(3));
             foreach ($mostrarNombre as $fila) {
            $nombreCategoria = $fila->NombreCategoria;
        }
            $data=['titulo'=>'agregar subcategoria',
                'codcategoria'=>$this->uri->segment(3),
               'nombrecategoria'=>$nombreCategoria];

        //$data['categorias'] = $this->categoria_model->obtenerCategorias();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('NombreSubCategoria', 'subcategoria', 'required');
        $this->form_validation->set_rules('detalSubCategoria', 'detalle subcategoria', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menuAdmin');
            $this->load->view('SubCategoria/NuevaSubcategoria');
            $this->load->view('templates/footer');
        } else {
            $multiInsert = ['NombreSubcategoria' => $this->input->post('NombreSubcategoria'),
                'detallesSub' => $this->input->post('detalSubCategoria'),
                'Categoria_idCategoria' => $this->input->post('codigoCategoria'),
                ];

            $this->subcategoria_model->InsertSubcategoria($multiInsert);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/menuAdmin');
            $this->load->view('SubCategoria/NuevaSubcategoria', $data);
            $this->load->view('templates/footer');
        }
    }

    public function editarSub() {
        
       
        $dato['titulo'] = " Editar SubCategoria";
        $idSubCategoria = $this->uri->segment(3);
        $obtenerSubCategoria = $this->subcategoria_model->modificar_subcategoria($idSubCategoria);

        // cargar el helper de manejo de formularios
        $this->load->helper('form');
        // cargar libreria para validar formularios

        if ($obtenerSubCategoria != FALSE) {
            foreach ($obtenerSubCategoria->result() as $fila) {
                $NombreSubCategoria = $fila->NombreSubcategoria;
                $detallesSub = $fila->detallesSub;
                $codCategoria = $fila->Categoria_idCategoria;
                
            }
            $data = array(
                'idSub' => $idSubCategoria,
                'NombreSub' => $NombreSubCategoria,
                'DetallesSub' => $detallesSub,
                'codCategoria'=>$codCategoria
            );
        } else {
            $data = '';
            return FALSE;
        }
        $this->load->view('templates/header', $dato);
        $this->load->view('templates/menuAdmin');
        $this->load->view('SubCategoria/Actualizasubcategoria', $data);
        $this->load->view('templates/footer');
    }

    public function actualizarsub() {

        $idsub = $this->uri->segment(3);
        $subcategoria_a_modificar = array(
            'NombreSubcategoria' => $this->input->post('NombreSubcategoria'),
            'detallesSub' => $this->input->post('detalSubCategoria'),
            'Categoria_idCategoria' => $this->input->post('hdcodigoCategoria')
        );
        $act = $this->subcategoria_model->Actualizasubcategoria($idsub, $subcategoria_a_modificar);


        if ($act == true) {
            $this->session->set_flashdata('correcto', 'La Subcategoria fue actualizada correctamente');
        } else {
            $this->session->set_flashdata('incorrecto', 'La Subcategoria no se pudo actualizada correctamente');
        }


        redirect('productos');
    }
    
    public function InactivarSub(){
        
        $idsub = $this->uri->segment(3);
        $inactivasub = $this->subcategoria_model->inactivarSubcategoria($idsub);
        
        
        
    }

}
