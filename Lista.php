<?php
$funcionarios = array("Vitor", "Pedro", "Gabriel", "Lucas", "Reinaldo", "Ana", "Jessika", "Franciele", "Flaviane", "Karina");
$contador=0;

do{
    echo $funcionarios[$contador] . "<br>";
    $contador ++;
}while($contador < count($funcionarios));