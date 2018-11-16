<?php
session_start();

$requicao= 1;
 $_SESSION["Cadastro"] = $requicao;
 $_SESSION["Formulario"] = $requicao;
 $_SESSION["CadastrarAluno"] = $requicao;

 echo $_SESSION["Cadastro"] . "<br>";

?>


<form action="Formulario.php" method="POST">
    <label> E-Mail </label><br>
    <input type="text" name="email"/><br>
    <label> Senha </label><br>
    <input type="password" name="Senha"/><br>

    <input type="submit" value ="Salvar"/><br>
</form>