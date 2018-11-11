<?php

$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";

$conn = new  mysqli($servidor, $usuario, $senha);

if ($conn->connect_error){
    die ("Erro ao conectar ao banco de dados". $conn->connect_error);
}

echo "Conexao efetuada com sucesso";

/* Erro ao errar o Nome do Banco 

Warning: mysqli::__construct(): php_network_getaddresses: getaddrinfo failed: Name or service not known in /var/www/html/iniciandoPHP/Index.php on line 7

Warning: mysqli::__construct(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: Name or service not known in /var/www/html/iniciandoPHP/Index.php on line 7
Erro ao conectar ao banco de dadosphp_network_getaddresses: getaddrinfo failed: Name or service not known

Erro ao errar o Usuario
Warning: mysqli::__construct(): (HY000/1045): Access denied for user 'root1'@'172.17.0.4' (using password: YES) in /var/www/html/iniciandoPHP/Index.php on line 7
Erro ao conectar ao banco de dadosAccess denied for user 'root1'@'172.17.0.4' (using password: YES)

Erro ao errar a senha
Warning: mysqli::__construct(): (HY000/1045): Access denied for user 'root'@'172.17.0.4' (using password: YES) in /var/www/html/iniciandoPHP/Index.php on line 7
Erro ao conectar ao banco de dadosAccess denied for user 'root'@'172.17.0.4' (using password: YES)
*/
