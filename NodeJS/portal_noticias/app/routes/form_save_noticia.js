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
        let NoticiasDAO = new app.app.models.NoticiasDAO(connection);

        NoticiasDAO.saveNoticia(noticia, function(erro, result)
        {
            res.redirect('/noticias');   
        });
    });
}
