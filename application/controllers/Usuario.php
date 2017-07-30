<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function Login() {
        switch ($this->session->userdata('perfil')) {
            case '':
                $data = array('token' => $this->token(), 'titulo' => 'login');
                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu_usuario');
                $this->load->view('Usuario/Login');
                $this->load->view('templates/footer');

                break;
            case 1:
                redirect(base_url() . 'admin');
//                $this->load->view('templates/header', $data);
//                $this->load->view('templates/menu_usuario');
//                $this->load->view('Admin/index');
//                $this->load->view('templates/footer');

                break;
            case 2:
                redirect(base_url() . 'colaborador');
//                $this->load->view('templates/header', $data);
//                $this->load->view('templates/menu_usuario');
//                $this->load->view('Colaborador/index');
//                $this->load->view('templates/footer');

                break;
            default:
                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu_usuario');
                $this->load->view('Usuario/index');
                $this->load->view('templates/footer');
                break;
        }
    }

    public function ingresoUsuario() {
        if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {

            $this->form_validation->set_rules('txtusuario', 'usuario', 'required|trim|min_length[2]|max_length[12]|xss_clean',
        array('xss_clean' => 'Error Message: su xss no esta limpio.'));
            $this->form_validation->set_rules('txtpassword', 'password', 'required|trim|min_length[5]|max_length[12]|xss_clean');
            if ($this->form_validation->run() === FALSE) {
                $this->Login();
            } else {
                $nombreusuario = $this->input->post('txtusuario',TRUE);
                $claveusuario = sha1($this->input->post('txtpassword',TRUE));
                $logueo = $this->usuario_model->iniciarSesion($nombreusuario, $claveusuario);
                if ($logueo == true) {
                    $infouser = array(
                        'esta_logueado' => true,
                        'idUsuario' => $logueo->idUsuario,
                        'perfil' => $logueo->RolUsuario_idRolUsuario,
                        'usuario' => $logueo->NombreUsuario,
                    );
                    $this->session->set_userdata($infouser);
                    $this->Login();
                } else {
                    $this->session->set_flashdata('usuario_mal', 'datos ingresados incorrectos');
                    
                }
            }
        } else {
            redirect(base_url().'usuario/login');
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
        $this->form_validation->set_rules('txtpassword', 'password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Confirmar Password', 'required');


        $this->form_validation->set_message('valid_email', 'Ingrese un correo valido');
        $this->form_validation->set_message('is_unique', '%s Debe ser unico');
        $this->form_validation->set_message('matches', 'Las Contraseñas no coinciden porfavor vuelva A Intentarlo');
        $this->form_validation->set_message('alpha_numeric', 'El campo %s debe tener letras y numero sin espacios');

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
