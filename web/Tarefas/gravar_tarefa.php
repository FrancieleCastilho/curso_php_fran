<?php
require_once("vereficar_sessao.php");

$nome = $_POST["nome"];
$detalhes = $_POST["detalhes"];
$status = 0;
if($_POST["status"]=="on"){
    $status = 1;
}

$id = $_POST["id"];

if($id < 1){
$sql = "INSERT INTO `tarefas` (`nome`, `detalhes`, `status`) VALUES ( '$nome', '$detalhes', '$status')";
}else{
    $sql = "UPDATE `tarefas` SET `nome` = '$nome', `detalhes` = '$detalhes', `status` = '$status' WHERE `tarefas`.`id` =".$id;
}

require_once("conexao.php");

if($conn->query($sql)===TRUE){
    echo "Dados gravados com sucesso!";
}else{
    echo "Erro ao inserir dados.".$conn->error;
}
?>
<br><br>
<a href="index.php">Voltar</a>