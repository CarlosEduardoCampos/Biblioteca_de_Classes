module.exports.noticias = function(app, req, res)
{
    let connection = app.config.dbConnection();
    let noticiasDAO = new app.app.models.NoticiasDAO(connection);
    
    noticiasDAO.getNoticias(function(error, result)
    {
        res.render("noticias/noticias",{noticias:result});
    });
}

module.exports.noticia = function(app, req, res)
{
    let connection = app.config.dbConnection();
    let noticiasDAO = new app.app.models.NoticiasDAO(connection);

    noticiasDAO.getNoticia(function(error, result)
    {
        res.render("noticias/noticia",{noticia:result});
    });
}