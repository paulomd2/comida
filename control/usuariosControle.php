<?php
require_once '../model/usuariosDAO.php';

$opcao = $_POST['opcao'];
switch($opcao){
    case 'verificaLogin':
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $objUsuario->setUsuario($usuario);
        $objUsuario->setSenha($senha);
        
        $resposta = $objUsuarioDao->verificaLogin($objUsuario);
        
        if($resposta != 0){
            $_SESSION['idUsuario'] = $resposta['idUsuario'];
            $retorno = 1;
        }else{
            $retorno = 0;
        }
        
        $retorno = json_encode($retorno);
        print_r($retorno);
        break;
}