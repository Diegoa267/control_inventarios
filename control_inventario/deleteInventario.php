<?php
include('../db.php');

$id = $_GET['id'];

/* Consulta a Base de Datos */

$query = "DELETE FROM inventario WHERE id_producto=$id";
if($conn->query($query)==TRUE){
    header('Location: ../eliminar_producto.php');
} else{
    echo "Error de Consulta";
}
?>