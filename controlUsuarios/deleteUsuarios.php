<?php
include('../db.php');

$id = $_GET['id'];

/* Consulta a Base de Datos */

$query = "DELETE FROM usuarios WHERE id=$id";
if($conn->query($query)==TRUE){
    header('Location: ../controlUsuarios.php');
} else{
    echo "Error de Consulta";
}
?>