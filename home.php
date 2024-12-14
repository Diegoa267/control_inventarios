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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Panel Principal</h1>
                    </div>

<!-- Content Row -->
                    <div class="row">

<!-- Earnings (Monthly) Card Example -->

<!-- TARJETA PRECIO TOTAL -->
<?php
$query = "SELECT SUM(cantidad*precio_unitario) AS Total FROM inventario";
$result = $conn->query($query);

if($fila= $result->fetch_assoc()) {
   echo '
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Suma Total de Inventario</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'
                                            .'Q'.number_format($fila['Total'], 2). 
                                            '</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-sack-dollar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    ';
}

?>
                        
<!-- END -->

<!-- Earnings (Monthly) Card Example -->

<!-- TARJETA PRODUCTOS DISPONIBLES -->
<?php
$query = "SELECT SUM(cantidad) AS total_productos FROM inventario";
$result = $conn->query($query);

if($fila= $result->fetch_assoc()) {
   echo '
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Productos Disponibles</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'
                                            .number_format($fila['total_productos']).
                                            '</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
      ';
}
?>
<!-- END -->

<!-- Earnings (Monthly) Card Example -->

<!-- TARJETA TOTAL DE CATEGORÍAS --> 
<?php
$query = "SELECT COUNT(id_categoria) AS total_categorias FROM categorias";
$result = $conn->query($query);

if($fila= $result->fetch_assoc()) {
   echo '
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Categorias</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'
                                            .number_format($fila['total_categorias']).
                                            '</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
      ';
}
?>
<!-- END -->

<!-- Earnings (Monthly) Card Example -->

<!-- TARJETA TOTAL DE PROVEEDORES --> 
<?php
$query = "SELECT COUNT(id_proveedor) AS total_proveedores FROM proveedores";
$result = $conn->query($query);

if($fila= $result->fetch_assoc()) {
   echo '
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Proveedores</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'
                                            .number_format($fila['total_proveedores']).
                                            '</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
      ';
}
?>
<!-- END -->

<!-- Earnings (Monthly) Card Example -->

<!-- TARJETA POR CATEGORIA --> 
<?php
$query = "SELECT c.nombre_cat, SUM(i.cantidad*i.precio_unitario) AS totalxcat
FROM inventario AS i
JOIN categorias AS c ON i.id_categoria = c.id_categoria
WHERE c.nombre_cat = 'Embutidos'
GROUP BY c.nombre_cat;";
$result = $conn->query($query);

if($fila= $result->fetch_assoc()) {
   echo '
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Costo Embutidos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'
                                            .'Q' .number_format($fila['totalxcat'],2).
                                            '</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
      ';
}
?>
<!-- END -->

<!-- Earnings (Monthly) Card Example -->

<!-- TARJETA POR CATEGORIA --> 
<?php
$query = "SELECT c.nombre_cat, SUM(i.cantidad*i.precio_unitario) AS totalxplo
FROM inventario AS i
JOIN categorias AS c ON i.id_categoria = c.id_categoria
WHERE c.nombre_cat = 'Plomería'
GROUP BY c.nombre_cat;";
$result = $conn->query($query);

if($fila= $result->fetch_assoc()) {
   echo '
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Costo Plomería</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'
                                            .'Q' .number_format($fila['totalxplo'],2).
                                            '</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
      ';
}
?>
<!-- END -->

<!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->

<!-- INICIA GRÁFICO -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="script_graficos/ColumnChart.js"></script>

<!-- Grafico Pie -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="script_graficos/ColumnChart.js"></script>

<script type="text/javascript">
    
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(dibujarGrafico);

      function dibujarGrafico() {
            //solicitud AJAX  para obtener los datos de data.php 
        fetch('dataGraficoCol2.php')
        .then(response=> response.json())
        .then(data => {
                        //crear la tabla dataTable
             var dataTable = google.visualization.arrayToDataTable(data);

                        //Opciones del grafico 
                     //Opciones del grafico 
                     var options = {
                    title: 'Total de productos por categoría',
                    hAxis: {title: 'Producto'},
                    vAxis: {title: 'Cantidad'},
                    legend: {position: 'none'},
                    bars: 'vertical',
                    colors: ['#4285F4'],
                    width: 600,
                    height: 400            
                        };
                        
                        //dibujar el grafico
            var chart = new google.visualization.ColumnChart(document.getElementById('graficoCol2'));
           chart.draw(dataTable, options);
            
        });   
      }
    </script>

<!-- TERMINA GRÁFICO -->

     <!-- GRAFICO 3 -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Pie</h6>
                                    <div class="dropdown no-arrow"></div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">                                    
                                    <div id="grafico3"></div>                                    
                                </div>
                            </div>
                        </div>

<!-- INICIA GRAFICO -->
<!-- GRAFICO -->


                    <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Barras</h6>
                                    <div class="dropdown no-arrow">
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <div id="graficoCol2"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

            </div>
            <!-- End of Main Content -->

<?php include("includes/footer.php") ?>