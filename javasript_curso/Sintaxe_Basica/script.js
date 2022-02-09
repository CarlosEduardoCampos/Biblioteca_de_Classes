//Janela de alerta, aparece assim que abre a página
//alert('E isso ai!');


/***
 *  DECLARAÇAO DE VARIÁVEIS
/**
 * var -> Escopo global e local, pode ter seu valor
 * alterado, se não tiver um valor inicial será tratada
 * como null;
 * 
 * let -> Escopo local de bloco, pode ter seu valor
 * alterado, se não tiver um valor inicial será tratada
 * como null;
 * 
 * const -> Escopo local de bloco, somente leitua o valor
 * inicial e obrigatório, e não pode ter ceu valor auterado;
*/
//tipos primitivos

//boolean
var vOuf = false;
console.log(vOuf);//mostra o valor da variavel
console.log(typeof(vOuf));//mostra o tipo da variavel

//number
var num = 1;
console.log(num);//mostra o valor da variavel
console.log(typeof(num));//mostra o tipo da variavel

//string
var text = 'false';
console.log(text);//mostra o valor da variavel
console.log(typeof(text));//mostra o tipo da variavel

//function
var funcao = function(){}
console.log(funcao);//mostra o valor da variavel
console.log(typeof(funcao));//mostra o tipo da variavel

//var
var variavel;
console.log(variavel);//mostra o valor da variavel
console.log(typeof(variavel));//mostra o tipo da variavel

//let
let var2 = 'texto';
var2 = 'texto2';
console.log(var2);//mostra o valor da variavel
console.log(typeof(var2));//mostra o tipo da variavel

//cons
const host = "localhost";
console.log(var2);//mostra o valor da variavel
console.log(typeof(var2));//mostra o tipo da variavel

/**
 * ESCOPO
*/

/**
 * Escopo global -> quando a variável é declarada fora de
 * qualquer bloco, sua visibilidade fica disponivel em
 * todo o código;
 * 
 * Escopo global -> quando a variável é declarada dentro
 * de qualquer bloco, sua visibilidade pode ficar disponível
 * ou não;
 */

var escopoGlobal = 'global';
console.log(escopoGlobal);

function Escopo()
{
    let escopoLocal = 'local';
}
console.log(escopoLocal);

//Atrtibuição
var atribuicao = 'valor';

//Comparação -> retorna valor booleano
var igual = atribuicao == 'valor';

//Comparação idêntica -> alem de verificar o conteudo da variavel tabel confere o tipo
var identico = atribuicao === 'valor';