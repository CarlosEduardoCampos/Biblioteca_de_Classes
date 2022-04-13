let dbConnection = require('../../config/dbConnection');

module.exports = function(app)
{   
    app.get('/noticias', function (req, res)
    {  
        let connection = app.config.dbConnection();
        let noticiasDAO = new app.app.models.NoticiasDAO(connection);
        

        noticiasDAO.getNoticias(function(error, result)
        {
            res.render("noticias/noticias",{noticias:result});
        });
        
    });

    app.get('/noticia', function (req, res)
    {
        let connection = app.config.dbConnection();
        let noticiasDAO = new app.app.models.NoticiasDAO(connection);

        noticiasDAO.getNoticia(function(error, result)
        {
            res.render("noticias/noticia",{noticia:result});
        });
    });
}
