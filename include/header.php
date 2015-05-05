<?php
@session_start();

if ($_SESSION["idUsuario"] == '') {
    header("Location: index.php");
}
    
require_once 'model/usuariosDAO.php';
$retorno = $objUsuarioDao->listaUsuario($_SESSION['idUsuario']);
?>
<div class="bgheader">
    <header>
        <div class="logo">
            <a href="principal.php"><img src="img/logo.png" alt=""/></a>
        </div>
        <div class="barra-topo">
            <div class="hi-user">
                <span>Bem vindo (a) <strong><?php echo $retorno['nome'] ?></strong></span>
            </div>
            <div class="sair">
                <a href="sair.php" class="cor-principal"><i class="icon icon-exit"></i> <span>Sair</span></a>
            </div>
        </div>
    </header>
</div>