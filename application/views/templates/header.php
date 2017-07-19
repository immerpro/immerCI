<!DOCTYPE html>
<html lang="es">
    <body>

        <!-- Start your project here-->
        <div class="container" >
            <div class="flex-center flex-column">
                <?php
                $propiedad_img = array(
                    'src' => 'public/img/immerpro.png',
                    'alt' => 'immerpro',
                    'class' => 'img_200',
                    'title' => 'That was quite a night',
                    'height'=>'200',
                    'width'=>'200'
                   
                );

                echo img($propiedad_img);
                ?>
                <h1 class="green-text">¡¡Hazme Parte de Ti!!</h1>


            </div>
            <section class="section">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta http-equiv="x-ua-compatible" content="ie=edge">
                    <title><?php  echo $titulo;?></title>
                    <!-- Font Awesome -->
                    <?php echo link_tag('public/css/font-awesome/css/font-awesome.min.css'); ?>
                    <?php echo link_tag('public/css/bootstrap.min.css'); ?>
                    <?php echo link_tag('public/css/mdb.min.css'); ?>
                    <?php echo link_tag('public/css/style.css'); ?>
                    <?php echo link_tag('public/css/bootstrap-social/bootstrap-social.css'); ?>

                </head>