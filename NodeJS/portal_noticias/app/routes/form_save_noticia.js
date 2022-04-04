module.exports = function(app)
{
    app.get('/nova_noticia', function (req, res)
    {
        res.render("admin/form_add_noticia");
    });
}
