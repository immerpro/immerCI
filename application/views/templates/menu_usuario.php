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
<div class="flex-center flex-column">
    <p class="h1 green-text <?= $color_slogan ?>" ><?= $slogan ?></p>
</div>
<div style="height: 5vh"></div>
<nav class="navbar navbar-expand-lg navbar-dark blue">
    <a class="navbar-brand" href="<?php echo site_url('usuario') ?>">Immerpro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#acerca"><i class=" fa fa-users"></i> Acerca <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacto"><i class="fa fa-phone" aria-hidden="true"></i> Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('usuario/login') ?>"><i class="fa fa-user-secret" aria-hidden="true"></i> Login</a>
            </li>
            
        </ul>
    </div>
</nav>

​


