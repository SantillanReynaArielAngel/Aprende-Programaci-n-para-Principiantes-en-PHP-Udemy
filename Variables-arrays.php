<?php
//con claves por defecto:
$nombres=array('Ariel',"Ana","Fernando", "Jonny","Pablo",'cristian','javier','Juan');
var_dump($nombres);
print('<br> En la posision 2 del arrqay tenemos a: ');
print $nombres[2];


//Asingnado una clave
$frutas=array(
    'clave1'=>"Manzana",
    'clave2'=>'Peramota',
    "id"=>'frutilla'
);
print('<br>');
var_dump($frutas);
print('<br> Imprimimos la fruta con clave2: '.$frutas['clave2']);


?>