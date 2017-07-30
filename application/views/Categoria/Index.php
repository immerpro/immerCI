<div class="container" >
       
        <section class="section">
        <p class="display-4 orange-text flex-center">Listado de Categorias</p>
<table class="table table-striped">
    <tr>
        <th>Nombre Categoria</th>
        <th>Fecha Categoria</th>
         <th>Actions Subcategoria</th>
            <th>Actions Categoria</th>
    </tr>
    <tr>
        <?php foreach ($categorias as $categoria_item): ?>
            <td><?php echo $categoria_item['NombreCategoria']; ?></td>
            <td><?php
                echo $categoria_item['FechaCategoria'];
                echo br(3);
                ?>
            
            </td>
              <td>
                Mira <a class="orange-text"><i class="fa fa-eye"></i></a>
             Agrega <a class="blue-text"><i class="fa fa-plus"></i></a>
            </td>
            <td>
                   
               Modifica <a class="teal-text"><i class="fa fa-pencil"></i></a>
               Elimina <a class="red-text"><i class="fa fa-times"></i></a>
            </td>
           
            

        </tr>

<?php endforeach; ?>   

</table>


