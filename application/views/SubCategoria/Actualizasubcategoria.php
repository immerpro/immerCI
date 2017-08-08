<div style="height: 5vh"></div>
<?php echo form_open('Subcategoria/actualizarsub'); ?>  
<input type="hidden" name="codigoCategoria" value="<?= $codcategoria ?>">
<input type="hidden" name="idsubcategoria" value="<?= $idSub ?>">
<h1 class="h1 green-text text-center">subcategoria de <?= $nombrecategoria ?></h1>
<div class="flex-center">
    <table>
        <tr>
            <td>

                <div class="md-form">
                    <input type="text" id="form1" class="form-control" name="NombreSubcategoria" value="<?php echo $NombreSub; ?>">
                    <label for="form1" class="">Subcategoria</label>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <br>
                <br>
                <textarea rows="10" cols="90" placeholder="Detalle Subcategoria" name="detalSubCategoria"><?php echo $DetallesSub; ?></textarea> 
                <br>
                <br>
            </td>
        </tr>

        <tr><td><button type="submit" class="btn btn-success">Actualizar</button></td></tr>
    </table>
</div>
<?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>
