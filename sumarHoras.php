<?php

function segundos_en_tiempo($segundos){
  $horas  = floor ($segundos / 3600);
  $minutos = floor($segundos % 3600 / 60 );
  $segundos = $segundos % 60;
  return sprintf("%d:%02d:%02d", $horas ,$minutos , $segundos);
}



  $lista  = array('01:20:10','01:00:10','01:00:00','01:00:00');
  $horasEnSegundos= 0 ;

  foreach ($lista as $item) {
          // echo "<p>".$item.'</p>';
    $calc = 0;
          list($horas,$minutos,$segundos) = explode(':',$item);
          $calc  = $horas  * 3600 + $minutos * 60 + $segundos;
          echo  '<p>'.$item. ' - en segundos: '.$calc . '</p>';
          $horasEnSegundos  = $horasEnSegundos + $calc; //en segundos
          $horasEnMinutos = $horasEnSegundos/60; //en minutos
          $horasEnHoras  =$horasEnSegundos/3600; //en horas
  }

// echo "<hr>";
// echo "<p> Segundos " .$horasEnSegundos .'</p>' ;
// echo "<p> Minutos " .$horasEnMinutos .'</p>' ;
// echo "<p> Horas " .$horasEnHoras .'</p>' ;

  echo "<hr>";
  // echo "<p>". $suma .'</p>';
  echo "<p>". segundos_en_tiempo($horasEnSegundos) .'</p>';

 ?>


<?php
// echo "<br>";
//
// $sumahoras = '03:20:00'  + '01:00:00';
// echo "<br>". $sumahoras;



 ?>
