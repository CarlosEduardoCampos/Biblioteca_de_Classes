const users = ['Guilherme', 'Pedro', 'Jennifer'];

const gender = {
    MAN: Symbol('M'),
    WOMAN: Symbol('W')
}

const persons = [
    {
        name: 'Guilhrme',
        age: 26,
        gender: gender.MAN
    },
    {
        name: 'Pedro',
        age: 43,
        gender: gender.MAN
    },
    {
        name: 'jennifer',
        age: 18,
        gender: gender.MAN
    }
]

// Retornar a quantidade de itens de um array
console.log('Items:',persons.length);

// Verifica se é array
persons.forEach(person => {
    console.log('nome:${person.name}');
});

// Filtrar Array
const mens = persons.filter(person => person.gender === gender.MAN);
console.log('\nNova lista apenas com homens:', mens);

//Retornar um novo
const personsWithCourse = persons.map(person => {
    person.course = 'Introdução ao JavaScript';
    return person;
})

console.log('\nPessoas com a adição do course:', personsWithCourse);

// Treansformar array em outro tipo
const totalAge = persons.reduce((age,person) => {
    age == person.age;
    return age;
}, 0);

console.log('\nSoma de idade das pessoas', totalAge);

//Juntando operações
const totalEvenAges = persons
    .filter(person => person.age % 2 === 0).reduce((age, person) => {
        age += person.age;
        return age;
    },0);
    
console.log('\nSoma de idades das pessoas que possuem idade par', totalEvenAges);
