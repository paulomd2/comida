function logar(){
    var usuario = $("#usuario").val().trim();
    var senha = $("#senha").val().trim();
    
    if (usuario == '') {
        $("#usuario").focus();
        $("#spanUsuario").html('Você deve preencher um usuário').css('display', 'inline-block');
    } else if (senha == '') {
        $("#senha").focus();
        $("#spanUsuario").html('Você deve preencher uma senha').css('display', 'inline-block');
    } else {
        $.post('control/usuariosControle.php', {opcao: 'verificaLogin', usuario: usuario, senha: senha},
        function (r) {
            if (r == 0) {
                $("#usuario").focus();
                $("#senha").val('');
                $("#spanUsuario").html('Usuário ou senha incorretos, tente novamente!').css('display', 'inline-block');
            } else {
                var array = JSON.parse(decodeURIComponent(r));

                localStorage.id = array["idUsuario"];
                localStorage.nivel = array["nivel"];

                window.location = './principal';
            }
        })
    }
}

$(document).ready(function(){
    $("#btnLogar").click(function () {
        logar();
    });
    $('#frmLogin').keypress(function (e) {
        /* * verifica se o evento é Keycode (para IE e outros browsers) * se não for pega o evento Which (Firefox) */
        var tecla = (e.keyCode ? e.keyCode : e.which);
        /* verifica se a tecla pressionada foi o ENTER */
        if (tecla == 13) {
            logar();
        }
    });
});