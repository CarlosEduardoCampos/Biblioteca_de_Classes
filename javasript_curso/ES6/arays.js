let frutas = ['melancia', 'acerola', 'laranja', 'amora'];
let numbers = [1, 2, 3, 4, 5];
let listNum = [3, 4, 5 , [6, 7, 8]];

//frutas.forEach(fruta => console.log(fruta));// Mostra valores

//frutas.forEach((fruta, index) => console.log(index,fruta));// Mostra valores e o index

//frutas.forEach((fruta, index, array) => console.log(index, fruta, array));// Mostra valores, index e o array

//Map: Retorna um novo array, de mesmo tamanho, iterando cada item de um array
//frutas.map((fruta, index) => index , fruta);

//Flat: Retorna um novo array com todos os elementos de um sub-array contandos de forma recursiva de acordo com a profundidade especificada
//let teste = listNum.flat(2);
//console.log(listNum);
//console.log(teste);

//Find: Retorn o primeiro item de um array que satifaz a condição
//const firstGreaterThanTwo = numbers.find(value => value > 2);
//console.log(firstGreaterThanTwo);

//FindIndex: Retorna p ídice do primeiro item de um array que satisfaz a condição
//const firstIndexGreaterThanTwo = numbers.findIndex(value => value > 2);
//console.log(firstIndexGreaterThanTwo);

//Filter: Retorna um novo array com todos os elementos que satifazem a condição
//const allValuesGreaterThanTwo = numbers.filter(value => value > 2);
//console.log(allValuesGreaterThanTwo);

//IndexOf: Retorna o primeiro índece em que um elemento pode ser encontrado no array
//const indexOfItem = numbers.indexOf(3);
//console.log(indexOfItem);

//LastIndexOf: Retorna o último índece em que um elemento pode ser encontrado no array
//const lastIndexOfItem = numbers.lastIndexOf(3);
//console.log(lastIndexOfItem);

//Includes: Retorna um booleano verificando se determinado elemento existe no array
//const hasItemOne = numbers.includes(2); // true or false
//console.log(hasItemOne);

//Some: Retorna umm booleano verificando se pelo menos um item de um array satisfaz a condição
//const hasSomeEvenNumber = numbers.some(value => value % 2 === 0); // true or false
//console.log(hasSomeEvenNumber);

//Every: Retorna umm booleano verificando se todos os itens de um array satisfaz a condição
//const hasEveryEvenNumber = numbers.every(value => value % 2 === 0); // true or false
//console.log(hasEveryEvenNumber);

//Sort: Ordena os elementos de uma array de acordo com a condição

//Reverse: Inverte os elementos de um array