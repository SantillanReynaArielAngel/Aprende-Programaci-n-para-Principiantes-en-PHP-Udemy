<?php

//Se utiliza el simbolo "$" y nunca empieza con # o algun num, simpre con un texto
$a = 5;
$b = 2;
$c = true;
$d = false;
$texto = 'Esto es un string';

if($a<$b)
{
    print($c); // en php true es igual a 1
}else{
    print($d);; // en php es igual a 0 pero no se muestra
    print "<br>$texto";
}
?>