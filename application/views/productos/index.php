<div class="container" >

    <section class="section">
        <p class="display-4 orange-text flex-center">Listado de Productos</p>
        <table class="table table-striped">
            <tr>
                <th>Nombre Producto</th>
                <th>Descripcion Producto</th>
                <th>Minimo Stock</th>
                <th>Maximo Stock</th>
                <th>Existencias</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <?php foreach ($productos as $productos_item): ?>
                    <td><?php echo $productos_item['NombreProducto']; ?></td>
                    <td><?php
                        echo $productos_item['DescripcionProducto'];
                        ?></td>
                    <td> <?php
                        echo $productos_item['minimoStock'];
                        ?></td>
                    <td> <?php
                        echo $productos_item['MaximoStock'];
                        ?></td>
                    <td><?php
                        echo $productos_item['Existencias'];
                        ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>producto/editar/<?php echo $productos_item['idProducto'] ?>"><button class="btn btn-tw btn btn-info"><strong>Modificar</strong></button></a>  
                        <?php echo nbs() ?>
                        <a class="btn btn-danger inactivar_producto" href="<?php echo base_url() ?>producto/inactivar/<?php echo $productos_item['idProducto'] ?>"> Inactivar </a> 

                    </td>

                </tr>


            <?php endforeach; ?>   

        </table>


</div>
