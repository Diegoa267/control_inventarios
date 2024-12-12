<?php
include ('../db.php');

//consulta a db
$sql = "SELECT c.nombre_cat, SUM(i.cantidad*i.precio_unitario)
AS total_productos FROM inventario AS i JOIN categorias AS c ON i.id_categoria = c.id_categoria
GROUP BY c.nombre_cat ORDER BY 'total_productos' ASC";
$result = $conn->query($sql);

$data = [];

if($result->num_rows>0){
    $data[]= ['Categoria', 'Total Q'];
    while($row = $result->fetch_assoc()) {
        $data[]=[$row['nombre_cat'], (float)$row['total_productos']];
    }
}

echo json_encode($data);

?>