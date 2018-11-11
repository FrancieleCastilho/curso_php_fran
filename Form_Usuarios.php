<?php
    $idUsuario = $_GET["id"];

    if($idUsuario > 0){
        
        $servidor = "cursophp_db_1";
        $user = "root";
        $password = "phprs";
        $banco = "curso_php";
     
        $conn = new  mysqli($servidor, $user, $password, $banco);
     
        if ($conn->connect_error){
            die ("Erro ao conectar ao banco de dados". $conn->connect_error);
        }
        $sql = "SELECT * FROM `curso_php`.`usuarios` WHERE `usuarios`.`id` = ".$idUsuario;
        
        $result = $conn->query($sql);
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            $id = $row["id"];
            $email = $row["email"];
            $senha = $row["senha"];
            $status = $row["status"];
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Formulário de Usuarios</title>
    </head>
    <body>
        <form action="Usuario.php" method="POST">
            <label>E-mail</label><br>
            <input type="text" name="email" value="<?=$email?>"/><br>
            <label>Senha</label><br>
            <input type="password" name="senha" value="<?=$senha?>"/><br>
            <label>Status</label><br>
            <select name="status">
                <option value="0" <?=$status==0?"SELECTED":"";?> >Inativo</option>
                <option value="1" <?=$status==1?"SELECTED":"";?> >Ativo</option>
            </select>
            <br><br>

            <input type="submit" value="Salvar"/>

            <input type="hidden" name="id" value="<?=$id?>"/>
            
            </form>
            <br><br>
            <a href="Conexao.php">Voltar</a>
    </body>
</html>