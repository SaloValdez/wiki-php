<?php
  require_once './../backend/consumirDato.php';

  $obj = new ClsDatos();
  $exe = $obj->mostrarGrupo();
  while ($row = mysqli_fetch_assoc($exe)) {
?>
  <option value="<?php echo $row['id_curso'];?>"><?php echo $row['nombre_curso'];?></option>
<?php
  }
 ?>
