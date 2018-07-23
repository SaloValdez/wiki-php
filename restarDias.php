<?php


$fecha = date('Y-m-j');
$nuevafecha = strtotime ( '-2 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
echo $nuevafecha ;

 ?>
