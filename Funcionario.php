<?php

require_once("Pessoa.php");

class Funcionario extends Pessoa{
    private $salario; 
    private $departamento;


    public function setSalario($valorsalario){
        $this->salario = $valorsalario;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setDepartamento($setor){
        $this->departamento = $setor;
    }
    public function getDepartamento(){
        return $this->departamento;
    }
}