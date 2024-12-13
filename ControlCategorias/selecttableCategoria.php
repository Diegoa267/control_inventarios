<?php

$query = "SELECT 
cat.id_categoria,
cat.nombre_cat,
cat.descripcion_cat
FROM
categorias AS cat;";
 $result = $conn->query($query);

 while($row = $result->fetch_assoc()) {
 ?>

  <tr>
   <td><?php echo $row['id_categoria']; ?></td>
   <td><?php echo $row['nombre_cat']; ?></td>
   <td><?php echo $row['descripcion_cat']; ?></td>
   
   <!--buttons-->
   <!--
<td>    
   <a href="controlUsuarios/updateUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" data-bs-target="#updatemodal" data-bs-whatever="@mdo">Editar</a>
    <a href="controlUsuarios/deleteUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
</td>
   -->
  </tr>
 <?php } ?>