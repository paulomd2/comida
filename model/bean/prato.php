<?php
class Prato{
    private $idPrato;
    private $nome;
    
    public function getIdPrato(){
        return $this->idPrato;
    }
    public function setIdPrato($idPrato){
        $this->idPrato = $idPrato;
    }
    
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
}

$objPrato = new Prato();