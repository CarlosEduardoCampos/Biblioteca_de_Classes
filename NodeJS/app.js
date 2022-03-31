/* app.js */
let app = require('./config/server');

/* Codigo implementado sem utiliza o consing
*	require('./app/routes/home')(app);
*	require('./app/routes/noticias')(app);
*	require('./app/routes/formulario_inclusao_noticias')(app);
*/

app.listen(3000,() =>
{
	console.log("Server rodando com Express \n");
});

