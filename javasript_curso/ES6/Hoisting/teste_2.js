function fn()
{
    log('hoisting de função');

    function log(value)
    {
        console.log(value);
    }
}

fn();

//Exemplo da leitura do programa
/**
    function fn()
    {
        function log(value)
        {
            console.log(value);
        }

        log('hoisting de função');
    }
 */