<?php
 $estudiante = 'Jhonatan';
 
 /*Nota
 90-100=A
 80-89=B
 70-79=C
<70 = D
 */

 $nota=95;

 if($nota<=100 && $nota>=90)
 {
     echo 'El '.$estudiante.' tiene una calificacion de A';
 }else{
    if($nota<=89 && $nota>=80)
    {
        echo 'El '.$estudiante.' tiene una calificacion de B';
    }else{
        if($nota<=79 && $nota>=70)
        {
            echo 'El '.$estudiante.' tiene una calificacion de C';
        }else{
            if($nota<70)
            {
                echo 'El '.$estudiante.' tiene una calificacion de D';
            }
        }
    }
 }
    

?>