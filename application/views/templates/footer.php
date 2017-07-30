<footer class="page-footer blue center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
            <?php
                $propiedad_img = array(
                    'src' => 'public/img/immerproLogo.png',
                    'alt' => 'immerpro',
                    'class' => 'animated fadeIn mb-2 img-fluid ',
                    'title' => 'logo',
                    'width'=>'500px',
                   
                );

                echo img($propiedad_img);
                ?>
               
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">SIGUENOS EN:</h5>
                <ul>
                    <button type="button" class="btn btn-fb btn btn-primary"><i class="fa fa-facebook left"></i> Facebook</button>
                    <button type="button" class="btn btn-tw btn btn-info"><i class="fa fa-twitter left"></i> Twitter</button>
                    <button type="button" class="btn btn-gplus btn btn-warning"><i class="fa fa-google-plus left"></i> Google +</button>
                    <button type="button" class="btn btn-yt btn btn-danger"><i class="fa fa-youtube left"></i> Youtube</button>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © ImmerPro

        </div>
    </div>
    <!--/.Copyright-->

</footer>

<!--/.Footer-->

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?PHP  echo base_url()?>public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?PHP  echo base_url()?>public/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?PHP  echo base_url()?>public/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?PHP  echo base_url()?>public/js/mdb.min.js"></script>

<script type="text/javascript">
   $(".inactivar_producto").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea inactivar este producto. El producto debe tener existencias menores o iguales a 12 Si no es asi el producto no se inactivara")) {
            location.href = href;
         }
      });
   });
</script>
</body>

</html>
