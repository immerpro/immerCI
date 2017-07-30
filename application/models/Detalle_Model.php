<?php

class Detalle_Model extends CI_Model {

    // ingresamos el detalle del producto
    public function ingresarDetalle($datosDetalle) {
        return $this->db->insert('detalleproducto', $datosDetalle);
    }

    public function obtener_id_producto() {
        $this->db->select_max('idProducto');
        $query = $this->db->get('producto');
        return $query;
    }

}
