<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria_model
 *
 * @author User
 */
class Categoria_model extends CI_Model {

    //put your code here
    public function obtenerCategorias() {
        $query = $this->db->get('categoria');
        return $query->result_array();
    }

    //ingresar categorias
    public function ingressarCategoria() {

        $this->load->helper('url');
        $categoria = array(

        'NombreCategoria' => $this->input->post('NombreCategoria'),
        'detalles' => $this->input->post('txtdetalle')


        );
        
        return $this->db->insert('categoria', $categoria);
    }

}
