/* Formulario_inclusao_noticia */
module.exports = function(app)
{
    app.get('/new_noticia', function(req, res)
    {
        res.render("admin/form_add_noticia");
    });

    app.post('/noticias/salvar', function(req, res)
    {
        let noticia = req.body;
        let connection = app.config.dbConnection();
        let noticiasModel = app.app.models.noticiasModel;
        
        noticiasModel.saveNoticia(noticia, connection, function(error, result)
        {
            res.redirect("/noticias");    
        });  
        //res.render("admin/form_add_noticia");
    });
};
