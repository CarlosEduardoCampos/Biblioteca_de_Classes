/* noticias.js */

let http = require('http');// incorporando biblioteca HTTP

/* Criando um Servidor */

let server = http.createServer((req, res) =>
{
	let categoria = req.url;

	/* Tratando requisições HTTP */

	if(categoria == '/tecnologia')
	{
		res.end("<html> <body> <h1> Tecnologia </h1> </body> </html>");
	}
	else if(categoria == '/moda')
	{
		res.end("<html> <body> <h1> Moda </h1> </body> </html>");
	}
	else if(categoria == '/beleza')
	{
		res.end("<html> <body> <h1> Beleza </h1> </body> </html>");
	}
	else{
		res.end("<html> <body> <h1> Index </h1> </body> </html>");
	}
});

server.listen(3000);
