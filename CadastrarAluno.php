<?php


session_start();
$requicao = 3;
$_SESSION["CadastrarAluno"] = $requicao;

echo $_SESSION["CadastrarAluno"] . "<br>";


 echo "Dados dos Alunos <br><br>";
echo "E-mail: ".$_POST["email"]."<br>";
 echo "Nome: ". $_POST["nome"]." ".$_POST["sobrenome"]."<br>";
 echo "Turma: ". $_POST["turma"]."<br>";
 echo "Período: ";
 if ($_POST["periodo"]=="Manha"){
    echo "Manhã <br>";
 }elseif($_POST["periodo"]=="Tarde"){
    echo "Tarde <br>";
 }elseif($_POST["periodo"]=="Noite"){
    echo "Noite <br>";
 }else{
     echo "Usuário não informou o período em que estuda";
 }
echo "Cursa as matérias: ";
foreach($_POST["materias"] as $materia){
    echo $materia . ", ";
}
echo "<br> Justificativa: ".$_POST["justificativa"];