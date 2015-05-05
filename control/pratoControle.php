<?php
require_once '../model/pratoDAO.php';


$opcao = $_POST['opcao'];
switch ($opcao){
    case 'cadPrato':
        $nome = $_POST['nome'];
        $foto = '';
        
        if($_FILES['imagem']['name'] != ''){
            $foto = uploadImagem();
        }
        
        
        $objPrato->setNome($nome);
        $objPrato->setImagem($foto);
        
        $objPratoDao->cadPrato($objPrato);
        
        header('Location: ../verPratos.php');
        break;
    
    case 'altPrato':
        $nome = $_POST['nome'];
        $idPrato = $_POST['idPrato'];
        
        if($_FILES['imagem']['name'] == ''){
            $foto = $_POST['imagemAntiga'];
        }else{
            $foto = uploadImagem($_POST["imagemAntiga"]);
        }
        
        $objPrato->setIdPrato($idPrato);
        $objPrato->setNome($nome);
        $objPrato->setImagem($foto);
        
        $objPratoDao->altPrato($objPrato);
        header('Location: ../verPratos.php');
        break;
}

function uploadImagem($imagemAntiga = NULL) {

    $valido = true;
    $tipoArquivo = pathinfo($_FILES['imagem']['name']);
    $tipoArquivo = '.' . $tipoArquivo['extension'];

    $new_file_name = strtolower(md5(date('d/m/Y/H:i:s'))) . $tipoArquivo;
    if ($_FILES['imagem']['size'] > (1048576)) { //não pode ser maior que 1Mb
        $valido = false;
    } else {
        $imagemAntiga = '../upload/' . $imagemAntiga;

        if (!file_exists('../upload/')) {
            mkdir('../upload/');
        } elseif (file_exists($imagemAntiga)) {
            @unlink($imagemAntiga);
        }
        move_uploaded_file($_FILES['imagem']['tmp_name'], '../upload/' . $new_file_name);

        $valido = $new_file_name;
    }

    return $valido;
}