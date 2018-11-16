<?php
require_once("vereficar_sessao.php");
    

require_once("conexao.php");
 $sql = "DELETE FROM `tarefas` WHERE `tarefas`.`id` = ".$_GET["id"];

 if($conn->query($sql)===TRUE){
     echo "Tarefa Excluida com sucesso! ";
 }else{
     echo "Erro ao Excluir Tarefa! " . $conn->error;
 }
 ?>
 <br><br>

<a href="index.php">Voltar</a>