<?php

$nome = "Franciele";
$sobrenome = "Castilho";
$endereco = "Cachoeira Paulista";
$idade = 25; 
$telefone = 123456789;

echo "Olá meu nome é ".$nome." ".$sobrenome." tenho ".$idade. " anos, moro em ".$endereco. " e meu telefone é: ".$telefone."!";
echo "<br>";

if($idade > 21){
    echo "tem maioridade juridica";
}else{
    echo "Não tem maioridade juridica";
}