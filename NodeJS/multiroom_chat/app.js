/** Importar as configurações do servidor **/
let app = require('./config/server');

/** Parametirzar a porta de escuta **/
app.listen(80, function()
{
    console.log('Servidor online');
});

/**  **/