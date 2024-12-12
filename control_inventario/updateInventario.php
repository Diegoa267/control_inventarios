<?php 
include('../db.php');

$id = $_GET['id'];
$query = "SELECT * FROM inventario WHERE id_producto=$id";
$result = $conn -> query($query);
$inventario = $result->fetch_assoc();


if(isset($_POST['submit'])){
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];
    $estado = $_POST['estado'];

    $query ="UPDATE inventario SET producto='$producto', descripcion='$descripcion', cantidad='$cantidad', precio_unitario='$precio_unitario', categoria='$categoria', proveedor='$proveedor', estado='$estado'
    where id_producto=$id";

    if($conn->query($query)==TRUE){
        header('Location: ../editar_producto.php');
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
        <h1>Editar productos</h1>

        <!-- agregar un formulario -->
         <form action="updateInventario.php?id=<?php echo $id; ?>" method="POST">
            
            <div class="mb-3">
                <label for="name">Producto</label>
                <input type="text" name="producto" class="form-control" value="<?php echo $inventario['producto']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="name">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $inventario['descripcion']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="name">Cantidad</label>
                <input type="numbre" name="cantidad" class="form-control" value="<?php echo $inventario['cantidad']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="name">Precio Unitario</label>
                <input type="number" step="0.01" name="precio_unitario" class="form-control" value="<?php echo $inventario['precio_unitario']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="name">Categoría</label>
                <input type="text" name="categoria" class="form-control" value="<?php echo $inventario['id_categoria']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="name">Proveedor</label>
               <input type="text" name="proveedor" class="form-control" value="<?php echo $inventario['id_proveedor']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="name">Estado</label>
                <input type="text" name="estado" class="form-control" value="<?php echo $inventario['estado']; ?>" require>
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Actualizar</button>

         </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>