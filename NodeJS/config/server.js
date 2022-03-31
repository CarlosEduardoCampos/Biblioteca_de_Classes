let express = require('express');
let consing = require('consign');

let app = express();

app.set('view engine', 'ejs');
app.set('views','./app/views')

consing()
    .include('app/routes')
    .then('config/dbConnection.js')
    .then('app/models')
.into(app);

module.exports = app;