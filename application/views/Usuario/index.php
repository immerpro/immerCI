<style>
    .imagencard{
    width: 300px;
    height: 500px;
}
</style>
   
    <h1 class="h2-responsive orange-text text-center">Acerca</h1>
   
    <blockquote class="text-center blockquote">
        <p>Immerpro es un proyecto web orientado al proceso de inventarios para minimercados realizado por aprendices del sena como proyecto de grado.</p>

    </blockquote>
    <center>
       
       <h1 class="h2-responsive orange-text text-center">Caracteristicas</h1>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <?php
                                $propiedad_img = array(
                                    'src' => 'public/img/ima.jpg',
                                    'alt' => 'immerpro',
                                    'class' => 'animated fadeIn mb-2 imagencard',
                                    'title' => 'logo',
                                   
                                    
                                );
                                echo img($propiedad_img);
                                ?>

                                <div class="caption">
                                    <h3>
                                        1
                                    </h3>
                                    <p>
                                        Gestiona los inventarios de manera segura
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                 <?php
                                $propiedad_img2 = array(
                                    'src' => 'public/img/cream.jpg',
                                    'alt' => 'immerpro',
                                    'class' => 'animated fadeIn mb-2 imagencard',
                                    'title' => 'logo',
                                    
                                    
                                );
                                echo img($propiedad_img2);
                                ?>
                                <div class="caption">
                                    <h3>
                                        2
                                    </h3>
                                    <p>
                                        Agilidad en sus procesos 
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <?php
                                $propiedad_img3 = array(
                                    'src' => 'public/img/food.jpg',
                                    'alt' => 'immerpro',
                                    'class' => 'animated fadeIn mb-2 imagencard',
                                    'title' => 'logo',
                                    
                                    
                                );
                                echo img($propiedad_img3);
                                ?>
                                <div class="caption">
                                    <h3>
                                        3
                                    </h3>
                                    <p>
                                        Facil manejo y orientado al cliente 
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
       <div class=""></div>
        <!--Section: Contact v.1-->
        <section class="section mb-4">

            <!--Section heading-->
            <h1 class="section-heading">Contactanos</h1>
            <!--Section sescription-->


            <div class="row">

                <!--First column-->
                <div class="col-md-5">

                    <!--Form with header-->
                    <div class="card">

                        <div class="card-block">
                            <!--Header-->
                            <div class="form-header mdb-color">
                                <h3><i class="fa fa-envelope"></i> Estimado usuario</h3>
                            </div>

                            <p>Ingresa todos tus datos y añade un comentario.</p>
                            <br>

                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="form3" class="form-control">
                                <label for="form3">Su Nombre</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control">
                                <label for="form2">Su email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-tag prefix"></i>
                                <input type="text" id="form32" class="form-control">
                                <label for="form32">Asunto</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" id="form8" class="md-textarea"></textarea>
                                <label for="form8">Mensaje</label>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-tw btn btn-info">Enviar</button>
                            </div>

                        </div>

                    </div>
                    <!--/Form with header-->

                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-7">

                    <!--Google map-->
                    <div >
                        <?php
                                $propiedad_img4 = array(
                                    'src' => 'public/img/immerpro.png',
                                    'alt' => 'immerpro',
                                    'class' => 'animated fadeIn mb-2 imagencard',
                                    'title' => 'logo',
                                    
                                    
                                );
                                echo img($propiedad_img4);
                                ?>
                    </div>

                    <!--Buttons-->
                    <div class="row text-center">

                        <div class="col-md-4">
                            <a class="btn-floating btn-small mdb-color"></a>
                            <p></p>
                            <p> </p>
                        </div>
                        <div class="btn btn-tw btn btn-info">
                            <a class="btn-floating btn-small mdb-color"><i class="fa fa-phone"></i></a>
                            <p>imerpro</p>
                            <p>immerpro@gmail.com</p>
                        </div>

                    </div>

                </div>
                <!--/Second column-->

            </div>

        </section>
        <!--/Section: Contact v.1-->
    </center>
