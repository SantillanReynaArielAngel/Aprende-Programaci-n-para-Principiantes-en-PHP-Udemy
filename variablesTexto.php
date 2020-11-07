<?php
    $nombre="Ariel";
    $apellido="Santillan";

// echo sirve para imprimir texto

//Utilizamos . para concatenar
    echo 'Bienvenido'." ".$apellido." ".$nombre;
//Otra forma de concatenar
print("<br>");
echo "Bienvenido $apellido $nombre";

//IMPORTANTE:
//Si utilizamos '' con echo, reconoce todo como un string
print("<br>");
echo 'Bienvenido3 $nombre $apellido';

echo '<br> Bienvenido '.$nombre.' '.$apellido
?>