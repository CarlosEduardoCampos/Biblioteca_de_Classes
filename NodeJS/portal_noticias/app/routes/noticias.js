let dbConnection = require('../../config/dbConnection');

module.exports = function(app)
{   
    app.get('/noticias', function (req, res)
    {  
        let connection = app.config.dbConnection();
        let noticiasModel = app.app.models.noticiasModel;

        noticiasModel.getNoticias(connection,function(error, result)
        {
            res.render("noticias/noticias",{noticias:result});
        });
        
    });

    app.get('/noticia', function (req, res)
    {
        let connection = app.config.dbConnection();
        
        let noticiasModel = app.app.models.noticiasModel;

        noticiasModel.getNoticia(connection,function(error, result)
        {
            res.render("noticias/noticia",{noticia:result});
        });
    });
}
