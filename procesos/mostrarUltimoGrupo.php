<?php
require_once './../backend/consumirDato.php';


$idGrupo= $_POST['idGrupo'];

$obj = new ClsDatos();
echo json_encode( $obj->mostrarNuevoGrupo($idGrupo));


 ?>
