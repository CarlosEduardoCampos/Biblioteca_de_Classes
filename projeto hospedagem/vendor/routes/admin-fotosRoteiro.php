<?php 
    //-> Rota de listagem
    $app->get('/admin/fotosRoteiro', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-fotosRoteiro", array("fotosRoteiro"=> FotosRoteiro::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-fotosRoteiro', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-fotosRoteiro");
        exit;
    });
    //
    $app->post('/admin/cadastrar-fotosRoteiro', function()
    {
        //User::verifyLoginAdmin();
        $fotosRoteiro = new FotosRoteiro();
        $fotosRoteiro->Upload($_FILES);
        $fotosRoteiro->setTxtNomeArquivo($_FILES["txtNome"]["name"]);
        $fotosRoteiro->setDadosForm($_POST);
        $fotosRoteiro->save();
        header("location: /admin/fotosRoteiro");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-fotosRoteiro/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $fotosRoteiro = new FotosRoteiro();
        $fotosRoteiro->setIdFotoRoteiro((int)$id);
        $page->setTpl("edit-fotosRoteiro",array('fotosRoteiro'=>$fotosRoteiro->get()));
        exit;
    });
    //
    $app->post('/admin/cadastrar-fotosRoteiro/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $fotosRoteiro = new FotosRoteiro();
        $fotosRoteiro->setIdFotoRoteiro((int)$id);
        $fotosRoteiro->setDadosForm($_POST);
        $fotosRoteiro->update();
        header("location: /admin/fotosRoteiro");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-fotosRoteiro/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $fotosRoteiro = new FotosRoteiro();
        $fotosRoteiro->setIdFotoRoteiro((int)$id);
        $fotosRoteiro->delete();
        header('location: /admin/fotosRoteiro');
        exit;
    });
?>