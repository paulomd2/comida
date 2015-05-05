$(document).ready(function(){
    $("#btnCadPrato").click(function(){
        var nome = $("#nome").val().trim();
        
        $(".erro").html('');
        if(nome == ''){
            nome.focus();
            $("#spanNome").html('Você deve preencher o nome!');
        }else{
            $("#frmCadPrato").submit();
        }
    });
    
    $("#btnAltPrato").click(function(){
        var nome = $("#nome").val().trim();
        var idPrato = $("#idPrato").val();
        
        $(".erro").html('');
        if(nome == ''){
            nome.focus();
            $("#spanNome").html('Você deve preencher o nome!');
        }else{
            $("#frmAltPrato").submit();
        }
    });
});