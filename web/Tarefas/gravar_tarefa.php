<?php

$nome = $_POST["nome"];
$detalhes = $_POST["detalhes"];
$status = 0;
if($_POST["status"]=="on"){
    $status = 1;
}

$sql = "INSERT INTO `tarefas` (`nome`, `detalhes`, `status`) VALUES ( '$nome', '$detalhes', '$status')";
require_once("conexao.php");

if($conn->query($sql)===TRUE){
    echo "Tarefa inserida com sucesso!";
}else{
    echo "Erro ao inserir dados.".$conn->error;
}
?>
<br><br>
<a href="index.php">Voltar</a>