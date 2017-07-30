




<div class="alert-success"><?php echo isset($Mensaje); ?></div>
<?php echo form_open('Subcategoria/SubInCategoria'); ?> <br> <br> <br>
<center>
    <table>    

        <tr>
            <td width="400" height="">
                <div class="md-form">
                    <input type="text" id="form2" class="form-control" name="NombreSubCategoria">
                    <label for="form2" class="">Subcategoria</label>
                </div>
            </td>
            <td>
                <div class="btn-group">
                    <!--<button class="btn btn-gplus btn btn-warning" type="submit" ><b>Crear</b></button>-->
                    <input type="submit" name="submit" value="Agregar" class="btn btn-success waves-effect waves-light" />


                </div>
            </td>
            <td>
                <div class="flex-center">
                    <!--<button class="btn btn-gplus btn btn-warning" type="submit" ><b>Crear</b></button>-->
                    <input type="submit" name="submit" value="Crear SubCategoria" class="btn btn-deep-orange bg-primary" />


                </div>
            </td>
        </tr>

    </table>
    <select name="categoria" class="form-control">
         <?php foreach ($categorias as $categoria_item): ?>
        <option value="<?php echo $categoria_item['idCategoria']; ?>"><?php echo $categoria_item['NombreCategoria']; ?></option>
        <?php endforeach; ?>   
    </select>
</center>
<br> <br> <br>
<?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>

