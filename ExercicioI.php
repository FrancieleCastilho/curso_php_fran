<?php

$numero1 = 2;
$numero2 = 15;

$resultado = $numero1 + $numero2;

if ($resultado<=20){
    $resultado = $resultado - 5;
    echo $resultado;
}elseif($resultado > 20){
    $resultado = $resultado + 8;
    echo $resultado;
}