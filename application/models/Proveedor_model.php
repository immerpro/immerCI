<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Proveedor_model extends CI_Model {

    Public function __construct() {
        parent::__construct();
    }
    
    public function RegistrarProveedor($registroP){

      return $this->db->insert('proveedor', $registroP);  
    }

       
}
