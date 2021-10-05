<?php 
    //-> Rota de listagem
    $app->get('/admin/quartos', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-quartos", array("quartos"=> Quartos::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-quartos', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-quartos");
        exit;
    });
    //
    $app->post('/admin/cadastrar-quartos', function()
    {
        //User::verifyLoginAdmin();
        $quartos = new Quartos();
        $quartos->setDadosForm($_POST);
        $quartos->save();
        header("location: /admin/quartos");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-quartos/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $quartos = new Quartos();
        $quartos->setIdQuartos((int)$id);
        $page->setTpl("edit-quartos", array("quartos"=>$quartos->get()));
        exit;
    });
    //
    $app->post('/admin/editar-quartos/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $quartos = new Quartos();
        $quartos->setIdQuartos((int)$id);
        $quartos->setDadosForm($_POST);
        $quartos->update();
        header("location: /admin/quartos");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-quartos/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $quartos = new Quartos();
        $quartos->setIdQuartos((int)$id);
        $quartos->delete();
        header('location: /admin/quartos');
        exit;
    });
?>