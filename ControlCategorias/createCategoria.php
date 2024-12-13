<?php
include('../db.php');
/* ../ indica que el archivo db.php está fuera de la carpeta, o sea desde la raíz */

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre_cat'];
    $descripcion = $_POST['descripcion_cat'];
        
//mandar a llamar la tabla dentro de la base de datos en sql

    $query = "INSERT INTO categorias(nombre_cat, descripcion_cat) VALUES
    ('$nombre', '$descripcion')";
    if($conn->query($query)==TRUE){
        header('Location: ../mostrar_categorias.php');
    } else {
        echo "Error.";
    }
}
?>