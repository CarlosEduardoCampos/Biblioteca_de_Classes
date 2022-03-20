/* app.js */

let express = require('express');

let app = express();

app.set('view engine','ejs');

app.get('/tecnologia', (req, res) =>
{
	// res.send("<html> <body> Noticias sobre tecnologia </body> </html>");
	res.render("secao/tecnologia");
});

app.get('/', (req, res) =>
{
	//res.send("<html> <body> Portal de noticias </body> </html>");
	res.render("home_page");
});


app.listen(3000,() =>
{
	console.log("Server rodando com Express \n");

	let cont = 0;
	let loop = setInterval(() =>
	{
		cont++;

		setTimeout(() =>
		{
			console.log(".");
		},30);

		if(cont >= 3)
		{
			clearInterval(loop);
		}

	},1500);
	
});

