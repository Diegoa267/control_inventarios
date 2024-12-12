<?php
include('../db.php');
/* ../ indica que el archivo db.php está fuera de la carpeta, o sea desde la raíz */

if(isset($_POST['submit'])){
    $producto = $_POST['producto'];
    $tipo_movimiento = $_POST['tipo_movimiento'];
    $cantidad = $_POST['cantidad'];
    $observacion = $_POST['observacion'];
   
        
//mandar a llamar la tabla dentro de la base de datos en sql
$query = "INSERT INTO movimientos(id_producto, tipo_movimiento, cantidad, observacion) VALUES
('$producto', '$tipo_movimiento', '$cantidad', '$observacion')";
if($conn->query($query)==TRUE){
    header('Location: ../nuevoMovimiento.php');
} else {
    echo "Error.";
}

}
?>