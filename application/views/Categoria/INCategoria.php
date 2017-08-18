<div style="height: 5vh"></div>
<p class="display-4 orange-text text-center">Categorìa</p>
<div class="flex-center">
    <div style="height: 5vh"></div>
    <?php if ($this->session->flashdata('correcto')): ?>
        <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  


<?php endif; ?>
<?php if ($this->session->flashdata('incorrecto')): ?>
    <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
<?php endif; ?>

<?php echo form_open('categoria/InCategoria'); ?>
<table>
    <tr>
        <td width="400" height="">
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="NombreCategoria" required="">
                <label for="form1" class="">Categoria</label>
            </div>
            <div class="md-textarea">
                <label for="detallecat" ><b> Detalle de Categoria</b></label>

                <textarea id="detallecat" class="form-control" name="txtdetalle" required=""></textarea>
                <div class="btn-group">

                    <button type="submit" class="btn btn-orange waves-effect orange" name="btnNuevaCategoria" data-toggle="modal" data-target="#envio" ><i class='fa fa-send'> Crear Producto</i></button>
                </div>
            </div>
        </td>
        <td>


        </td>
    </tr>

</table>
<div style="height: 5vh"></div>
</div>
<?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>
