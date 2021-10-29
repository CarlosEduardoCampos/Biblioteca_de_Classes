$(document).ready(function () {
    var totalPreco = $("#total").val();
    var valorDesconto = parseFloat($(".desconto").val());
    var porcentagemDesconto = parseFloat($("#porcentagem").val());

    $("#porcentagem").val(valorDesconto/totalPreco);
    atualizaValores();


    

});

function atualizaValores(){
    
    var desconto =  $(".desconto").val().toString().replace("R$ ", "");
    if(desconto.toString().length > 6){
        desconto = desconto.replace(".", "");
    }
    
   
    desconto =  desconto.replace(",", ".");

    var subTotal = $("#total").val();
    subTotal = subTotal.replace(",",".");
    desconto = desconto.replace(",", ".");
    subTotal = parseFloat(subTotal);


    total = subTotal - parseFloat(desconto);
    total = total.toFixed(2).toString().replace(".", ",");
    
    $("#valorFinal").html(total);
}



$(".desconto").on("change",function(){
    

    var valDesconto =  $(".desconto").val().toString().replace("R$ ", "");
        valDesconto = valDesconto.replace(".", "");
        valDesconto =  valDesconto.replace(",", ".");

    var desconto = valDesconto/parseFloat($("#total").val())*100;

    if(valDesconto > parseFloat($("#total").val())){
        alert("O valor do desconto não pode ultrapassar o valor da comopra!");
        $("#porcentagem").val(0);
        $(".desconto").val(0);
    }
    else{
        $("#porcentagem").val(desconto.toFixed(2));
        $("#descontoAplicado").html(valDesconto.toString().replace(".", ","));
        atualizaValores();
    }
   
});

$(".desconto").on("keypress",function(e){

    if(e.key=="Enter"){  
        e.preventDefault();
        var valDesconto =  $(".desconto").val().toString().replace("R$ ", "");
        valDesconto = valDesconto.replace(".", "");
        valDesconto =  valDesconto.replace(",", ".");

    var desconto = valDesconto/parseFloat($("#total").val())*100;

    if(valDesconto > parseFloat($("#total").val())){
        alert("O valor do desconto não pode ultrapassar o valor da comopra!");
        $("#porcentagem").val(0);
        $(".desconto").val(0);
    }
    else{
        $("#porcentagem").val(desconto.toFixed(2));
        $("#descontoAplicado").html(valDesconto.toString().replace(".", ","));
        atualizaValores();
    }
    }
  
});


$("#porcentagem").on("change",function(){
    var porcentagem = $("#porcentagem").val();
    porcentagem = porcentagem.toString().replace(",", ".");
    porcentagem = parseFloat(porcentagem);
    var desconto = porcentagem * parseFloat($("#total").val())/100;
  
    if(desconto > parseFloat($("#total").val())){
        alert("O valor do desconto não pode ultrapassar o valor da compra!");
        $("#porcentagem").val(0);
    }
    else{
        $(".desconto").val(desconto.toFixed(2));

        $("#descontoAplicado").html(parseFloat($(".desconto").val()).toFixed(2).toString().replace(".", ","));
        atualizaValores();
    }
});

$("#porcentagem").on("keypress",function(e){

    if(e.key=="Enter"){
        e.preventDefault();
        var porcentagem = $("#porcentagem").val();
        porcentagem = porcentagem.toString().replace(",", ".");
        porcentagem = parseFloat(porcentagem);
        var desconto = porcentagem * parseFloat($("#total").val())/100;
        if(desconto > parseFloat($("#total").val())){
            alert("O valor do desconto não pode ultrapassar o valor da comopra!");
            $("#porcentagem").val(0);
        }
        else{
            $(".desconto").val(desconto.toFixed(2));
    
            $("#descontoAplicado").html(parseFloat($(".desconto").val()).toFixed(2).toString().replace(".", ","));
            atualizaValores();
        }
       
    }
});



// const inputEle = document.getElementById('fecharVenda');
// inputEle.addEventListener('keydown', function(e){
//   if (e.keyCode == 13) { // codigo da tecla enter
//         e.preventDefault();
//   }
// });