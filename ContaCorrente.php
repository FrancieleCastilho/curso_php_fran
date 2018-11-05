<?php
require_once("Conta.php");
class ContaCorrente extends Conta{
    public function credito($valor){
        $this->saldo += $valor * 10;

    }
    public function getSaldo(){
        return $this->saldo;
    }
}