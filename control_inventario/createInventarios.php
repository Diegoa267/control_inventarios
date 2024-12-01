<?php
include('../db.php');
/* ../ indica que el archivo db.php está fuera de la carpeta, o sea desde la raíz */

if(isset($_POST['submit'])){
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];
    $estado = $_POST['estado'];
    
//mandar a llamar la tabla dentro de la base de datos en sql

    $query = "INSERT INTO inventario(producto, descripcion, cantidad, precio_unitario, id_categoria, id_proveedor, estado) VALUES
    ('$producto', '$descripcion', '$cantidad', '$precio_unitario', '$categoria', '$proveedor', '$estado')";
    if($conn->query($query)==TRUE){
        header('Location: ../nuevo_producto.php');
    } else {
        echo "Error.";
    }
}
?>