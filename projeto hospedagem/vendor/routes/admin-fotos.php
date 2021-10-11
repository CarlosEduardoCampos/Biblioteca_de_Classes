<?php 
    //-> Rota de listagem
    $app->get('/admin/fotos', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-fotos", array("fotos"=> Fotos::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-fotos', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-fotos");
        exit;
    });
    //
    $app->post('/admin/cadastrar-fotos', function()
    {
        //User::verifyLoginAdmin();
        $fotos = new Fotos();
        $fotos->Upload($_FILES);
        $fotos->setTxtNomeArquivo($_FILES["txtNomeA"]["name"]);
        $fotos->setDadosForm($_POST);
        $fotos->save();
        header("location: /admin/fotos");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-fotos/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $fotos = new Fotos();
        $fotos->setIdFotos((int)$id);
        $page->setTpl("edit-fotos",array('fotos'=>$fotos->get()));
        exit;
    });
    //
    $app->post('/admin/cadastrar-fotos/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $fotos = new Fotos();
        $fotos->setIdFotos((int)$id);
        $fotos->setDadosForm($_POST);
        $fotos->update();
        header("location: /admin/fotos");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-fotos/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $fotos = new Fotos();
        $fotos->setIdFotos((int)$id);
        $fotos->delete();
        header('location: /admin/fotos');
        exit;
    });
?>