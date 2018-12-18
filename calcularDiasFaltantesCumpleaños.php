<?php  
$fecha1 = "2018-12-18";
$fecha2 = "2019-01-18";  //Lo pongo para el 2010

$fecha1 = strtotime($fecha1);
$fecha2 = strtotime($fecha2);

$segundos = $fecha2 - $fecha1; //Son el numero de segundos que hay entre las dos fechas
$dias = $segundos/(3600*24); //Lo divido por los segundos que tiene una hora, por las 24 horas del dia
$dias = round($dias); //La division puede no ser exacta, redondeo.
echo "Faltan ".$dias." dias";


?>