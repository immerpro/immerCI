<?php

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // metodo que ejecuta la vista principal
    public function index() {


        // datos para inactivar un producto
        $idProducto = $this->uri->segment(3);
        $data = array(
            'id' => $idProducto,
            'productos' => $this->productos_model->obtenerProductos(),
            'titulo' => "producto",
            'nombrePro' => $this->productos_model->obtener_nombre($idProducto)
        );

        // cargar la vista
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('productos/index', $data);
        $this->load->view('templates/footer');
    }

// metodo que ejecuta la vista para ingresar datos
    public function nuevoProducto() {

        $data['titulo'] = " nuevo producto";
        $data['subcategorias'] = $this->subcategoria_model->obtenerSubCategorias();
        // cargar el helper de manejo de formularios
        $this->load->helper('form');
        // cargar libreria para validar formularios
        $this->load->library('form_validation');
        /* asigno reglas de validacion 1parametro=> name del campo del formulario 
         * 2parametro=> titulo validacion 
          3parametro restricciones */
        $this->form_validation->set_rules('DescripcionProducto', 'Descripción', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('NombreProducto', 'Producto', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('CodigoDeBarras', 'Codigo de barras', 'required|integer');
        $this->form_validation->set_rules('minimoStock', 'minimo Stock', 'required|numeric');
        $this->form_validation->set_rules('MaximoStock', 'maximo Stock', 'required|numeric');
        $this->form_validation->set_rules('Existencias', 'existencias', 'required|numeric');
        // asignar mensajes
        // %s es el nombre del campo que ha fallado
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('alpha_numeric_spaces', 'Ingrese numeros o letras en el  campo %s ');
        $this->form_validation->set_message('numeric', 'Ingrese numeros en el campo %s ');
        $this->form_validation->set_message('integer', 'Ingrese numeros en el campo %s ');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menuAdmin');
            $this->load->view('productos/nuevoProducto');
            $this->load->view('templates/footer');
        } else {
            // llamo al metodo para agregar productos
            
            $ingresoNuevoProducto = $this->productos_model->agregarProducto();
            if ($ingresoNuevoProducto) {
                //Sesion de una sola ejecución
                $this->session->set_flashdata('correcto', 'producto creado correctamente');
            } else {
                $this->session->set_flashdata('incorrecto', ' El producto no  esta  creado');
            }
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menuAdmin');
            $this->load->view('productos/nuevoProducto', $data);

            $this->load->view('templates/footer');
        }
    }

// metodo que ejecuta la vista de edicion de productos
    public function editar() {
        $dato['titulo'] = " Editar producto";
        $idProducto = $this->uri->segment(3);
        $obtenerProducto = $this->productos_model->obtener_productos_a_modificar($idProducto);

        // cargar el helper de manejo de formularios
        $this->load->helper('form');
        // cargar libreria para validar formularios

        if ($obtenerProducto != FALSE) {
            foreach ($obtenerProducto->result() as $fila) {
                $DescripcionProducto = $fila->DescripcionProducto;
                $NombreProducto = $fila->NombreProducto;
                $CodigoDeBarras = $fila->CodigoDeBarras;
                $minimoStock = $fila->minimoStock;
                $MaximoStock = $fila->MaximoStock;
                $Existencias = $fila->Existencias;
            }
            $data = array(
                'id' => $idProducto,
                'descripcion' => $DescripcionProducto,
                'producto' => $NombreProducto,
                'codBarras' => $CodigoDeBarras,
                'minStock' => $minimoStock,
                'maxStock' => $MaximoStock,
                'exist' => $Existencias,
                'subcategorias' => $this->subcategoria_model->obtenerSubCategorias()
            );
        } else {
            $data = '';
            return FALSE;
        }
        $this->load->view('templates/header', $dato);
        $this->load->view('templates/menuAdmin');
        $this->load->view('productos/actualizaProducto', $data);
        $this->load->view('templates/footer');
    }

    // metodo para actualizar un producto
    public function ProductoActualizado() {
        $id = $this->uri->segment(3);
        $producto_a_actualizar = array(
            'DescripcionProducto' => $this->input->post('DescripcionProducto'),
            'NombreProducto' => $this->input->post('NombreProducto'),
            'CodigoDeBarras' => $this->input->post('CodigoDeBarras'),
            'minimoStock' => $this->input->post('minimoStock'),
            'MaximoStock' => $this->input->post('MaximoStock'),
            'Existencias' => $this->input->post('Existencias'),
            'Subcategoria_idSubcategoria' => $this->input->post('subcategoria'),
        );
        $this->productos_model->actualizarProducto($id, $producto_a_actualizar);
        redirect('productos');
    }

    // muestra la vista de modal 
    public function modal() {
        $idProducto = $this->uri->segment(3);
        $mostrarNombre = $this->productos_model->obtener_nombre($idProducto);
        foreach ($mostrarNombre->result() as $fila) {
            $nombreProducto = $fila->NombreProducto;
        }
        $info_modal = array(
            'id' => $idProducto,
            'titulo_h1' => "producto a inactivar",
            'titulo' => "modal",
            'nombrePro' => $nombreProducto
        );

        $this->load->view('templates/header', $info_modal);
        $this->load->view('productos/modal', $info_modal);
    }

    // inactiva un producto
    public function inactivar($id) {
        /*$mostrarNombre = $this->productos_model->obtener_nombre($id);
        foreach ($mostrarNombre->result() as $fila) {
            $nombreProducto = $fila->NombreProducto;
        }
        $info_modal = array(
            'id' => $id,
            'titulo_h1' => "producto a inactivar",
            'titulo' => "modal",
            'nombrePro' => $nombreProducto
        );
        */
        $inactivoProducto = $this->productos_model->inactivarProducto($id);
         redirect('productos');         
           
        
    }

}
