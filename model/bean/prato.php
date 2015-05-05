<?php
class Prato{
    private $idPrato;
    private $nome;
    private $imagem;
            
    
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
    
    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($foto){
        $this->imagem = $foto;
    }
}

$objPrato = new Prato();