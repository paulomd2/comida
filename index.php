<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Agencia MD2</title>
        <link rel="stylesheet" type="text/css" href="css/home.css" />
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/usuarios.js"></script>
    </head>
    <body>
        <div class="login">
            <figure class="avatar">
                <img src="http://agenciamd2.com.br/img/logomd2.png" alt="Nome avatar" />
            </figure>
            <form class="form-home" id="frmLogin">
                <fieldset>
                    <input type="text" name="usuario" id="usuario" class="login"/><br />
                </fieldset>
                <fieldset>
                    <input type="password" name="senha" id="senha" class="senha" /><br />
                </fieldset>
                <label class="recSenha">
                    <a href="novaSenha.php">Esqueci minha senha</a>         
                </label>
                <input type="button" value="LOGAR" id="btnLogar"/>
                <span id="spanUsuario" class="erro" style="margin-top: 10px"></span>
            </form>
        </div>        
    </body>
</html>
