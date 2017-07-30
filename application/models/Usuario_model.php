<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_model
 *
 * @author APRENDIZ
 */
class Usuario_model extends CI_Model{
    Public function __construct() {
        parent::__construct();
    }

    //put your code here
    public function registrarusuario($registroU){

      return $this->db->insert('usuario', $registroU);  
    }
    
    public function iniciarSesion($usuario,$password) {
        
        $this->db->where('NombreUsuario', $usuario);
        $this->db->where('ClaveUsuario', $password);
         $consulta = $this->db->get('usuario');
         if ($consulta->num_rows()== 1) {
             return $consulta->row();
         }  else {
           return FALSE;  
            
         }
         $this->session->set_flashdata('usuario_mal','datos ingresados incorrectos');
         redirect(base_url().'usuario/login','refresh');
        
    }
}
