<?php

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('table'); //-->haremos uso de tablas
        $this->load->library('Jquery_pagination'); //-->uso de paginación 
    }

    // metodo que ejecuta la vista principal
    public function index($numPag = 0) {
        //creamos la salida del html a la vista con ob_get_contents
        //que lo que hace es imprimir el html
        ob_start();
        $this->pagina(0);
        $initial_content = ob_get_contents();
        ob_end_clean();

        //asignamos $initial_content al array data para pasarlo a la vista
        //y así poder mostrar tanto los links como la tabla
        // datos para inactivar un producto
//        $idProducto = $this->uri->segment(3);
        $data = array(
            'div1' => " <div id='pagina'>",
            'table' =>  $initial_content ,
            'titulo' => "producto"
            
        );
//
//        // cargar la vista
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menuAdmin');
        $this->load->view('productos/index', $data);
        $this->load->view('templates/footer');
    }

    public function pagina($numPag = 0) {
        //hacemos la configuración de la librería jquery_pagination
        $config['base_url'] = base_url('producto/pagina/');
        
       
        $config['div'] = '#pagina'; //asignamos un id al contenedor general

        $config['anchor_class'] = 'page-link'; //asignamos una clase a los links para maquetar

        $config['show_count'] = false; //en true queremos ver Viendo 1 a 10 de 52

        $config['total_rows'] = $this->productos_model->cantidad_filas();

        $config['per_page'] = 4; //-->número de productos por página

        $config['num_links'] = 4; //-->número de links visibles

        $config['first_link'] = '&lsaquo; Primera'; //->configuramos 
        $config['next_link'] = '&gt;'; //-------------->los links
        $config['prev_link'] = '&lt;'; //-------------->de anterior
        $config['last_link'] = 'Última &rsaquo;'; //--->y siguiente
        //inicializamos la librería
        $this->jquery_pagination->initialize($config);

        //creamos la cabecera de nuestra tabla con los campos que necesitemos
        $template = array(
        'table_open'            => '<table class="table table-striped table-bordered table-hover table-responsive">',

        'thead_open'            => '<thead class="thead-inverse">',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$this->table->set_template($template);
        $this->table->set_heading('Descripción Producto','Nombre Producto','Minimo Stock', 'Maximo Stock', 'Existencias', 'Acciones');
        foreach ($this->productos_model->paginarProducto($config['per_page'], $numPag)as $productos_item) {
                  $this->table->add_row(
                          $productos_item['DescripcionProducto'],
                          $productos_item['NombreProducto'], 
                          $productos_item['minimoStock'],
                          $productos_item['MaximoStock'],
                          $productos_item['Existencias'],
                          '<a href='.base_url().'producto/editar/'.$productos_item['idProducto'].'><button class="btn btn-tw btn btn-info"><strong>Modificar</strong></button></a>'
                          . nbs(3).'<a href='.base_url().'producto/inactivar/'.$productos_item['idProducto'].' class="btn btn-danger inactivar_producto">Inactivar</a>');
             
        }
                //cargamos la paginación con los links
        $html = $this->table->generate().
                $this->jquery_pagination->create_links();

        echo $html;
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
        $this->form_validation->set_rules('txtNombProd', ' nombre Producto', 'required|alpha_numeric_spaces');
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
        /* $mostrarNombre = $this->productos_model->obtener_nombre($id);
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
