<?php

class Proveedor extends CI_Controller {

    private $proveedor_model;

    public function __construct() {
        parent::__construct();
        $this->load->model('Proveedor_model');
    }

    // metodo que ejecuta la vista principal


public function NuevoProveedor(){
    $t['titulo'] = " Nuevo Porveedor";
//        $data['subcategorias'] = $this->subcategoria_model->obtenerSubCategorias();
        //clase para validar en codeigneiter 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txtNProveedor', 'Nombre', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('txtNit', 'nit', 'required');
        $this->form_validation->set_rules('txtcorreo', 'Email', 'required|valid_email|is_unique[usuario.email]');
        $this->form_validation->set_rules('txtdireccion', 'Direccion', 'required');
        $this->form_validation->set_rules('txtcontacto', 'Contacto', 'required');
        $this->form_validation->set_rules('txttelefono', 'Telefono', 'required|numeric');


        $this->form_validation->set_message('valid_email', 'Ingrese un correo valido');
        $this->form_validation->set_message('is_unique', '%s Debe ser unico');
        $this->form_validation->set_message('numeric', 'Los Datos de %s deben ser numericos');
        $this->form_validation->set_message('alpha_numeric', 'El campo %s debe tener letras y numero');

     
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $t);
            $this->load->view('templates/menuAdmin');
            $this->load->view('Proveedor/NuevoProveedor');
            $this->load->view('templates/footer');
        } else {
            // llamo al metodo para agregar productos
            $this->load->helper('url');
            // ingresamos los datos 
             $data = array (
                'TelefonoProveedor' => $this->input->post('txttelefono'),
                'NombreProveedor' => $this->input->post('txtNProveedor'),
                'NombreContacto' => $this->input->post('txtcontacto'),
                'DireccionProveedor' => $this->input->post('txtdireccion'),
                'CorreoElectronicoProveedor' => $this->input->post('txtcorreo'),
                'nit' => $this->input->post('txtNit'),
                'Estados_idEstados' => 1,
                );
            $registro = $this->Proveedor_model->RegistrarProveedor($data);

            if ($registro) {
                //Sesion de una sola ejecución
                $this->session->set_flashdata('correcto', ' creado correctamente');
            } else {
                $this->session->set_flashdata('incorrecto', ' se produjo un error al registrar ');
            }
            // cargar la vista
            $this->load->view('templates/header', $t);
            $this->load->view('templates/menuAdmin');
            $this->load->view('Proveedor/NuevoProveedor');
            $this->load->view('templates/footer');
        }
    }

}
