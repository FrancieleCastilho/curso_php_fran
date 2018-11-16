<?php
require_once("vereficar_sessao.php");

    $key = $_POST["key"];

?>
<!DOCTYPE html>
    <html>
        <head>
            <title> Tarefas </title>
        </head>
        <style>
        table{
            font-family: arial. sans-serif;
            border-collapse:collapse;
            width:100%;
        }
        th, td{
            border:1px solid black;
            text-align:left;
            padding:8px
        }
        tr:nth-child(even){
            background-color:silver;
        }
        </style>
        <body>
            <form action="listar_tarefas.php" method="POST">
                <input type="text" name="key"/>
                <input type="submit" value="Pesquisar"/>
                <br><br>
            </form>

            <?php

            require_once("conexao.php");
            

            $sql = "SELECT * FROM tarefas";

            if($key != ""){
                $sql .= " WHERE nome LIKE '%".$key."%'";
    
            }
            $result = $conn->query($sql);
                
            if($result->num_rows>0){

                echo "<table>";
                echo "<tr><th>ID</th><th>Nome</th><th>Detalhes</th><th>Status</th><th></th></tr>";
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";

                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["nome"]."</td>";
                            echo "<td>".$row["detalhes"]."</td>";
                            echo "<td>" .($row["status"]? 'Concluída': "A fazer")."</td>";
                            echo "<td>";
                            echo "<a href='excluir_tarefas.php?id=".$row["id"]."'>Excluir</a>";
                            echo "&nbsp;|&nbsp;";
                            echo "<a href='incluir_tarefa.php?id=".$row["id"]."'>Editar</a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "<br><br>";
            }else{
                echo "não tem nenhum regitro";
            }
            ?>
            <a href="incluir_tarefa.php"> Incluir Tarefa </a>

            <?php
            $conn->close();
            ?>
        </body>
    </html>