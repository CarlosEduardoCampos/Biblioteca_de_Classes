module.exports.formulario_inclusao_noticia = function(app, req, res)
{
    res.render("admin/form_add_noticia",{validacao:''});
}

module.exports.noticia_salvar = function(app, req, res)
{
    let noticia = req.body;

        req.assert('titulo', ' Título é obrigatório ').notEmpty();
        req.assert('resumo',' Resumo é obrigatório ').notEmpty();
        req.assert('resumo',' Resumo é deve conter entre 10 e 100 caracteres ').len(10, 100);
        req.assert('autor',' Autor é obrigatório ').notEmpty();

        let erros = req.validationErrors();

        if (erros)
        {
            res.render("admin/form_add_noticia", {validacao: erros});
            return;    
        }

        let connection = app.config.dbConnection();
        let NoticiasDAO = new app.app.models.NoticiasDAO(connection);

        NoticiasDAO.saveNoticia(noticia, function(erro, result)
        {
            res.redirect('/noticias');   
        });
}