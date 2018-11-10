<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$cidades = array(
    array(
        "nome" => "São Paulo",
        "populacao" => "12,11 milhões (2018)",
        "prefeito" => "Bruno Covas",
    ),
    array(
        "nome" => "Rio de Janeiro",
        "populacao" => "6,32 milhões (2010)",
        "prefeito" => "Marcelo Crivella",
    ),
    array(
        "nome" => "Curitiba",
        "populacao" => "1,765 milhão (2010)",
        "prefeito" => "Rafael Greca",
    ),
    array(
        "nome" => "Belo Horizonte",
        "populacao" => "1,433 milhão (2010)",
        "prefeito" => "Alexandre Kalil",
    ),
    array(
        "nome" => "Florianópolis",
        "populacao" => "477.798 (2016)",
        "prefeito" => "Gean Loureiro",
    ),
);

foreach($cidades as $cidade){
    echo "Nome: ". $cidade["nome"]. "<br>";
    echo "População: ". $cidade["populacao"]. "<br>";
    echo "Prefeito: ". $cidade["prefeito"]. "<br>";
    echo "<hr>";

}