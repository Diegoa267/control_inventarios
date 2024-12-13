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
                    <h1 class="h3 mb-4 text-gray-800">Categorías</h1>

                </div>
                <!-- /.container-fluid -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <!-- modal -->

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar Categoría</button>
                                
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Categoría</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="ControlCategorias/createCategoria.php" method="POST">
                                            <div class = "mb-3">
                                                <label for="nombre_cat">Nombre:</label>
                                                <input type="text" name="nombre_cat" class="form-control" require>
                                            </div>

                                            <div class = "mb-3">
                                                <label for="descripcion_cat">Descripción:</label>
                                                <input type="text" name="descripcion_cat" class="form-control" require>
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
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("ControlCategorias/selecttableCategoria.php") ?>
                                </table>
                            </div>
                        </div>
                    </div>


            </div>
            <!-- End of Main Content -->

<?php include("includes/footer.php") ?>