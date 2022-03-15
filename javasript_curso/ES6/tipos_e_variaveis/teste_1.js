/**
 * 
 * string  = ""       null           Object
 * number  = 1        undefind       function
 * boolean = false    symbol         Array
 * 
 */

// Variaveis
const user = "Carlos";
let idade = 20;
var data = "19/02/2022";

// String

// Retorna o tamnho de uma string
const textSize = "texto".length;
console.log(`Quantidade de letras: ${textSize}`);

// Retorna um array quebrando a string por um delimitador
const splitedText = "Texto".split('x');
console.log('\nArray com as posições separadas pelo delimitador: ', splitedText);

// Busca por uma valor e subistitui por outro 
const replacedText = 'Texto'.replace('Text', 'txet');
console.log('\nSubstituição de valor: '.replacedText);

// Retorna uma "fatia" de um valor 
const lastChar = "Texto" .split(-1);
console.log('\nÚltima letra de uma string:', lastChar);

const allWithouLastChar = 'Texto'.split(0, -1);
console.log('\nValor da string da primeira letra menos a útima: ',allWithouLastChar);

const secondToEnd = 'Texto'.split(0, -1);
console.log('\nValor da string da segunda letra até a útima: ', secondToEnd);

// Retorna N caracters a partir de uma posição 
const twoCharsBeforeFirstPos = 'Texto'.substr(0, 2);
console.log('\nAs duas letras primeiras letras são: ', twoCharsBeforeFirstPos);

// Number 
const myNamber = 12.4032;

// Transforma número com um número de casas decimais
const fixedTwoDecimals = myNamber.toFixed(2);
console.log('\nNúmero com duas casas decimais: ', fixedTwoDecimals);

// Transforma uma string em float
console.log('\nString parseada para float: ', typeof parseFloat('13.22'));

// Tranforma uma string em int
console.log('\nString parseada para int: ', typeof parseInt('13.20'));

//Null
const nullVariable = null;
console.log(typeof nullVariable);

//Bolean
const isActive = true;
const isAuthenticated = false;

console.log('tipo da variavel: ', typeof isActive);

//Object
let User = {
    name:'Carlos',
    dtNacimento:'11/10/2001'
}
console.log(User);


// Alterando propriedade de um objeto
User.name = 'Outro nome 1';
User['name'] = 'Outronome 2';
console.log(User);


const prop = 'name';
User[prop] = 'Outro nome 3';
console.log(User);


// Criando uma propriedade 
User.lastName = 'Cabrini da Silva';
console.log(User);

// Deletando uma propriedade
delete User.name;

//Recupera as chaves do objeto
console.log('Propriedades do objeto user: ', Object.keys(user));

// Recupera os valores das chaves do objeto
console.log('Valores das propriedades do objeto user: ', Object.values(user));

// Retorna um array de arrays contendo [nome_prop, valor_prop]
console.log("\nLista de propriedades e valores: ", Object.entries(User));

// Mergear propriedades de objetos
Object.assign(User, {fullName:'Carlos da Silva Cabrini'});

console.log('\nAdicionar a propriedade fullName no Object user', User);
console.log('\nRetorna um novo objeto mergeado dois ou mais objetos', Object.assign({}, User, {age:26}));

// Previne todas as Alterações
const newObj = { foo: 'bar'};
Object.freeze(newObj);

newObj.foo = 'changes';
delete newObj.foo;
newObj.bar = 'foo';

console.log('\nVariáveis newObj após as alterações: ', newObj);

//Permite apenas a alteração de propriedades existentes em um ojeto
const person = { name: 'Guilherme'};
Object.seal(person);

person.name = 'Guilherme Cabrini';
delete person.name;
person.age = 26;

console.log('\nVáriavel person após as alterações: ', person);

//Symbol
const symbiol1 = Symbol();
const symbiol2 = Symbol();

// Symbol são únicos
console.log('symbol1 é igual a symbol2: ', symbiol1 === symbiol2);

// Preninir complito entre nomes de propriedades 
const nameSymbol1 = Symbol('name');
const nameSymbol2 = Symbol('name');

const user = { 
    [nameSymbol1]: 'Guilherme',
    [nameSymbol2]: 'Outro nome',
    lastName:'Cabrini da Silva'
}

console.log(user);

// Symbols criam propriedades que não são enumberables 
for (const key in user)
{
    if (user.hawOwnProperty(key))
    {
        console.log("\nValor da chave ${key}: ${user[key]}");
    }
}

console.log('Propriedades do objeto user: ', Object.keys(user));
console.log('Valores das propriedades do objeto user', Object.values(user));

// Exibir symbols de um objeto
console.log('Symbols registrados no objeto user: ',Object.getOwnPropertyDescriptor(user));

//Acessando todas as propriedades do objeto
console.log('Todas propriedades do objeto user:', Reflect.ownKeys(user));

// Criar enum
const directions = {
    UP    : Symbol('UP'),
    DOWN  : Symbol('DOWN'),
    LEFT  : Symbol('LEFT'),
    RIGHT : Symbol('RIGHT')
};
