let express = require('express');
let consing = require('consign');
let bodyParser = require('body-parser');

let app = express();

app.set('view engine', 'ejs');
app.set('views','./app/views')

app.use(bodyParser.urlencoded({extended:true}));

consing()
    .include('app/routes')
    .then('config/dbConnection.js')
    .then('app/models')
.into(app);

module.exports = app;