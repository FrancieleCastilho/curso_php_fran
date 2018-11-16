<?php

$servidor = "cursophp_db_1";
$user = "root";
$password = "phprs";
$banco = "curso_php";

$conn = new mysqli($servidor, $user, $password, $banco);

if($conn->connect_error){
    die("erro ao tentar conectar ao banco de dados". $conn->connect_error);
}