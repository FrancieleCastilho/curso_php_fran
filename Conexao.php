<!DOCTYPE  html>
<html>
    <head>
        <title> Tarefa </title>
    </head>
    <style>
        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width:100%;
        }
        th, td{
            border:1px solid black;
            text-align:left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:silver;
        }
    </style>
    <body>


        <?php

        $servidor = "cursophp_db_1";
        $user = "root";
        $password = "phprs";
        $banco = "curso_php";

        $conn = new  mysqli($servidor, $user, $password, $banco);

        if ($conn->connect_error){
            die ("Erro ao conectar ao banco de dados". $conn->connect_error);
        }

        $sql = "SELECT * FROM `usuarios` ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            echo "o numero de registro é: ".  $result->num_rows."<br>";
            echo "<a href='Form_Usuarios.php'>Cadastrar Usuarios</a><br><br>";
            echo "<br><br>";

            echo "<table>";
            echo "<tr> 
                    <th>id</th> 
                    <th>Email</th> 
                    <th>Senha</th> 
                    <th>Status</th>
                    <th></th>
                  </tr>";
            
            echo "<tr>";
            while($row =  $result->fetch_assoc()){
                echo "<td> " .$row["id"]."</td>";
                echo "<td>" .$row["email"]."</td>";
                echo "<td>" .$row["senha"]."</td>";
                echo "<td>" .($row["status"]? 'Ativo': "Desativo")."</td>";
                echo "<td><a href='Apagar_Usuarios.php?id=".$row["id"]."'>Excluir</a></td>";

                echo "</tr>";
                
            }
            echo "</table>";
        }else{
            echo "não existe nenhum registro";
        }
        $conn->close();
        ?>
    </body>
</html>
