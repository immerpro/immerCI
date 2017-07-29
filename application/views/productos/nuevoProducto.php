<div class="container" >

    <section class="section">
        <div class="row">
            <div class="col-6 ">
                <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
            </div>

        </div>
        <?php if ($this->session->flashdata('correcto')): ?>
            <div class=" alert alert-success" ><?php echo $this->session->flashdata('correcto'); ?> </div> 
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
        <?php endif; ?>


        <p class="display-4 orange-text flex-center">Nuevo Producto</p>

        <?php echo form_open('producto/nuevoProducto'); ?>

        <div class="row">

            <div class="col-6"> 
                <div class="md-form">
                    <input type="text" id="form1" class="form-control" name="txtNombProd">
                    <label for="form1" >Nombre Producto</label>
                </div>
                <label for="DescripcionProducto" >Descripcion</label>
                <textarea name="DescripcionProducto" class="form-control" required="required"></textarea><br />

                <div class="md-form">
                    <input type="text" name="CodigoDeBarras" id="CodigoDeBarras" class="form-control" required="required"/><br />        

                    <label for="CodigoDeBarras" >Codigo de barras</label>
                </div>
            </div>    
            <div class="col-6">

                <label for="minimoStock" >minimoStock</label>
                <input type="number" name="minimoStock" class="form-control" required="required"/><br />

                <label for="MaximoStock" >MaximoStock</label>
                <input type="number" name="MaximoStock" class="form-control" required="required"/><br />

                <label for="Existencias" >Existencias</label>
                <input type="text" name="Existencias" class="form-control" required="required"/><br />

                <label for="subcategoria" >Subcategoria</label>
                <select name="subcategoria" class="form-control" required="required">
                    <?php foreach ($subcategorias as $itemSubcategoria): ?>
                        <option value="<?php echo $itemSubcategoria['idSubcategoria'] ?>"><?php echo $itemSubcategoria['NombreSubcategoria'] ?></option>
                    <?php endforeach; ?>    
                </select>
            </div>    

        </div>

        <div class="flex-center">
            <button type="submit" class="btn btn-orange waves-effect orange" name="btnNuevoProducto"><i class='fa fa-send'> Crear Producto</i></button>

        </div>


        <?php echo form_close(); ?>

    </section>

</div>