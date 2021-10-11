<?php 
    //-> Rota de listagem
    $app->get('/admin/roteiro', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-roteiro", array("roteiro"=> Roteiro::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-roteiro', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-roteiro");
        exit;
    });
    //
    $app->post('/admin/cadastrar-roteiro', function()
    {
        //User::verifyLoginAdmin();
        $roteiro = new Roteiro();
        $roteiro->setDadosForm($_POST);
        $roteiro->save();
        header("location: /admin/roteiro");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-roteiro/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $roteiro = new Roteiro();
        $roteiro->setIdRoteiro((int)$id);
        $page->setTpl("edit-roteiro", array("roteiro"=>$roteiro->get()));
        exit;
    });
    //
    $app->post('/admin/editar-roteiro/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $roteiro = new Roteiro();
        $roteiro->setIdRoteiro((int)$id);
        $roteiro->setDadosForm($_POST);
        $roteiro->update();
        header("location: /admin/roteiro");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-roteiro/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $roteiro = new Roteiro();
        $roteiro->setIdRoteiro((int)$id);
        $roteiro->delete();
        header('location: /admin/roteiro');
        exit;
    });
?>