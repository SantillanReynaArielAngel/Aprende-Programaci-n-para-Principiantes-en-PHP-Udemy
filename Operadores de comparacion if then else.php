<?php

// operadores de comparacion
$num1 =12;
$num2=3;
$num3=15;

$num4=4;
$num5=5;

if($num1>$num2)
{
    echo $num1." Es mayor que: ".$num2;
}else{
    echo $num2." Es mayor que: ".$num1;
}
echo '<br>';

if($num2>=$num3)
{
    echo $nun2.' es mayor o igual a '.$num3;
}else{
    echo $num2. 'es menor a '.$num3;
}
echo "<br>";

if($num4==$num5)
{
        echo $num4.' es igual a '.$num5;
}else{
    echo $num4.' es diferente de '.$num5;
}
echo '<br>';
?>