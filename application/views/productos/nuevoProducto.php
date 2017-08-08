<div style="height: 5vh"></div>
<div class="container" >

    <section class="section">
        <div class="row">
            <div class="col-6 ">
                <?php if (validation_errors()): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo validation_errors(); ?> 

                    </div>
                <?php endif; ?>
            </div>

        </div>
        <?php if ($this->session->flashdata('correcto')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('correcto'); ?> 
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('incorrecto'); ?> 
            </div>

        <?php endif; ?>


        <p class="display-4 orange-text flex-center">Nuevo Producto</p>
        <div style="height: 4vh"></div>
        <?php echo form_open('producto/nuevoProducto'); ?>

        <div class="row" data-parsley-validate>

            <div class="col-6"> 
                <div class="md-form">
                    <input type="text" id="prod" class="form-control" name="txtNombProd" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" >
                    <label for="prod" >Nombre Producto</label>
                </div>
                <div class="md-textarea">
                    <label for="DescripcionProducto" >Descripcion</label>
                    <textarea name="DescripcionProducto" 
                              cols="5"
                              rows="3"
                              class="form-control" 
                              data-parsley-required="true" 
                              data-parsley-trigger="keyup" 
                              data-parsley-required-message="el campo no debe estar vacio">
                                  <?= set_value('DescripcionProducto') ?>         
                    </textarea><br />  
                </div>


                <div class="md-form">
                    <input type="text" name="CodigoDeBarras" id="CodigoDeBarras" class="form-control" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('CodigoDeBarras') ?>"/><br />        
                    <label for="CodigoDeBarras" >Codigo de barras</label>
                </div>
                <div class="md-form">
                    <label for="cantidad" >Cantidad del Producto</label>
                    <input type="text" name="nbCantidadPro" class="form-control"  id="cantidad" required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-number-message="debe ingresar numeros" value="<?= set_value('nbCantidadPro') ?>"/><br /> 

                </div>


            </div>    
            <div class="col-6">
                <div class="md-form">
                    <label for="minimo" >minimoStock</label>
                    <input type="number" name="minimoStock"  id="minimo" class="form-control" required="required" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('minimoStock') ?>"/><br />

                </div>
                <div class="md-form">
                    <label for="Maximo" >MaximoStock</label>
                    <input type="number" name="MaximoStock" id="Maximo" class="form-control" required="required" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('MaximoStock') ?>"/><br />

                </div>
                <div class="md-form">
                    <label for="exist" >Existencias</label>
                    <input type="text" name="Existencias"  id="exist" class="form-control" required data-parsley-type="integer" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" data-parsley-integer-message="debe ingresar numeros" value="<?= set_value('Existencias') ?>"/><br />
                </div>
                <label for="subcategoria" >Subcategoria</label>
                <select name="subcategoria" class="form-control" required="required" >
                    <?php foreach ($subcategorias as $itemSubcategoria): ?>
                        <option value="<?php echo $itemSubcategoria['idSubcategoria'] ?>"><?php echo $itemSubcategoria['NombreSubcategoria'] ?></option>
                    <?php endforeach; ?>    
                </select>
            </div>    

        </div>
        <!--codigo de barras 13 numeros-->
        <div class="row">

            <div class="col-6">
                <label for="txtLote" >Lote</label>
                <input type="text" name="txtLote" class="form-control" data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('txtLote') ?>"/><br /> 

            </div>
            <div class="col-6">
                <label for="fvencimiento" >Fecha de vencimiento</label>
                <input type="date" name="fvencimiento" class="form-control" data-parsley-required="true" data-parsley-trigger="keyup" data-parsley-required-message="el campo no debe estar vacio" value="<?= set_value('fvencimiento') ?>"/><br /> 

            </div>

        </div>

        <div class="flex-center">
            <button type="submit" class="btn btn-orange waves-effect orange" name="btnNuevoProducto" ><i class='fa fa-send'> Crear Producto</i></button>

        </div>


        <?php echo form_close(); ?>

    </section>

    <script>
        $(document).ready(function () {
            $('form').parsley();
        });
    </script>
</div>