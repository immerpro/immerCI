<body >
     <div class="flex-center flex-column">
                <?php
                $propiedad_img = array(
                    'src' => 'public/img/immerproLogo.png',
                    'alt' => 'immerpro',
                    'class' => 'animated fadeIn mb-2',
                    'title' => 'logo',
                    
                   
                );

                echo img($propiedad_img);
                ?>
               


            </div>
   
    <center>
        <font size="9" color="orange" face="Comic Sans MS,arial,verdana">TE ASESORARE MUY BIEN!</font>
    </center>
    <br>
    <br>
​<nav class="navbar navbar-toggleable-md navbar-dark orange">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>Immerpro</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"> <i class="fa fa-user"></i> Admin</a>
                </li>
              <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoría</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="<?php echo site_url('categoria/crear'); ?>">Crear Categoría</a>
                        <a class="dropdown-item" href="<?php echo site_url('categoria'); ?>">Listar Categoría</a>
                        
                    </div>
                </li>
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SubCategoría</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="<?php echo site_url('subcategoria/crear'); ?>">Crear SubCategoría</a>
                        <a class="dropdown-item" href="<?php echo site_url('subcategoria'); ?>">Listar SubCategoría</a>
                        
                    </div>
                </li>
               
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Producto</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="<?php echo site_url('productos/crear'); ?>">Crear Producto</a>
                        <a class="dropdown-item" href="<?php echo site_url('productos'); ?>">Consultar Producto</a>
                        
                    </div>
                </li>
                 <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proveedor</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Crear Proveedor</a>
                        <a class="dropdown-item">Consultar Proveedor</a>
                        
                    </div>
                </li>
                 <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventario</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Orden Entrada</a>
                        <a class="dropdown-item">Orden Salida</a>
                        
                    </div>
                </li>
               
            </ul>
          
        </div>
    </div>
</nav>
