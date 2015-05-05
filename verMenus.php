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
                <a href='cadMenu.php' class='btn'>Cadastrar Menu</a>
                <a href='verPratos.php' class='btn'>Ver Pratos</a>
                <div class="ipost">
                    <?php
                    require_once './model/MenuDAO.php';
                    $menus = $objMenuDao->listaMenu();

                    foreach ($menus as $menu):
                        ?>
                        <div class = "imagem">
                            <figure><img src = "upload/<?php echo $menu['imagem']; ?>" alt = ""/></figure>
                            <!--<a href = "#" class = "btn">Alterar Imagem</a> -->
                        </div>
                        <div class="cont-post">
                            <a href="altPrato.php?id=<?php echo $menu['idPrato']; ?>">
                                <p>
                                    <?php echo $menu['nome']; ?>
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