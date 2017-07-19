<div class="container" >

    <section class="section">
        <div class="alert-success"><?php echo isset($correcto); ?></div>
        <p class="display-4 orange-text flex-center">Nuevo Producto</p>

        <?php echo form_open('producto/insert'); ?>

        <div class="row">

            <div class="col-6"> 
               
                <label for="DescripcionProducto" class="form-control-label">Descripcion</label>
                <textarea name="DescripcionProducto" class="form-control"></textarea><br />

                <label for="NombreProducto" class="form-control-label">Nombre del producto</label>
                <input type="input" name="NombreProducto" class="form-control"/><br />

                <label for="CodigoDeBarras" class="form-control-label">Codigo de barras</label>
                <input type="input" name="CodigoDeBarras" class="form-control"/><br />
            </div>    
            <div class="col-6">

                <label for="minimoStock" class="form-control-label">minimoStock</label>
                <input type="number" name="minimoStock" class="form-control"/><br />

                <label for="MaximoStock" class="form-control-label">MaximoStock</label>
                <input type="number" name="MaximoStock" class="form-control"/><br />

                <label for="Existencias" class="form-control-label">Existencias</label>
                <input type="input" name="Existencias" class="form-control"/><br />
            </div>    

        </div>
        <div class="row">
            <div class="col-9 ">
                <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
            </div>
                
        </div>
            




        <input type="submit" name="submit" value="Crear Productos" class="btn btn-deep-orange" />

        <?php echo form_close(); ?>