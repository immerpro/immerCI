<div class="container" >

    <section class="section">
        <div class="row">


        </div>
        <?php if ($this->session->flashdata('correcto')): ?>
            <div class=" alert alert-success" ><?php echo $this->session->flashdata('correcto'); ?> </div> 
            <div class=" alert alert-danger" > </div> 

        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class=" alert alert-danger" ><?php echo $this->session->flashdata('incorrecto'); ?> </div> 
        <?php endif; ?>


        <p class="display-4 orange-text flex-center"> Producto a Modificar</p>

        <?php echo form_open('producto/ProductoActualizado/' . $id); ?>

        <div class="row">

            <div class="col-6"> 

                <label for="NombreProducto" class="form-control-label">Nombre del producto</label>
                <input type="input" name="NombreProducto" class="form-control" required="required" value="<?= $producto ?>"/><br />

                <label for="DescripcionProducto" class="form-control-label">Descripcion</label>
                <textarea name="DescripcionProducto" class="form-control" required="required" ><?= $descripcion ?></textarea><br />


                <label for="CodigoDeBarras" class="form-control-label">Codigo de barras</label>
                <input type="input" name="CodigoDeBarras" class="form-control "  required="required" value="<?= $codBarras ?>"/><br />
                <label for="categoria" >Categoria</label>
                <select name="categoria" class="form-control md-form"  id="categoria" required data-parsley-trigger="keyup" >
                    <option value="">selecciona una categoria</option>
                    <?php foreach ($categorias_select as $itemCategoria): ?>
                        <option value="<?= $itemCategoria['idCategoria'] ?>"><?= $itemCategoria['NombreCategoria'] ?></option>
                    <?php endforeach; ?>    
                </select>
            </div>    
            <div class="col-6">

                <label for="minimoStock" class="form-control-label">minimoStock</label>
                <input type="number" name="minimoStock" class="form-control" required="required" value="<?= $minStock ?>"/><br />

                <label for="MaximoStock" class="form-control-label">MaximoStock</label>
                <input type="number" name="MaximoStock" class="form-control" required="required" value="<?= $maxStock ?>"/><br />

                <label for="Existencias" class="form-control-label">Existencias</label>
                <input type="input" name="Existencias" class="form-control" required="required" value="<?= $exist ?>"/><br />

                
                <label for="subcategoria" class="form-control-label" >Subcategoria</label>
                <select name="subcategoria" id="subcatego" class="form-control" required data-parsley-trigger="keyup" >

                    <option value="<?=$idsub?>"><?=$nombreSub->NombreSubcategoria?></option>

                </select>
            </div>    

        </div>

        <div class="flex-center">
            <button type="submit" class="btn btn-orange waves-effect orange" name="btnEditaProducto"><i class='fa fa-edit'> Actualizar Producto</i></button>

        </div>


        <?php echo form_close(); ?>

    </section>

</div>
