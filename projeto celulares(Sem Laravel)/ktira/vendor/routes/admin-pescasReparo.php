<?php 
    //-> Rota de listagem
    $app->get('/admin/pescasReparo', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-pescasReparo", array("pescasReparo"=> pescasReparo::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-pescasReparo', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-pescasReparo", ['smartphones' => Smartphones::listAll()]);
        exit;
    });
    //
    $app->post('/admin/cadastrar-pescasReparo', function($id=0)
    {
        //User::verifyLoginAdmin();
        $pescasReparo = new PescasReparo();
        $pescasReparo->setIdReparo((int)$id);
        $pescasReparo->setDadosForm($_POST);
        $pescasReparo->save();
        header("location: /admin/pescasReparo");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-pescasReparo/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $pescasReparo = new PescasReparo();
        $pescasReparo->setIdReparo((int)$id);
        $page->setTpl("edit-pescasReparo", array("pescasReparo" => $pescasReparo->get(), "smartphones" => Smartphones::listAll()));
        exit;
    });
    //
    $app->post('/admin/editar-pescasReparo/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $pescasReparo = new PescasReparo();
        $pescasReparo->setIdReparo((int)$id);
        $pescasReparo->setDadosForm($_POST);
        $pescasReparo->save();
        header("location: /admin/pescasReparo");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-pescasReparo/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $pescasReparo = new PescasReparo();
        $pescasReparo->setIdReparo((int)$id);
        $pescasReparo->delete();
        header('location: /admin/pescasReparo');
        exit;
    });
?>