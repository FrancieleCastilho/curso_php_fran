<?php
require_once("Pessoa.php");

class Aluno extends Pessoa{
    private $disciplina;

   public function setDisciplina($valor){
        $this->disciplina = $valor;
    }
    public function getDisciplina(){
        return $this->disciplina;
    }
}