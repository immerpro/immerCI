<?php echo br(4) ?>
<center>
    

<font size="20" color="green">Categoria</font>
<br>
<br>
<br>
<?php
if ($this->session->flashdata('correcto')): ?>
<div class="alert alert-success" role="alert" /> <?=$this->session->flashdata('correcto') ?> </div>  


<?php endif;?>
<?php if ($this->session->flashdata('incorrecto')): ?>
<div class="alert alert-success" role="alert" /> <?=$this->session->flashdata('incorrecto') ?> </div>  


<?php endif;?>

<?php echo br(2) ?>

<div class="alert-success"></div>
<?php echo br(2) ?>
<?php echo form_open('categoria/CategoriaActualizada/'.$id); ?>
<table>
    <tr>
        <td width="400" height="">
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="NombreCategoria" required="" value="<?=$Nombre?>"/>
            <label for="form1" class="">Categoria</label>
            </div>
            <div class="md-textarea">
                <label for="detallecat" ><b> Detalle de Categoria</b></label>

                <textarea id="detallecat" class="form-control" name="txtdetalle" required="" ><?=$Detalles?></textarea>
                    <div class="btn-group">
                        <input type="submit" name="submit"   class="btn btn-deep-orange waves-effect bg-primary" required=""  />

     
    </div>
            </div>
        </td>
        <td>
       
    
    </td>
    </tr>
    
</table>
<br>
<br>
<br>
<br>
<br>
</center>

           

<br>
<br>
<br>
<br>
<br>

    <?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>
