<?php
require_once("Pessoa.php");
require_once("Funcoes.php");
require_once("Aluno.php");
require_once("Funcionario.php");

$pessoa = new Pessoa();
$pessoa->setNome("Pedro");
$pessoa->setEndereco("Av. Paulista");
imprimir($pessoa->getNome());
imprimir($pessoa->getEndereco());

$aluno = new Aluno();
$aluno->setNome("Vinicius");
$aluno->setDisciplina("Magento 1 User");
imprimir($aluno->getNome());
imprimir($aluno->getDisciplina());

$funcionario = new Funcionario();
$funcionario->setNome("João");
$funcionario->setSalario(2200);
$funcionario->setDepartamento("RH");
imprimir($funcionario->getNome(). " trabalha no ".$funcionario->getDepartamento()." e seu Salario é de R$ ".$funcionario->getSalario());
