<div class="container" >

    <section class="section">
        <p class="display-4 orange-text flex-center">Listado de Productos</p>
        <div class="flex-center">
            <div class="row">
                <div class="col col-8">
                    <div class="md-form">
                        <input type="search" name="txtbuscar" id="buscar" required="required" class="form-control">
                        <label for="buscar" class="badge badge-warning"><i class="fa fa-search"></i> busqueda</label>
                    </div>  
                </div>
                <div class="col col-8">
                    <select name="ddlfiltro" class="form-control">
                        <option value="NombreProducto">Producto</option>   
                        <option value="NombreSubCategoria">Subcategoria</option>   

                    </select> 
                    <button class="btn btn-orange" type="submit"><i class="fa fa-search"></i>  Buscar</button>
                </div>

            </div>


        </div>
        <?php echo $div1 . $table; ?>

    </section>

</div>
