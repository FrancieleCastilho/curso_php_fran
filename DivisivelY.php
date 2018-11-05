<?php

$numInicial = 5;
$numFinal = 43;
$divisor = 4;
$contador = $numInicial;

while($contador <= $numFinal){
    
    
    if($contador % $divisor == 0){
        echo $contador." <br>";
    }
    $contador +=1;
}