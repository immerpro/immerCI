<?php

class Productos_model extends CI_Model {

    //obtener todos los productos
    public function obtenerProductos() {
        $query = $this->db->get('producto');
        return $query->result_array();
    }

    // agregar nuevos productos
    public function agregarProducto() {
        $this->load->helper('url');
        // ingresamos los datos 
        $data = array(
            'DescripcionProducto' => $this->input->post('DescripcionProducto'),
            'NombreProducto' => $this->input->post('NombreProducto'),
            'CodigoDeBarras' => $this->input->post('CodigoDeBarras'),
            'minimoStock' => $this->input->post('minimoStock'),
            'MaximoStock' => $this->input->post('MaximoStock'),
            'FechaRegistro'=> time(),
            'Existencias' => $this->input->post('Existencias'),
            'Subcategoria_idSubcategoria' => 4,
            'Estados_idEstados' => 1,
        );

        return $this->db->insert('producto', $data);
    }

}
