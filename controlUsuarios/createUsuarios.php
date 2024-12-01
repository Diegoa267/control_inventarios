<?php
include('../db.php');
/* ../ indica que el archivo db.php está fuera de la carpeta, o sea desde la raíz */

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

//mandar a llamar la tabla dentro de la base de datos en sql

    $query = "INSERT INTO usuarios(email, contraseña, teléfono) VALUES
    ('$email', '$password', '$phone')";
    if($conn->query($query)==TRUE){
        header('Location: ../controlusuarios.php');
    } else {
        echo "Error.";
    }
}
?>