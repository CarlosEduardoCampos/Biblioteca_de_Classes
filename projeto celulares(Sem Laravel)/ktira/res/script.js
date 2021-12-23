$(document).ready(function () {


    atualiza();









});



function atualiza(){
    var select = $("#cbEscola").val();


    var emet = document.querySelectorAll('.emet');
    var cmei = document.querySelectorAll('.cmei');
    var emmao = document.querySelectorAll('.emmao');
    var emjbt = document.querySelectorAll('.emjbt');
    var emnsps = document.querySelectorAll('.emnsps');
    var empns = document.querySelectorAll('.empns');
    var cmfmj = document.querySelectorAll('.cmfmj');
    var cmjho = document.querySelectorAll('.cmjho');
    var eeclb = document.querySelectorAll('.eeclb');
    var eemao = document.querySelectorAll('.eemao');
    var apae = document.querySelectorAll('.apae');




    function habilitaEmet(){
        for(var i=0; i<emet.length; i++){
            emet[i].classList.add('mostrar');
        }
    }
    
    function habilitaCmei(){
        for(var i=0; i<cmei.length; i++){
            cmei[i].classList.add('mostrar');
        }
    }

    function habilitaEmmao(){
        for(var i=0; i<emmao.length; i++){
            emmao[i].classList.add('mostrar');
        }
    }
    
    function habilitaEmjbt(){
        for(var i=0; i<emjbt.length; i++){
            emjbt[i].classList.add('mostrar');
        }
    }

    function habilitaEmnsps(){
        for(var i=0; i<emnsps.length; i++){
            emnsps[i].classList.add('mostrar');
        }
    }

    function habilitaEmpns(){
        for(var i=0; i<empns.length; i++){
            empns[i].classList.add('mostrar');
        }
    }

    function habilitaCmfmj(){
        for(var i=0; i<cmfmj.length; i++){
            cmfmj[i].classList.add('mostrar');
        }
    }

    function habilitaCmjho(){
        for(var i=0; i<cmjho.length; i++){
            cmjho[i].classList.add('mostrar');
        }
    }
    
    function habilitaEeclb(){
        for(var i=0; i<eeclb.length; i++){
            eeclb[i].classList.add('mostrar');
        }
    }
    
    function habilitaEemao(){
        for(var i=0; i<eemao.length; i++){
            eemao[i].classList.add('mostrar');
        }
    }

    function habilitaApae(){
        for(var i=0; i<apae.length; i++){
            apae[i].classList.add('mostrar');
        }
    }




    function desabilitaEmet(){
        for(var i=0; i<emet.length; i++){
            emet[i].classList.remove('mostrar');
        }
    }
    
    function desabilitaCmei(){
        for(var i=0; i<cmei.length; i++){
            cmei[i].classList.remove('mostrar');
        }
    }

    function desabilitaEmmao(){
        for(var i=0; i<eemao.length; i++){
            emmao[i].classList.remove('mostrar');
        }
    }
    
    function desabilitaEmjbt(){
        for(var i=0; i<emjbt.length; i++){
            emjbt[i].classList.remove('mostrar');
        }
    }

    function desabilitaEmnsps(){
        for(var i=0; i<emnsps.length; i++){
            emnsps[i].classList.remove('mostrar');
        }
    }

    function desabilitaEmpns(){
        for(var i=0; i<empns.length; i++){
            empns[i].classList.remove('mostrar');
        }
    }

    function desabilitaCmfmj(){
        for(var i=0; i<cmfmj.length; i++){
            cmfmj[i].classList.remove('mostrar');
        }
    }

    function desabilitaCmjho(){
        for(var i=0; i<cmjho.length; i++){
            cmjho[i].classList.remove('mostrar');
        }
    }
    
    function desabilitaEeclb(){
        for(var i=0; i<eeclb.length; i++){
            eeclb[i].classList.remove('mostrar');
        }
    }
    
    function desabilitaEemao(){
        for(var i=0; i<eemao.length; i++){
            eemao[i].classList.remove('mostrar');
        }
    }

    function desabilitaApae(){
        for(var i=0; i<apae.length; i++){
            apae[i].classList.remove('mostrar');
        }
    }
    
    desabilitaEmet();
    desabilitaEmjbt();
    desabilitaApae();
    desabilitaCmei();
    desabilitaCmfmj();
    desabilitaEmpns();
    desabilitaEmnsps();
    desabilitaEmmao();
    desabilitaEemao();
    desabilitaEeclb();
    desabilitaCmjho();
    



 


    switch (select){
        case 'Escola Municipal Elias Teodoro':
            habilitaEmet();
            break;
        case 'CMEI Irmã Irene':
            habilitaCmei();
            break;
        case 'Escola Municipal Antônio Modesto de Oliveira':
            habilitaEmmao();
            break;
        case 'Escola Municipal João Batista Trindade':
            habilitaEmjbt();
            break;
        case 'Escola Municipal Nossa Senhora do Perpétuo Socorro':
            habilitaEmnsps();
            break;
        case 'Escola Municipal Professor Nogueira de Sá':
            habilitaEmpns();
            break;
        case 'Creche Municipal Professora Maria Catarina de Araújo':
            habilitaCmpmca();
            break;
        case 'Creche Municipal Florentina Maria de Jesus':
            habilitaCmfmj();
            break;
        case 'Centro de Convivência José Hilário de Oliveira':
            habilitaCmjho();
            break;
        case 'Escola Estadual Coronel Lourenço Belo':
            habilitaEeclb();
            break;
        case 'Escola Estadual Modesto Antônio de Oliveira':
            habilitaEemao();
            break;
        case 'APAE - Escola Neli Arantes dos Santos':
            habilitaApae();
            break;
    }

}

function liberaEdicao(){
    $(".txtAluno").prop('disabled', false);
    $(".txtIdade").prop('disabled', false);
    $(".txtNascimento").prop('disabled', false);
    $(".txtTelefone").prop('disabled', false);
    $(".txtMae").prop('disabled', false);
    $(".cbEscola").prop('disabled', false);
    $(".cbTurma").prop('disabled', false);
    $(".txtProfessor").prop('disabled', false);
    $(".dataInicio").prop('disabled', false);
    $("#contato").prop('disabled', false);
    $("#confirmado").prop('disabled', false);
    $("#suspeito").prop('disabled', false);

    var input = document.querySelector('.esconder');
    var editar = document.querySelector('.editar');

    input.classList.remove('esconder');
    editar.classList.add('esconder');

}

function atualizaDatas(){
    var data = new Date($("#inicioMonitoramento").val());

    function adicionaZero(numero){
        
        if (numero <= 9) 
            return "0" + numero;
        else
            return numero; 
    }


    if($("#contato").prop("checked") == true){
        data.setDate(data.getDate() + 15);
        data.setMonth(data.getMonth()+1);
        $("#fimMonitoramento").val((data.getFullYear() + "-" + adicionaZero(data.getMonth().toString()) +
        "-" + adicionaZero(data.getDate().toString())));
    }else{
        if($("#confirmado").prop("checked") == true){
            data.setDate(data.getDate() + 11);
            data.setMonth(data.getMonth()+1);
            $("#fimMonitoramento").val((data.getFullYear() + "-" + adicionaZero(data.getMonth().toString()) +
            "-" + adicionaZero(data.getDate().toString())));
        }
        else{
            if($("#suspeito").prop("checked") == true){
                data.setDate(data.getDate() + 11);
                data.setMonth(data.getMonth()+1);
                $("#fimMonitoramento").val((data.getFullYear() + "-" + adicionaZero(data.getMonth().toString()) +
                "-" + adicionaZero(data.getDate().toString())));   
            }
        }
    }

 
}

function verificaStatus(){
    
    if($("#contato").prop("checked") == true || $("#confirmado").prop("checked") == true || $("#suspeito").prop("checked") == true){
     
    }
    else{
        alert("Selecione se o aluno é CONTATO | POSITIVO | SUSPEITO");
        $("#contato").focus();
    }
}

function verificaIdade(){
    var dataNascimento = new Date($("#dataNascimento").val());
    var dataAtual = new Date();
    var idade;
    idade = dataAtual.getFullYear() - dataNascimento.getFullYear();
    if(dataAtual.getMonth()<dataNascimento.getMonth()){
        idade--;    
    }else{
        if(dataAtual.getMonth() == dataNascimento.getMonth()){
            if(dataAtual.getDate()<dataNascimento.getDate()){
                idade--;
            }
        }
    }
  
    $("#idade").val(idade);

}

$("#contato").change(function(){
    if($("#contato").prop("checked") == true){
        var data = new Date($("#inicioMonitoramento").val());

        function adicionaZero(numero){
            if (numero <= 9) 
                return "0" + numero;
            else
                return numero; 
        }
        data.setMonth(data.getMonth()+1);
        data.setDate(data.getDate() + 15);
        $("#fimMonitoramento").val((data.getFullYear() + "-" + adicionaZero(data.getMonth().toString()) +
        "-" + adicionaZero(data.getDate().toString())));
    }
});

$("#suspeito").change(function(){
    if($("#suspeito").prop("checked") == true){
        var data = new Date($("#inicioMonitoramento").val());

        function adicionaZero(numero){
            if (numero <= 9) 
                return "0" + numero;
            else
                return numero; 
        }
        data.setMonth(data.getMonth()+1);
        data.setDate(data.getDate() + 11);
        $("#fimMonitoramento").val((data.getFullYear() + "-" + adicionaZero(data.getMonth().toString()) +
        "-" + adicionaZero(data.getDate().toString())));
    }
});

$("#confirmado").change(function(){
    if($("#confirmado").prop("checked") == true){
        var data = new Date($("#inicioMonitoramento").val());

        function adicionaZero(numero){
            if (numero <= 9) 
                return "0" + numero;
            else
                return numero; 
        }
        data.setMonth(data.getMonth()+1);
        data.setDate(data.getDate() + 11);
        $("#fimMonitoramento").val((data.getFullYear() + "-" + adicionaZero(data.getMonth().toString()) +
        "-" + adicionaZero(data.getDate().toString())));
    }
});