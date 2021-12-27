<?php 
    //-> Rota de listagem
    $app->get('/admin/smartphones', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-smartphones", array("smartphones"=> Smartphones::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-smartphones', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-smartphones");
        exit;
    });
    //
    $app->post('/admin/cadastrar-smartphones', function($id=0)
    {
        //User::verifyLoginAdmin();
        $Smartphones = new Smartphones();
        $Smartphones->setIdCelular((int)$id);
        $Smartphones->setDadosForm($_POST);
        $Smartphones->save();
        header("location: /admin/smartphones");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-smartphones/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $Smartphones = new Smartphones();
        $Smartphones->setIdCelular((int)$id);
        $page->setTpl("edit-smartphones", array("smartphones"=>$Smartphones->get()));
        exit;
    });
    //
    $app->post('/admin/editar-smartphones/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $Smartphones = new Smartphones();
        $Smartphones->setIdCelular((int)$id);
        $Smartphones->setDadosForm($_POST);
        $Smartphones->save();
        header("location: /admin/smartphones");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-smartphones/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $Smartphones = new Smartphones();
        $Smartphones->setIdCelular((int)$id);
        $Smartphones->delete();
        header('location: /admin/smartphones');
        exit;
    });
?>