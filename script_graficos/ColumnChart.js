
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGrafico3);

function dibujarGrafico3() {
      //solicitud AJAX  para obtener los datos de data.php 
  fetch('script_graficos/data_ColumnChart.php')
  .then(response=> response.json())
  .then(data => {
                  //crear la tabla dataTable
       var dataTable = google.visualization.arrayToDataTable(data);

                  //Opciones del grafico 
       var options = {
       title: 'Cantidad de productos vendidos',
       width: 600,
       height: 400,
       pieHole: 0.4,
      

                  };
                  
                  //dibujar el grafico
var chart = new google.visualization.PieChart(document.getElementById('grafico3'));
     chart.draw(dataTable, options);
      
  });   
}