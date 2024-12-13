<?php
include('../db.php');
/* ../ indica que el archivo db.php está fuera de la carpeta, o sea desde la raíz */

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre_prov'];
    $telefono = $_POST['telefono_prov'];
    $direccion = $_POST['direccion_prov'];
        
//mandar a llamar la tabla dentro de la base de datos en sql

    $query = "INSERT INTO proveedores(nombre_prov, telefono_prov, direccion_prov) VALUES
    ('$nombre', '$telefono', '$direccion')";
    if($conn->query($query)==TRUE){
        header('Location: ../mostrar_proveedores.php');
    } else {
        echo "Error.";
    }
}
?>