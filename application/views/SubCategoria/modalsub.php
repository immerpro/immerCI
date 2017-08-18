 <!--llamo al modal--> 
        <div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                 <?php echo form_open('subcategoria/InactivarSub/'.$Subcategoria_item['idSubcategoria']); ?>
                <input type="hidden">
                <h4 class="modal-title w-100" id="myModalLabel">Esta seguro de eliminar la subcategoria? <?php echo $Subcategoria_item['NombreSubcategoria']; ?> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                ...
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
             <?php echo form_close(); ?>
        </div>
        <!--/.Content-->
    </div>
</div>
        <!--fin modal--> 
