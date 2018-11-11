<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
$status = $_POST["status"];


$servidor = "cursophp_db_1";
$user = "root";
$password = "phprs";
$banco = "curso_php";

$conn = new  mysqli($servidor, $user, $password, $banco);

if ($conn->connect_error){
    die ("Erro ao conectar ao banco de dados". $conn->connect_error);
}$sql = "INSERT INTO `usuarios` (`id`, `email`, `senha`, `status`) VALUES (NULL, '$email', '$senha', '$status')";

if($conn->query($sql)===TRUE){
    echo "Dados inseridos com sucesso!<br>";
    
}else{
    echo "Erro ao tentar inserir os dados! ". $conn->connect_error;
}
$conn->close();
?>
<a href="Conexao.php">Cadastros</a>