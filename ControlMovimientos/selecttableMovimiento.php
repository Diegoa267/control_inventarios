<?php

$query = "SELECT 
mov.id_movimiento,
mov.id_producto,
mov.tipo_movimiento,
mov.cantidad,
mov.fechamovimiento,
mov.observacion
FROM 
movimientos AS mov;";
 $result = $conn->query($query);

 while($row = $result->fetch_assoc()) {
 ?>

  <tr>
   <td><?php echo $row['id_movimiento']; ?></td>
   <td><?php echo $row['id_producto']; ?></td>
   <td><?php echo $row['tipo_movimiento']; ?></td>
   <td><?php echo $row['cantidad']; ?></td>
   <td><?php echo $row['fechamovimiento']; ?></td>
   <td><?php echo $row['observacion']; ?></td>
   
   <!--buttons-->
   <!--
<td>    
   <a href="controlUsuarios/updateUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" data-bs-target="#updatemodal" data-bs-whatever="@mdo">Editar</a>
    <a href="controlUsuarios/deleteUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
</td>
   -->
  </tr>
 <?php } ?>