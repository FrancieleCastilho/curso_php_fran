<?php
 echo "Dados dos Alunos <br><br>";
 echo "Nome: ". $_POST["nome"]." ".$_POST["sobrenome"]."<br>";
 echo "Turma: ". $_POST["turma"]."<br>";
 echo "Período: ";
 if ($_POST["periodo"]=="Manha"){
    echo "Manhã";
 }elseif($_POST["periodo"]=="Tarde"){
    echo "Tarde";
 }elseif($_POST["periodo"]=="Noite"){
    echo "Noite";
 }else{
     echo "Usuário não informou o período em que estuda";
 }
