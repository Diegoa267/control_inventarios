<?php

 $query = "SELECT * FROM usuarios";
 $result = $conn->query($query);

 while($row = $result->fetch_assoc()) {
 ?>
  <tr>
   <td><?php echo $row['id']; ?></td>
   <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['teléfono']; ?></td>
<!--buttons-->
   <td>
    <a href="controlUsuarios/updateUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" data-bs-target="#updatemodal" data-bs-whatever="@mdo">Editar</a>

    <a href="controlUsuarios/deleteUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>

   </td>
  </tr>
 <?php } ?>