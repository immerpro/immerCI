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
<div class="flex-center flex-column">
    <font size="9" color="<?=$color_slogan?>" face="Comic Sans MS,arial,verdana"><?=$slogan?></font>

</div>

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

                <li class="nav-item dropdown btn-group">
                    <a class="nav-link " id="acerca"> <i class=" fa fa-users"></i> Acerca</a>

                </li>
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link " id="contacto" ><i class="fa fa-phone" aria-hidden="true"></i> Contacto</a>

                </li>

                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-secret" aria-hidden="true"></i> Admin</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="<?php echo site_url('usuario/login') ?>">Login</a>
                        <a class="dropdown-item" href="<?php echo site_url('usuario/registro') ?>">Registro</a>

                    </div>
                </li>


            </ul>

        </div>
    </div>
</nav>



