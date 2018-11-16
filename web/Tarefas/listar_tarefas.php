<!DOCTYPE html>
    <html>
        <head>
            <title> Formulário de Usuarios</title>
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
            <?php

            require_once("conexao.php");
            

            $sql = "SELECT * FROM tarefas";
            
            $result = $conn->query($sql);
                
            if($result->num_rows>0){

                echo "<table>";
                echo "<tr><th>ID</th><th>Nome</th><th>Detalhes</th><th>Status</th></tr>";
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";

                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["nome"]."</td>";
                            echo "<td>".$row["detalhes"]."</td>";
                            echo "<td>" .($row["status"]? 'Concluída': "A fazer")."</td>";
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