<div style="height: 5vh"></div>
<div class="flex-center">
    <p class=" h1 orange-text">Iniciar sesión</p>
  </div>
<div style="height: 5vh"></div>
<?php echo form_open('usuario/ingresoUsuario'); ?>
<center>
     <div class="row">
            <div class="col-6 ">
                <div class="alert-danger"><?php echo validation_errors(); ?></div> 
            </div>

        </div>
    
<table cellpadding="20" cellspacing="20">
    <tr>
    <td><i class="fa fa-user fa-3x" aria-hidden="true" ></i></td>
        <td width="400" height="">

            <div class="md-form">
                <input type="hidden" name="token" value="<?=$token?>">
                <input type="text" id="form1" class="form-control" name="txtusuario" required="">

            <label for="txtusuario"  class="">Usuario</label>
            </div>
        </td>
    </tr>
    <tr>
        <td><i class="fa fa-lock fa-3x" aria-hidden="true"></i></td>
        <td width="400" height="">
            
            <div class="md-form">
                <input type="password" id="pass" class="form-control" name="txtpassword" required="">
            <label for="pass" >Contraseña</label>
            </div>
        </td>
        <td><button type="submit" class="btn btn-orange waves-effect orange" name="btnLogin" ><i class='fa fa-send'> Ingresar</i></button></td>

    </tr>
   <?php if($this->session->flashdata('usuario_mal')):?>
    <div class="alert alert-success"><?=$this->session->flashdata('usuario_mal')?></div> 
   <?php endif;?>
    
</table>
    <table cellpadding="10">
        <tr>
            <td><a href="Olvido su contraseña"><font style="text-decoration: underline;">Olvido su contraseña</font></a></td>
        </tr>
    </table>


</center>

<?php echo form_close(); ?>
