module.exports = function(app)
{
    app.get('/nova_noticia', function (req, res)
    {
        app.app.controllers.admin.formulario_inclusao_noticia(app, req, res);
    });

    app.post('/noticia_salvar', function (req, res)
    {
        app.app.controllers.admin.noticia_salvar(app, req, res);
    });
}
