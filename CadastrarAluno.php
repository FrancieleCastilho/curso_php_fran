<?php
 echo "Dados dos Alunos <br><br>";
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