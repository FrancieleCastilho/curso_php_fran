<?php

 require_once("conexao.php");
header("Content-type:text/html; charset=ISO-8859-1");

 $sql = "SELECT * FROM tarefas";
 
 $result = $conn->query($sql);
    
 if($result->num_rows>0){

     while($row = $result->fetch_assoc()){
         echo "ID: ".$row["id"]."<br>";
         echo "Nome: ".$row["nome"]."<br>";
         echo "Detalhes: ".$row["detalhes"]."<br>";
         echo "Status: ".$row["status"]."<br><br>";
     }

 }else{
     echo "não tem nenhum regitro";
 }
 $conn->close();