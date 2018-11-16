<?php
require_once("Conta.php");

class ContaPoupanca extends Conta{

    public function poupanca($valor){
        $this->saldo += $valor + ($valor * 0.2);
    }
    public function getSaldo(){
        return $this->saldo;
    }
}