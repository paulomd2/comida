<?php
require_once 'banco.php';
require_once 'bean/usuario.php';

class UsuarioDAO extends Banco{
    public function verificaLogin(Usuario $objUsuario){
        $conexao = $this->abreConexao();
        
        $sql = "SELECT *
                    FROM ".TBL_USUARIO."
                        WHERE usuario = '".$objUsuario->getUsuario()."'
                        AND senha = '".$objUsuario->getSenha()."'
               ";
        
        $banco = $conexao->query($sql);
        
        if($banco->num_rows < 1){
            $resultado = 0;
        }else{
            $resultado = $banco->fetch_assoc();
        }
        
        return $resultado;
        
        $this->fechaConexao();
    }
    
    
    public function listaUsuario($idUsuario){
        $conexao = $this->abreConexao();
        
        $sql =  "
                SELECT * FROM ".TBL_USUARIO." WHERE idUsuario = ".$idUsuario."
                ";
        
        $banco = $conexao->query($sql);
        
        $linha = $banco->fetch_assoc();
        
        return $linha;
    }
}

$objUsuarioDao = new UsuarioDAO();