<?php
require_once("Pessoa.php");
require_once("Funcoes.php");

$pessoa1 = new Pessoa();
$pessoa1->setNome("Pedro");
imprimir($pessoa1->getNome());