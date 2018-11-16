<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
$status = $_POST["status"];
$id = $_POST["id"];


$servidor = "cursophp_db_1";
$user = "root";
$password = "phprs";
$banco = "curso_php";

$conn = new  mysqli($servidor, $user, $password, $banco);

if ($conn->connect_error){
    die ("Erro ao conectar ao banco de dados". $conn->connect_error);
}
if($id > 0){
    $sql = "UPDATE `usuarios` SET `email` = '$email', `senha` = '$senha', `status` = '$status' WHERE `usuarios`.`id` =".$id;

}else{
        $sql = "INSERT INTO `usuarios` (`id`, `email`, `senha`, `status`) VALUES (NULL, '$email', '$senha', '$status')";
     }
        if($conn->query($sql)===TRUE){
            echo "Dados gravados com sucesso!<br>";
            
        }else{
            echo "Erro ao tentar inserir os dados! ". $conn->error;
             }

$conn->close();
?>
<a href="Conexao.php">Cadastros</a>