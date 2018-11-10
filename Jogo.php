<?php

$times = array("Palmeiras",
"Internacional",
"Flamengo",
"São Paulo",
"Grêmio",
"Atlético-MG",
"Santos",
"Cruzeiro",
"Atlético-PR",
"Atlético-PR",
"Bahia",
"Corinthians",
"Vasco",
"Botafogo",
"Ceará",
"Sport",
"Vitória",
"América-MG",
"Chapecoense",
"Paraná");
foreach($times as $time){
    foreach($times as $jogo){
    if ($time != $jogo){
        echo $time." X ".$jogo."<br>";
    }
    }
}