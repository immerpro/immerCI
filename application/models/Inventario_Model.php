<?php

class Inventario_Model extends CI_Model {

    Public function __construct() {
        parent::__construct();
    }

    // codigo para mostrar las categorias eliminadas
    public function mostrarCategoriaEliminada() {
        $this->db->where('Estado_estadoId', 2);
        $query = $this->db->get('categoria');
        return $query->result_array();
    }

    // codigo para activar las categorias 
    public function activarCategoria($codigoCategoria) {
        $this->db->set('Estado_estadoId', 1, FALSE);
        $this->db->where('idCategoria', $codigoCategoria);
        $activaCat = $this->db->update('categoria');
        return $activaCat;
    }

    // codigo para activar los productos 
    // codigo para activar los proveedores
}
