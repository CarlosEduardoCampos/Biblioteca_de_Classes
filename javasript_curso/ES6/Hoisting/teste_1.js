function fn() 
{
    //variavel exista mais não fui atribuido valor
    console.log(text);// undefind

    var text = 'Exemplo';
    console.log(text);// Exemplo
}

fn();

//Exemplo da leitura do programa
/**
    function fn() 
    {
        var text;
        console.log(text);    

        text = 'Exemplo';
        console.log(text);
    }
 */