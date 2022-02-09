//Vetores ou arrays
//como declarar um array

let array = ['string', 1, 'true'];

/**
 * forEach()  executa uma fução por indice no array
 * push()     add um item no final da array
 * pop()      remove item no final do array
 * shift()    remove item no inicio do array
 * unshift()  add item no inicio do array
 * indeceof() retorn o índice de um valor
 * splice()   remove ou substitui um item pelo índice
 * slice()    retorna uma parte de um array existente
 */

array.forEach(function(item,index){console.log(item,index)});

array.push(1);

array.pop();

array.shift();

array.unshift();

array.indexOf();

array.splice();

array.slice();
