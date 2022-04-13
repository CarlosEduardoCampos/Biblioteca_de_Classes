module.exports = function(app)
{
    app.get('/nova_noticia', function (req, res)
    {
        res.render("admin/form_add_noticia");
    });

    app.post('/noticia_salvar', function (req, res)
    {
        let noticia = req.body;
        let connection = app.config.dbConnection();
        let noticiasModel = app.app.models.noticiasModel;

        noticiasModel.saveNoticia(noticia, connection, function(erro, result)
        {
            res.redirect('/noticias');   
        });
    });
}
