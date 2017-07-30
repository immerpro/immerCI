
<?php echo br(4) ?>
<center>
    

<font size="20" color="green">Categoria</font>
<br>
<br>
<br>

<?php echo br(2) ?>

<div class="alert-success"><?php echo isset($Mensaje); ?></div>
<?php echo br(2) ?>
<?php echo form_open('categoria/InCategoria'); ?>
<table>
    <tr>
        <td width="400" height="">
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="NombreCategoria">
            <label for="form1" class="">Categoria</label>
            </div>
        </td>
        <td>
            <div class="btn-group">
            <input type="submit" name="submit" value="Crear Categoria" class="btn btn-deep-orange waves-effect bg-primary" />

     
    </div>
    </div>
    </td>
    </tr>
    
</table>
<br>
<br>
<br>
<br>
<br>
</center>

           
<table class="table">
    <thead>
        <tr>
            
            <th>Categorias</th>
            <th>Fecha Categoria</th>
            <th>Actions Subcategoria</th>
            <th>Actions Categoria</th>
        </tr>
    </thead>
    
</table>










 
<br>
<br>
<br>
<br>
<br>

    <?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>

