<!DOCTYPE html>
<html lang="pt-BR">
    <head>        
        <title>MD2 | Comidas</title>
        <?php include_once 'include/head.php'; ?>
        <script src="js/pratos.js"></script>
    </head>
    <body>
        <?php include_once 'include/header.php' ?>
        <div class="main">
            <form id="frmAltPrato" method="post" action="control/pratoControle.php" enctype="multipart/form-data" class="cad-post" style="overflow: hidden;">
                <fieldset>
                    <h2>Prato</h2>
                    <textarea name="nome" id="nome"></textarea>
                    <span id="spanNome" class="erro"></span>
                </fieldset>
                <fieldset>
                    <h2>Imagem</h2>
                    <input type="file" name="imagem" id="imagem" /><br />
                    <span id="spanImagem" class="erro"></span>
                </fieldset>
                <input type="button" id="btnCadPrato" value="Cadastrar prato"/> <input type="button" onclick="history.back(-1);" class="btn" value="VOLTAR">
            </form>
        </div>
    </body>
</html>