 <div class="container" >
        <?php echo date("d")."-".date("m")."-".date("Y"); ?>
        <section class="section">
        <p class="display-4 orange-text flex-center">Listado de Productos</p>
<table class="table table-striped">
    <tr>
        <th>Nombre Producto</th>
        <th>Descripcion Producto</th>
        <th>Minimo Stock</th>
        <th>Existencias</th>
    </tr>
    <tr>
        <?php foreach ($productos as $productos_item): ?>
            <td><?php echo $productos_item['NombreProducto']; ?></td>
            <td><?php
                echo $productos_item['DescripcionProducto'];
                echo br(3);
                ?></td>
            <td> <?php
                echo $productos_item['minimoStock'];
                echo br(3);
                ?></td>
            <td><?php echo $productos_item['Existencias'];
            echo br(3);
            ?></td>

        </tr>

<?php endforeach; ?>   

</table>

