<?php

class Inventario extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('inventario_model');
    }

    public function index() {
//        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
//            redirect(base_url().'usuario/login'); 
//        }
        $data['titulo'] = 'Notificaciones';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('inventario/notifica');
        $this->load->view('templates/footer');
    }

    public function notificar() {
//        $this->form_validation->set_rules('txtnoticorreo', 'Correo Electrònico', 'valid_email');
        $this->form_validation->set_rules('txtnoticelular', 'Celular', 'min_length[10]|integer');
        $this->form_validation->set_message('integer', 'Ingrese numeros en el campo %s ');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener 10 numeros');
//        $this->form_validation->set_message('valid_email', 'El campo %s debe ser un correo valido');
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            if ($this->input->post('txtnoticorreo') != "") {
                echo "notifico por correo";
                redirect('productos');
//            $this->load->library("email");
//            //configuracion para gmail
//            $configGmail = array(
//                'protocol' => 'smtp',
//                'smtp_host' => 'ssl://smtp.gmail.com',
//                'smtp_port' => 465,
//                'smtp_user' => 'chingonduarte2017@gmail.com',
//                'smtp_pass' => 'NicoRobin1984.',
//                'mailtype' => 'html',
//                'charset' => 'utf-8',
//                'newline' => "\r\n"
//            );
//
//            //cargamos la configuración para enviar con gmail
//            $this->email->initialize($configGmail);
//
//            $this->email->from('Immerpro');
//            $this->email->to($this->input->post('txtnoticorreo'));
//            $this->email->subject('Bienvenido/a Immerpro');
//            $this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Usted tiene 5 productos agotados ');
//            $this->email->send();
//            //con esto podemos ver el resultado
//            var_dump($this->email->print_debugger());
            }
            if ($this->input->post('txtnoticelular') != "") {
                echo "voy a notificar por celular";
                 redirect('productos');
            }
            $this->index();
        }
    }
    
    public function OrdenSalida(){
        $data = ['titulo'=>'Oreden Salida','lproducto'=> $this->productos_model->obtenerProductos()];
       
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('inventario/OrdenSalida',$data);
        $this->load->view('templates/footer');
        
    }
    
    public function CrearSalida(){
        $data =['titulo'=>'NuevaOrdenDeSalida'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('inventario/NuevaSalida');
        $this->load->view('templates/footer');
        
    }

}
