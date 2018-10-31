<?php

class Conta{
    private $numero;
    private $cliente;
    

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

}
