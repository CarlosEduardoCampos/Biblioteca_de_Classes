<?php 
    //-> Rota de listagem
    $app->get('/admin/localRoteiro', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-localRoteiro", array("localRoteiro"=> LocalRoteiro::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-localRoteiro', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-localRoteiro");
        exit;
    });
    //
    $app->post('/admin/cadastrar-localRoteiro', function()
    {
        //User::verifyLoginAdmin();
        $localRoteiro = new LocalRoteiro();
        $localRoteiro->setDadosForm($_POST);
        $localRoteiro->save();
        header("location: /admin/localRoteiro");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-localRoteiro/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $localRoteiro = new LocalRoteiro();
        $localRoteiro->setIdLocalRoteiro((int)$id);
        $page->setTpl("edit-localRoteiro", array("localRoteiro"=>$localRoteiro->get()));
        exit;
    });
    //
    $app->post('/admin/editar-localRoteiro/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $localRoteiro = new LocalRoteiro();
        $localRoteiro->setIdLocalRoteiro((int)$id);
        $localRoteiro->setDadosForm($_POST);
        $localRoteiro->update();
        header("location: /admin/localRoteiro");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-localRoteiro/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $localRoteiro = new LocalRoteiro();
        $localRoteiro->setIdLocalRoteiro((int)$id);
        $localRoteiro->delete();
        header('location: /admin/localRoteiro');
        exit;
    });
?>