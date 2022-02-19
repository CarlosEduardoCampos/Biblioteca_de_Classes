function fn()
{
    return 'Code here';
}

const arrowFn  = () => 'Code here';
const arrowFn2 = () => {
    // Mais de uma expressão
    return 'Code here';
}

//Funções tabém são objetos
fn.prop = 'Posso criar propriedades';

console.log(fn());
console.log(fn.prop);

// Receber parâmetros
const logValue = value => console.log(value);
const logFnResult = fnParam => console.log(fnParam());

logFnResult(fn);

// Receber e retornar funções 
/*const controlFnExec => fnParam => allowed => {
    if (allowed)
    {
        fnParam();
    }
} */

handleFnexetion = controlFnExec(fn);

handleFnexetion(true); // Executará a função fn
handleFnexetion();     // Não execurá a função fn

//controlFnExec como função 
function controlFnExec(fnParam)
{
    return function (allowed)
    {
        if(allowed)
        {
            fnParam();
        }
    }
}


