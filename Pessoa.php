<?php
class Pessoa{
   private $nome;
    private $endereco;
    public function setNome($valor){
        $this->nome = $valor;
    }

    public function getNome(){
        $nome = $this->nome;
        return $this->transformUpperCase($nome);
    }
    private function transformUpperCase($palavra){
        return strtoupper($palavra);
    }
    public function setEndereco($rua){
        $this->endereco = $rua;
    }
    public function getEndereco(){
        return $endereco = $this->endereco;
    }
}