const express = require('express');
const bodyParse = require('body-parser');
//
const userRoute = require('./routes/userRoute');
//
const app = express();
//
app.use(bodyParse.urlencoded({extended: false}));
//
const port = 3000;
//
userRoute(app);
//
app.get('/',(req, res) => res.send('Olá mundo pelo Express'));


app.listen(port, () => console.log('API rodando na porta 3000'));
