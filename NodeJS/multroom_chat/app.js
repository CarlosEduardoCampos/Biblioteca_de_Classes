/* Impportar as configurações do servidor */
var app = require('./config/server');

/* Parametrizar a porta de escuta */
let server = app.listen(80, () =>
{
    console.log('Servidor online')
});

let io = require('socket.io').listen(server);

app.set('io', io);//Variavel Global

/* Criar a conecxão por websocket */
io.on('connection', (socket)=>
{
    console.log('Usuário conectou');

    socket.on('disconnect', ()=>
    {
        console.log('Usuário desconectou');
    });

    socket.on('msgParaServidor', (data)=>
    {
        /* Dialogo */
        //Envia mensagem para quem escreve
        socket.emit('msgParaCliente', {apelido: data.apelido, mensagem: data.mensagem});

        //Envia mensagem para os outros usuarios
        socket.broadcast.emit('msgParaCliente', {apelido: data.apelido, mensagem: data.mensagem});

        /* Participantes */
        if (parseInt(data.apelido_atualizado_nos_clientes) === 0)
        {
            //Envia mensagem para quem escreve
            socket.emit('participantesParaCliente', {apelido: data.apelido, mensagem: data.mensagem});

            //Envia mensagem para os outros usuarios
            socket.broadcast.emit('participantesParaCliente', {apelido: data.apelido, mensagem: data.mensagem});
        }
    });
});
