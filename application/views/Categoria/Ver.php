
<div class="container" >
    <div class="flex-first ">
        <span class="badge badge-primary">
       <?php echo date("d")."-".date("m")."-".date("Y"); ?> 
            </span>
    </div>
        
        <section class="section">
        <p class="display-4 orange-text flex-center">Listado de SubCategorias</p>
<table class="table table-striped">
    <tr>
        <th>Nombre SubCategoria</th>
        <th>Detalle Subcategoria</th>
        <th>Nombre Categoria</th>
        
    </tr>
    <tr>
        <?php foreach ($categorias as $Subcategoria_item): ?>
            <td><?php echo $Subcategoria_item['NombreSubcategoria']; ?></td>
            <td><?php
                echo $Subcategoria_item['detallesSub'];
                echo br(3);
                ?></td>
           <td><?php
                echo $Subcategoria_item['NombreCategoria'];
                echo br(3);
                ?></td>
            

        </tr>

<?php endforeach; ?>   

</table>



