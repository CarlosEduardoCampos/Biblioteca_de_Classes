/*noticias.js*/

module.exports = function(app)
{
    app.get('/noticias', function(req, res)
    {
        let connection = app.config.dbConnection();
        let noticiasModel = app.app.models.noticiasModel;
        
        noticiasModel.getNoticias(connection, function(error, result)
        {
            res.render("noticias/noticias",{noticias:result});    
        });
    });
};