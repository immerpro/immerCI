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

    
   public function TraerDatos(){
      $this->db->select('*');
      $this->db->from('proveedor');
      $query= $this->db->get();
      return $query->result_array();
   }
   
    public function Proveedor_Modificar($idProveedor) {
        $this->db->where('idProveedor', $idProveedor);
        $query = $this->db->get('proveedor');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

   
       public function EditarProveedor($idProveedor, $data) {
        $this->db->where('idProveedor', $idProveedor);
        $this->db->update('proveedor', $data);
    }
       
}
