<?php
  class ClsConexion{

    public function conexion(){
      $cadenaConexion = mysqli_connect('localhost','root','','asis_docente');
      return $cadenaConexion;

    }

  }



 ?>
