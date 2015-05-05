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
            <form id="frmAltPrato"  class="edi-post" style="overflow: hidden;">
	        <input type="hidden" id="idprato" value="<?php echo $idPrato; ?>" />
                    <fieldset>
                        <h2>CONTEÚDO DO POST</h2>
                        <textarea name="texto" id="texto"><?php echo $post['nome']; ?></textarea>
                    </fieldset>
                    <input type="button" value="Editar post" id="btnAltPost" />
                    <input type="button" onclick="history.back(-1);" class="btn" value="VOLTAR"><br />
                    <span id="spanImagem" class="erro"></span>
                </fieldset>

            </form>

        </div>

    </body>
</html>