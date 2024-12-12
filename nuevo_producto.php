<?php include("includes/header.php") ?>
<?php include("db.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Aquí va sidebar -->
<?php include("includes/sidebar.php") ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Aquí va topbar -->
<?php include("includes/topbar.php") ?>

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Nuevo Producto</h1>

                </div>
                <!-- /.container-fluid -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <!-- modal -->

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Nuevo Producto</button>
                                
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo Producto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="control_inventario/createInventarios.php" method="POST">
                                            <div class = "mb-3">
                                                <label for="producto">Producto:</label>
                                                <input type="text" name="producto" class="form-control" require>
                                            </div>

                                            <div class = "mb-3">
                                                <label for="descripcion">Descripción:</label>
                                                <input type="text" name="descripcion" class="form-control" require>
                                            </div>

                                            <div class= "mb-3">
                                                <label for="cantidad">Cantidad:</label>
                                                <input type="number" name="cantidad" class="form-control" require>
                                            </div>
                                    
                                            <div class= "mb-3">
                                                <label for="precio_unitario">Precio:</label>
                                                <input type="number" step="0.01" name="precio_unitario" class="form-control" require>
                                            </div>
                                            <!-- SELECT DE CATEGORIAS -->
                                            <div class= "mb-3">
                                             <?php
                                              $query = "SELECT id_categoria, nombre_cat FROM categorias";
                                              $result = $conn->query($query);

                                              if($result->num_rows>0){
                                                echo '<label for="categoria">Categorías:</label>';
                                                echo '<select name="categoria" class="form-select" >';
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option value="'.$row['id_categoria'].'">'.$row['nombre_cat'].'</option>';
                                                }
                                                echo '</select>';
                                              } else{
                                                echo 'No hay categorías';
                                              }
                                             ?>
                                            </div>
                                            <!-- END SELECT CATEGORIAS

                                            SELECT DE PROVEEDORES -->  
                                                                                       
                                            <div class= "mb-3"><?php
                                              $query = "SELECT id_proveedor, nombre_prov FROM proveedores";
                                              $result = $conn->query($query);

                                              if($result->num_rows>0){
                                                echo '<label for="proveedor">Proveedor:</label>';
                                                echo '<select name="proveedor" class="form-select" >';
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option value="'.$row['id_proveedor'].'">'.$row['nombre_prov'].'</option>';
                                                }
                                                echo '</select>';
                                              } else{
                                                echo 'No hay proveedores';
                                              }
                                             ?>                                     
                                            </div>
                                            <!-- END SELECT PROVEEDORES -->
                                            <div class= "mb-3">
                                                <label for="estado">Estado</label>
                                                <input type="text" name="estado" class="form-control" require>
                                            </div>

                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                        </form>
                                    </div>
                                </div>
                                </div>

                                <!-- termina modal -->

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_producto</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Categoría</th>
                                            <th>Proveedor</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id_producto</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Categoría</th>
                                            <th>Proveedor</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Estado</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("control_inventario/selecttableInventario.php") ?>
                                </table>
                            </div>
                        </div>
                    </div>


            </div>
            <!-- End of Main Content -->

<?php include("includes/footer.php") ?>