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
                    <h1 class="h3 mb-4 text-gray-800">Consultar Movimientos</h1>

                </div>
                <!-- /.container-fluid -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Movimientos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Movimiento #</th>                                                                                        <th>Tipo Movimiento</th>
                                            <th>Tipo Movimiento</th>
                                            <th>Cantidad</th>
                                            <th>Fecha</th>
                                            <th>Observación</th>                                            
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                    <tr>
                                        <th>Movimiento #</th>                                                                                        <th>Tipo Movimiento</th>
                                        <th>Tipo Movimiento</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>Observación</th>                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php include("ControlMovimientos/selecttableMovimiento.php") ?>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            <!-- End of Main Content -->

<?php include("includes/footer.php") ?>