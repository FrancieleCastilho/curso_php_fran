<?php

class Conta{
    private $numero;
    private $cliente;
    protected $saldo;
    

    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getNumero(){
        return $this->numero;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function getCliente(){
        return $this->cliente;
    }

    public function setSaldo($valor){
        $this->saldo = $valor;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function depositar($valor){
        $this->saldo += $valor;
    }
    public function sacar($valor){
        $this->saldo -= $valor;
    }

}
