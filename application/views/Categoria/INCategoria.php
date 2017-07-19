<div class="alert-success"><?php echo isset($Mensaje); ?></div>
<?php echo form_open('categoria/InCategoria'); ?>
<table>    
    
    <tr>
        <td width="400" height="">
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="NombreCategoria">
                <label for="form1" class=""></label>
            </div>
        </td>
        <td>
            <div class="btn-group">
                <!--<button class="btn btn-gplus btn btn-warning" type="submit" ><b>Crear</b></button>-->
        <input type="submit" name="submit" value="Crear Categoria" class="btn btn-deep-orange" />


            </div>
        </td>
    </tr>

</table>
    <?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>

