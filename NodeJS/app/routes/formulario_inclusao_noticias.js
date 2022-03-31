/* Formulario_inclusao_noticia */
module.exports = function(app)
{
    app.get('formulario_inclusao_noticia', function(req, res)
    {
        res.reder("admin/form_add_noticia");
    });
};
