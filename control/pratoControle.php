<?php
require_once '../model/pratoDAO.php';

$opcao = $_POST['opcao'];
switch ($opcao){
    case 'cadPrato':
        $nome = $_POST['nome'];
        
        $objPrato->setNome($nome);
        
        $objPratoDao->cadPrato($objPrato);
        break;
    
    case 'altPrato':
        $nome = $_POST['nome'];
        $idPrato = $_POST['idPrato'];
        
        $objPrato->setIdPrato($idPrato);
        $objPrato->setNome($nome);
        
        $objPratoDao->altPrato($objPrato);
        break;
}