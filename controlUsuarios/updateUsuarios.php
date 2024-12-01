<?php 
include('../db.php');

$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn -> query($query);
$usuario = $result->fetch_assoc();


if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password = $_POST['contraseña'];
    $phone = $_POST['teléfono'];

    $query ="UPDATE usuarios SET email='$email', contraseña='$password', 
    teléfono='$phone' where id=$id";

    if($conn->query($query)==TRUE){
        header('Location: ../controlusuarios.php');
    }else{
        echo "Error de consulta";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   

</head>
<body>
    <div class="container mt-5">
        <h1>Editar usuarios</h1>

        <!-- agregar un formulario -->
         <form action="updateUsuarios.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="name">Correo</label>
                <input type="text" name="email" class="form-control" value="<?php echo $usuarios['email']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control" value="<?php echo $usuarios['contraseña']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="phone">Teléfono</label>
                <input type="number" name="teléfono" class="form-control" value="<?php echo $usuarios['teléfono']; ?>"require>
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Actualizar cambios</button>


         </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>