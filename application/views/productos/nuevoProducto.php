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
        <?php  if ($this->session->flashdata('incorrecto')): ?>
            <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
        <?php endif; ?>


        <p class="display-4 orange-text flex-center">Nuevo Producto</p>

        <?php echo form_open('producto/nuevoProducto'); ?>

        <div class="row">

            <div class="col-6"> 

                <label for="NombreProducto" class="form-control-label">Nombre del producto</label>
                <input type="input" name="NombreProducto" class="form-control" required="required"/><br />

                <label for="DescripcionProducto" class="form-control-label">Descripcion</label>
                <textarea name="DescripcionProducto" class="form-control" required="required"></textarea><br />


                <label for="CodigoDeBarras" class="form-control-label">Codigo de barras</label>
                <input type="input" name="CodigoDeBarras" class="form-control" required="required"/><br />
            </div>    
            <div class="col-6">

                <label for="minimoStock" class="form-control-label">minimoStock</label>
                <input type="number" name="minimoStock" class="form-control" required="required"/><br />

                <label for="MaximoStock" class="form-control-label">MaximoStock</label>
                <input type="number" name="MaximoStock" class="form-control" required="required"/><br />

                <label for="Existencias" class="form-control-label">Existencias</label>
                <input type="input" name="Existencias" class="form-control" required="required"/><br />

                <label for="subcategoria" class="form-control-label">Subcategoria</label>
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