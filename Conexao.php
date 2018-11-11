<?php

$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$conn = new  mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error){
    die ("Erro ao conectar ao banco de dados". $conn->connect_error);
}

$sql = "SELECT * FROM `usuarios` ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "o numero de registro é: ".  $result->num_rows;
}else{
    echo "não existe nenhum registro";
}
$conn->close();

