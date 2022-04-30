/* Impportar as configurações do servidor */
var app = require('./config/server');

/* Parametrizar a porta de escuta */
let server = app.listen(80, () =>
{
    console.log('Servidor online')
});

require('socket.io').listen(server);
