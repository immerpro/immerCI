<div class="container" >
        <?php echo date("d")."-".date("m")."-".date("Y"); ?>
        <section class="section">
        <p class="display-4 orange-text flex-center">Listado de Categorias</p>
<table class="table table-striped">
    <tr>
        <th>Nombre Categoria</th>
        <th>Fecha Categoria</th>
        
    </tr>
    <tr>
        <?php foreach ($categorias as $categoria_item): ?>
            <td><?php echo $categoria_item['NombreCategoria']; ?></td>
            <td><?php
                echo $categoria_item['FechaCategoria'];
                echo br(3);
                ?></td>
           
            

        </tr>

<?php endforeach; ?>   

</table>


