<?php
   $servidor = "cursophp_db_1";
   $user = "root";
   $password = "phprs";
   $banco = "curso_php";

   $conn = new  mysqli($servidor, $user, $password, $banco);

   if ($conn->connect_error){
       die ("Erro ao conectar ao banco de dados". $conn->connect_error);
   }

    $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = ".$_GET["id"];

    if($conn->query($sql)===TRUE){
        echo "Usuario Excluido com sucesso! ";
    }else{
        echo "Erro ao Excluir Usuario! " . $conn->error;
    }
    $conn->close();
    ?>
    <br><br>

    <a href="Conexao.php">Cadastros</a>

