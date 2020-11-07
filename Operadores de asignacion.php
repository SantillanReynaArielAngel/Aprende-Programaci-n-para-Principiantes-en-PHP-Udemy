<?php
print('Las variables de asignacion son: <br>');
echo '=';
print('<br><br>');


$variable=10;
print('$variable = '.$variable."<br>");

echo '<br> $variable +=5; //Hara que se sume a esa variable +5 unidades';
print '<br>'.$variable+=5;

$variable2=10;
echo '<br> $variable -=2; //Hara que se reste a esa variable -2 unidades';
$variable2-=2;
print("<br> $variable2");

$variable3=10;
echo '<br> $variable *=5; //Hara que se multiplique a esa variable *5 veces';
print '<br>'.$variable3*=5;

?>