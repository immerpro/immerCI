<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function Login() {
        switch ($this->session->userdata('rol')) {
            case '':
                $data = array('token' => $this->token(), 'titulo' => 'login');
                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu_usuario');
                $this->load->view('Usuario/Login');
                $this->load->view('templates/footer');

                break;
            case 1:
                redirect(base_url() . 'admin');
                break;
            case 2:
                redirect(base_url() . 'colaborador');
                break;
            default:
                $data = array('titulo' => 'login');
                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu_usuario');
                $this->load->view('Usuario/Login');
                $this->load->view('templates/footer');
                break;
        }
    }

    public function ingresoUsuario() {
        $this->load->library('form_validation');
        if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {

            $this->form_validation->set_rules('txtusuario', 'usuario', 'required|trim|min_length[5]|max_length[15]xss_clean');
            $this->form_validation->set_rules('txtpassword', 'password', 'required|trim|min_length[5]|max_length[12]xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->Login();
            } else {
                $nombreusuario = $this->input->post('txtusuario');
                $claveusuario = sha1($this->input->post('txtpassword'));
                $logueo = $this->usuario_model->login_user($nombreusuario, $claveusuario);
                if ($logueo === true) {
                    $infouser = array(
                        'esta_logueado' => true,
                        'idUsuario' => $logueo->idUsuario,
                        'rol' => $logueo->RolUsuario_idRolUsuario,
                        'usuario' => $logueo->NombreUsuario,
                    );
                    $this->session->set_userdata($infouser);
                    $this->Login();
                }
            }
        } else {
            redirect(base_url() . 'usuario/login');
        }
    }

    //el token evita los sitios cruzados 
    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    public function cerrarsesion() {
        $this->this->session->sess_destroy();
        $this->Login();
    }

    public function Registro() {
        //clase para validar en codeigneiter 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txtnombrecompleto', 'Nombre', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('txtcorreo', 'correo', 'required|valid_email|is_unique[usuario.email]');
        $this->form_validation->set_rules('txtusuario', 'usuario', 'required|alpha_numeric');
        $this->form_validation->set_rules('txtpassword', 'password', 'required');
        $titulo['titulo'] = "Registro";
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $titulo);
            $this->load->view('templates/menu_usuario');
            $this->load->view('Usuario/Registro');
            $this->load->view('templates/footer');
        } else {
            // llamo al metodo para agregar productos
            $this->load->helper('url');
            // ingresamos los datos 
            $data = array(
                'ClaveUsuario' => sha1($this->input->post('txtpassword')),
                'NombreUsuario' => $this->input->post('txtusuario'),
                'RolUsuario_idRolUsuario' => 2,
                'nombreCompleto' => $this->input->post('txtnombrecompleto'),
                'email' => $this->input->post('txtcorreo'),
            );
            $registrouser = $this->usuario_model->registrarusuario($data);
            if ($registrouser) {
                //Sesion de una sola ejecución
                $this->session->set_flashdata('correcto', 'usuario creado correctamente');
            } else {
                $this->session->set_flashdata('incorrecto', ' se produjo un error al registrar el usuario intentalo mas tarde');
            }
            // cargar la vista
            $this->load->view('templates/header', $titulo);
            $this->load->view('templates/menu_usuario');
            $this->load->view('Usuario/Registro');
            $this->load->view('templates/footer');
        }
    }

}
