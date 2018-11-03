<?php
require_once("Conta.php");

$conta = new Conta;

$conta->setNumero("1234");
$conta->setCliente("João");

echo $conta->getNumero();
echo "</br>";
echo $conta->getCliente();