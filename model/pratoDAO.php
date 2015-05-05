<?php

require_once 'banco.php';
require_once 'bean/prato.php';

class PratoDAO extends Banco {

    public function cadPrato(Prato $objPrato) {
        $conexao = $this->abreConexao();

        echo $sql = "
                INSERT INTO pratos SET
                nome = '" . $objPrato->getNome() . "',
                imagem = '" . $objPrato->getImagem() . "'
               ";

        $conexao->query($sql);

        $this->fechaConexao();
    }

    public function altPrato(Prato $objPrato) {
        $conexao = $this->abreConexao();

        $sql = "
                UPDATE pratos SET
                nome = '" . $objPrato->getNome() . "',
                imagem = '" . $objPrato->getImagem() . "'
                    WHERE idPrato = " . $objPrato->getIdPrato() . "
               ";

        $conexao->query($sql);

        $this->fechaConexao();
    }

    public function listaPrato(Prato $objPrato = NULL) {
        $conexao = $this->abreConexao();

        if ($objPrato != NULL) {
            $where = 'WHERE idPrato = ' . $objPrato->getIdPrato();
        } else {
            $where = '';
        }


        $sql = "SELECT * FROM " . TBL_PRATO . $where;

        $banco = $conexao->query($sql);

        $linhas = array();
        while ($linha = $banco->fetch_assoc()) {
            $linhas[] = $linha;
        }

        return $linhas;
    }

}

$objPratoDao = new PratoDAO();
