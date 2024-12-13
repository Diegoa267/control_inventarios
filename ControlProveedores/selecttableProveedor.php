<?php

$query = "SELECT 
prov.id_proveedor,
prov.nombre_prov,
prov.telefono_prov,
prov.direccion_prov
FROM
proveedores AS prov;";
 $result = $conn->query($query);

 while($row = $result->fetch_assoc()) {
 ?>

  <tr>
   <td><?php echo $row['id_proveedor']; ?></td>
   <td><?php echo $row['nombre_prov']; ?></td>
   <td><?php echo $row['telefono_prov']; ?></td>
   <td><?php echo $row['direccion_prov']; ?></td>
   
   <!--buttons-->
   <!--
<td>    
   <a href="controlUsuarios/updateUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" data-bs-target="#updatemodal" data-bs-whatever="@mdo">Editar</a>
    <a href="controlUsuarios/deleteUsuarios.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
</td>
   -->
  </tr>
 <?php } ?>