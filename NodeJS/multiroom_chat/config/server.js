/** Importar o modulo do framework  **/
let express = require('express');

/** Importar p módulo do consign **/
let consign = require('consign');

/** Importar módulo do body-parser **/
let bodyParser = require('body-parser');

/** Impotar o módulo do express-validator **/
let expressValidator = require('express-validator');

/** iniciar o objeto express **/
let app = express();

/** Setar as variáveis 'View engine' e 'views' **/
app.set('view engine', 'ejs');
app.set('views', './app/views');

/** Configurar o middleware express.static **/
app.use(express.static('./app/public'));

/** Configurar o middleware express-validator **/
app.use(expressValidator());

/** Configurar o middleware body-parser **/
app.use(bodyParser.urlencoded({extend:true}));

/** Efetua o autolad das rotas, dos modelos e dos contorllers para o objeto app **/
consign()
    .include('app/routes')
    .then('app/models')
    .then('app/controllers')
    .into(app);


/** Exportar o objeto app **/
module.exports = app;