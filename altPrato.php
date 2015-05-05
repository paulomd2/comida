<?php
require_once 'model/pratoDAO.php';

$idPrato = $_GET['id'];

$objPrato->setIdPrato($idPrato);

$prato = $objPratoDao->listaPrato($objPrato);
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>        
        <title>Baby Beauty</title>
        <?php include_once 'include/head.php'; ?>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/pratos.js"></script>
    </head>
    <body>
        <?php include_once 'include/header.php' ?>
        <div class="main">
            <form id="frmAltPrato" method="post" action="control/pratoControle.php" enctype="multipart/form-data" class="edi-post" style="overflow: hidden;">
                <input type="hidden" id="idPrato" name="idPrato" value="<?php echo $idPrato; ?>" />
                <input type="hidden" id="opcao" name="opcao" value="altPrato" />
                <input type="hidden" name="imagemAntiga" id="imagemAntiga" value="<?php echo $prato[0]['imagem']; ?>" />
                <fieldset>
                    <h2>Prato</h2>
                    <textarea name="nome" id="nome"><?php echo $prato[0]['nome']; ?></textarea>
                </fieldset>
                <fieldset>
                    <h2>Imagem</h2>
                    <input type="file" name="imagem" id="imagem" /><br />
                    <span id="spanImagem" class="erro"></span>
                </fieldset>
                <input type="button" value="Editar prato" id="btnAltPrato" />
                <input type="button" onclick="history.back(-1);" class="btn" value="VOLTAR"><br />
                <span id="spanImagem" class="erro"></span>
                </fieldset>

            </form>

        </div>

    </body>
</html>