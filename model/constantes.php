<?php
@session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'constantesBanco.php';

//função para remover expressões comuns de banco de dados
function seg($var) {
    $procura = array("insert into", "update", "delete from", "select % from");
    $retorno = str_ireplace($procura, '', $var);
//    $retorno = htmlentities($retorno);
    
    return $retorno;
}

//Constantes de Tabela
//Tabelas ADMIN
define("TBL_PRATO",DB_ADMIN.TBL_ADMIN."pratos ");
define("TBL_USUARIO",DB_ADMIN.TBL_ADMIN."usuarios ");