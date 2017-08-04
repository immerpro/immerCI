
<?php

class SubCategoria_model extends CI_Model {
    //put your code here
    public function obtenerSubCategorias() {
        $query = $this->db->get('subcategoria');
        return $query->result_array();
    }
    //ingresar Subcategorias
    public function ingressarSubCategoria() {
        $this->load->helper('url');
        $Subcategoria = array(
        'NombreSubCategoria' => $this->input->post('NombreSubCategoria'),
        'FechaSubCategoria' => date("Y-m-d H:i:s") 
        );
        
        return $this->db->insert('subcategoria', $Subcategoria);
    }
    public function Versub($id) {
        
        $this->db->select('*');
        $this->db->from('subcategoria');
        $this->db->join('categoria', 'Categoria.idCategoria = subcategoria.Categoria_idCategoria');
        $this->db->where('Categoria.idCategoria',$id );
        $query = $this->db->get();
        return $query->result_array();
    }

}