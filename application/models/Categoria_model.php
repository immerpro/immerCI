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

    public function nombrecategoria($id) {


        $this->db->select('NombreCategoria');
        $this->db->from('categoria');
        $this->db->where('idCategoria', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function Actualizacategoria($idCategoria, $data) {
        $this->db->where('idCategoria', $idCategoria);
        $this->db->update('categoria', $data);
    }

    public function obtener_categoria_a_modificar($idCategoria) {
        $this->db->where('idCategoria', $idCategoria);
        $query = $this->db->get('categoria');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

}
