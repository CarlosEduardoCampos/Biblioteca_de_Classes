// Objetos
const User = {
    name: 'Guilherme',
    lastName: 'Cabrine da Silva' 
};

function getUserWithFullName(user)
{
    return {
        ...user,
        fullName: '${user.name} ${user.lastName}'
    }
}

const userWithFullName = getUserWithFullName(User);

console.log(userWithFullName);