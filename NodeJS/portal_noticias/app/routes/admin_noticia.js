module.exports = function(app)
{
    // Rota para lista de noticias
    app.get('/admin/noticias', function (req, res)
    {  
        app.app.controllers.admin_noticias.noticias(app, req, res);
    });
    // Rota para salvar de noticia
    app.route('/nova_noticia')
        .get(function (req, res)
        {
            app.app.controllers.admin_noticias.formulario_inclusao_noticia(app, req, res);
        })
        .post( function (req, res)
        {
            app.app.controllers.admin_noticias.noticia_salvar(app, req, res);
        })
    ;
    // Rota para editar de noticia
    app.route('/noticia/editar/:id?')
        .get(function (req, res)
        {
            app.app.controllers.admin_noticias.formulario_edicao_noticia(app, req, res);
        })
        .post( function (req, res)
        {
            app.app.controllers.admin_noticias.editar_noticia(app, req, res);
        })
    ;
    app.post('/noticia/deletar/:id?',(req, res) =>
        {
            app.app.controllers.admin_noticias.delNoticia(app, req, res);
        })
    ;
    /*app.get('/noticia', function (req, res)
    {
        app.app.controllers.noticias.noticia(app, req, res);
    });*/
}


