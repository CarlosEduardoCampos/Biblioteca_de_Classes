let dbConnection = require('../../config/dbConnection');

module.exports = function(app)
{   
    // Lista com todas as noticias
    app.get('/noticias', function (req, res)
    {  
        app.app.controllers.noticias.noticias(app, req, res);
    });

    // Rota para visualiza uma noticia
    app.get('/noticia/:id?', (req, res) =>
        {
            app.app.controllers.noticias.noticia(app, req, res);
        }
    );
}
