<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    

    // Consulta para verificar usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: home.php
        ");
        exit();

    } else {
        header("Location: index.php?error=1");
        exit();
    }
}
?>