let express = require('express');
let consign = require('consign');

let app = express();

app.set('view engine','ejs');
app.set('views','./app/views');

consign()
    .include('app/routes')//diretorio de rotas
    .then('config/dbConnection.js')//configuração do banco de dados
    .then('app/models')
.into(app);

module.exports = app;