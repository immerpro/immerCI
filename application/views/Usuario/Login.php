<font size="20" color="green">Iniciar sesión</font>
<br>
<br>
<br>
 <div class="row">
            <div class="col-6 ">
                <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
            </div>

        </div>
<?php echo form_open('usuario/ingresoUsuario'); ?>
<center>
<table cellpadding="20" cellspacing="20">
    <tr>
    <td><i class="fa fa-user fa-3x" aria-hidden="true" ></i></td>
        <td width="400" height="">

            <div class="md-form">
                <input type="hidden" name="token" value="<?=$token?>">
                <input type="text" id="form1" class="form-control" name="txtusuario">

            <label for="txtusuario"  class="">Usuario</label>
            </div>
        </td>
    </tr>
    <tr>
        <td><i class="fa fa-lock fa-3x" aria-hidden="true"></i></td>
        <td width="400" height="">
            
            <div class="md-form">
                <input type="password" id="form1" class="form-control" name="txtpassword">
            <label for="txtpassword" class="">Contraseña</label>
            </div>
        </td>
        <td><button type="submit" class="btn btn-success">Ingresar</button></td>

    </tr>
   <?php if($this->session->flashdata('usuario_mal')):?>
    <div class="alert alert-info"><?=$this->session->flashdata('usuario_mal')?></div> 
   <?php endif;?>
    
</table>

<a href="Olvido su contraseña"><font style="text-decoration: underline;">Olvido su contraseña</font></a>


</center>

<?php echo form_close(); ?>
