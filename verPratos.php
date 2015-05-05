<!DOCTYPE html>
<html lang="pt-BR">
    <head>        
        <title>Baby Beauty</title>
        <?php include_once 'include/head.php'; ?>
        <script src="js/pratos.js"></script>
    </head>
    <body>
        <?php
        include_once 'include/header.php';
        ?>
        <div class="main">
            <div class="post-all" id="posts">
                <a href='cadPrato.php' class='btn'>Cadastrar Prato</a>
                <a href='verMenus.php' class='btn'>Ver Menu</a>
                <div class="ipost">
                    <?php
                    require_once './model/pratoDAO.php';
                    $pratos = $objPratoDao->listaPrato();

                    foreach ($pratos as $prato):
                        ?>
                        <div class = "imagem">
                            <figure><img src = "upload/<?php echo $prato['imagem']; ?>" alt = ""/></figure>
                            <!--<a href = "#" class = "btn">Alterar Imagem</a> -->
                        </div>
                        <div class="cont-post">
                            <a href="altPrato.php?id=<?php echo $prato['idPrato']; ?>">
                                <p>
                                    <?php echo $prato['nome']; ?>
                                </p>
                            </a>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <div id="backtop">
            <span onclick="rolar_para('body')"></span>
        </div>
    </body>
</html>