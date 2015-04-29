<?php
require_once 'banco.php';
require_once 'bean/prato.php';

class PratoDAO extends Banco{
    public function cadPrato(Prato $objPrato){
        $conexao = $this->abreConexao();
        
        $sql = "
                INSERT INTO pratos SET
                nome = '".$objPrato->getNome()."'
               ";
        
        $conexao->query($sql);
        
        $this->fechaConexao();
    }
    
    
    public function altPrato(Prato $objPrato){
        $conexao = $this->abreConexao();
        
        $sql = "
                UPDATE pratos SET
                nome = '".$objPrato->getNome()."'
                    WHERE idPrato = ".$objPrato->getIdPrato()."
               ";
        
        $this->fechaConexao();
    }
}

$objPratoDao = new PratoDAO();