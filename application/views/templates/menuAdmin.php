<body >
    <div class="flex-center flex-column">
        <?php
        $propiedad_img = array(
            'src' => 'public/img/immerproLogo.png',
            'alt' => 'immerpro',
            'class' => 'animated fadeIn mb-2 img-fluid',
            'title' => 'logo',
        );

        echo img($propiedad_img);
        ?>



    </div>

    <div class="flex-center">
        <p class="h1 green-text" >TE ASESORARE MUY BIEN!</p>
    </div>
    <div style="height: 5vh"></div>
    <!-----------------MENU DE LA ADMINISTRACION----------->
    <nav class="navbar navbar-expand-lg navbar-dark blue">
        <?php $atributo = array('class' => 'navbar-brand'); ?>
        <?= anchor('usuario/login', 'Immerpro', $atributo) ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Admin<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar Sesiòn</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Categoría
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('categoria/crear'); ?>">Nueva Categorìa</a>
                        <a class="dropdown-item" href="<?php echo site_url('categoria'); ?>">Listar Categorìa</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Producto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('productos/nuevoProducto'); ?>">Nuevo Producto</a>
                        <a class="dropdown-item" href="<?php echo site_url('productos'); ?>">Consultar Producto</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Proveedor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('proveedor/NuevoProveedor'); ?>">Crear Proveedor</a>
                        <a class="dropdown-item" href="<?php echo site_url('proveedor'); ?>">Consultar Proveedor</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="inv" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Inventario
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="inv">
                        <a class="dropdown-item " href="">Orden Entrada</a>
                        <a class="dropdown-item " href=""> Consultar Orden Entrada</a>
                        <a class="dropdown-item" href="">Orden Salida</a>
                        <a class="dropdown-item" href="">Consultar Orden Salida</a>
                        <a class="dropdown-item" href="<?php echo site_url('inventario'); ?>">Notificaciones</a>
                        <a class="dropdown-item" href="">Reporte</a>
                        <a class="dropdown-item" href="<?php echo site_url('reestablecer'); ?>">Restauraciòn Datos</a>
                    </div>
                </li>
                 
            </ul>
        </div>
    </nav>
    <!-------------FIN NAVEGACION---------------->
    ​