<?php
require_once("Pessoa.php");
require_once("Funcoes.php");

$pessoa = new Pessoa();
$pessoa->setNome("Pedro");
$pessoa->setEndereco("Av. Paulista");
imprimir($pessoa->getNome());
imprimir($pessoa->getEndereco());
