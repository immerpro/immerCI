
<div style="height: 5vh"></div>
<div class="container" >

    <section class="section">

        <p class="display-4 orange-text text-center">Restauraciòn Informaciòn</p>
        <div style="height: 4vh"></div>
        
        <p class="lead">
            en esta seccion podra ver la informacion que esta inactiva y tendra la opcion 
            de activarla nuevamente por favor dar click sobre los modulos que desee ver
            por ejemplo si quiero ver las categorias eliminadas dar click sobre 
            categoria y se desplegara la informacion solicitada
        </p>
        <div class="row flex-center">

            <div class="col-8"> 
                <!--Accordion wrapper-->
                <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">
                                    Categorìa <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                           
                            <div class="card-body">
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Categorìa</th>
                                            <th>Detalle</th>
                                            <th>Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadoCategoriaDel as $listadoCat): ?>
                                                <td><?= $listadoCat['NombreCategoria'] ?></td>
                                                <td><?= $listadoCat['detalles'] ?></td>
                                                <td>
                                                     <a class="blue-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoCategoria/' . $listadoCat['idCategoria'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                     
                    </div>
                   
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">
                                    producto <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    Proveedor <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="card-body">  <!--listadoproveedores-->
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Telefono</th>
                                            <th>Nombre Proveedor</th>
                                            <th>Contacto</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadoproveedores as $listadoProvee): ?>
                                                <td><?= $listadoProvee['TelefonoProveedor'] ?></td>
                                                <td><?= $listadoProvee['NombreProveedor'] ?></td>
                                                <td><?= $listadoProvee['NombreContacto'] ?></td>
                                                <td><?= $listadoProvee['DireccionProveedor'] ?></td>
                                                <td><?= $listadoProvee['CorreoElectronicoProveedor'] ?></td>
                                                <td>
                                                     <a class="blue-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoProveedor/' . $listadoProvee['idProveedor'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                </div>
                <!--/.Accordion wrapper-->





            </div>    

        </div>
        <!--codigo de barras 13 numeros-->





        

    </section>


</div>


