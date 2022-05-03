module.exports.iniciaChat = function (application, req, res)
{
    // Validação do formulario
    req.assert('apelido', 'Nome ou apelido é obrigatório').notEmpty();
    req.assert('apelido', 'Nome ou apelido deve contem entre 3 e 15 caracteres').len(3,15);
    //
    let erros = req.validationErrors();
    //
    if(erros)
    {
        res.render("index", {validacao:erros});
    }
    else{
        let dataForm = req.body;
        //
        application.get('io').emit(
            'msgParaCliente',
            {  
                apelido:dataForm.apelido, 
                mensagem:'Acabou de entrar no chat.'
            }
        );
        res.render("chat",{dataForm : dataForm});
    }
}