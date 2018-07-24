<?php
    $fechas = "23-07-2018";

function estraerNombreDia($fecha){
  $fechats = strtotime($fecha); //a timestamp : Devuelve la marca de tiempo Unix
  //el parametro w en la funcion date indica que queremos el dia de la semana
  //lo devuelve en numero 0 domingo, 1 lunes,....
  switch (date('w', $fechats)){
  case 0: $nombreDia = "Domingo"; break;
  case 1: $nombreDia = "Lunes"; break;
  case 2: $nombreDia = "Martes"; break;
  case 3: $nombreDia = "Miercoles"; break;
  case 4: $nombreDia = "Jueves"; break;
  case 5: $nombreDia = "Viernes"; break;
  case 6: $nombreDia = "Sabado"; break;
  }
  return $nombreDia;

}

echo estraerNombreDia($fechas) ;



 ?>
