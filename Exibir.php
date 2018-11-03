<?php
require_once("Conta.php");
require_once("Funcoes.php");
require_once("ContaCorrente.php");
require_once("ContaPoupanca.php");

$conta = new Conta;
$conta->setNumero("1234");
$conta->setCliente("João");
$conta->setSaldo(200);
imprimir("Cliente: ". $conta->getCliente() . " Conta nº " . $conta->getNumero());
imprimir("Saldo: ". $conta->getSaldo());

$conta->depositar(100);
imprimir("Saldo + Deposito: ". $conta->getSaldo());

$conta->sacar(50);
imprimir("Saldo - Saque: ". $conta->getSaldo());

$credito = new ContaCorrente;
$credito->credito($conta->getSaldo());
imprimir("Credito pessoal (Saldo*10): ". $credito->getSaldo());

$poupanca = new ContaPoupanca;
$poupanca->poupanca($conta->getSaldo());
imprimir("O Saldo total (Saldo+Poupança) é de : ". $poupanca->getSaldo());