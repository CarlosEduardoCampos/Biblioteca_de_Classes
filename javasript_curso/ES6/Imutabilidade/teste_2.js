const students = [
    {
        name: 'Grace',
        grade: 7
    },

    {
        name: 'Jennifer',
        grade: 4
    },

    {
        name: 'Paul',
        grade: 10
    }
]

// Retorna alunos aprovados
function getApprovedStudents(studentsList)
{
    return studentsList.filter(student => student.grade >= 7);
}

console.log(' Alunos aprovados: ');
console.log(getApprovedStudents(students));

console.log('\n Lista de alunos: ');
console.log(students);