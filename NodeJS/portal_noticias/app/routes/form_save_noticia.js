module.exports = function(app)
{
    app.get('/nova_noticia', function (req, res)
    {
        res.render("admin/form_add_noticia");
    });

    app.post('/noticia_salvar', function (req, res)
    {
        let noticia = req.body;
        res.send(noticia);
        //res.render("admin/form_add_noticia");
    });
}
