<?php

    $app->get('/admin/loja/removerFoto/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $loja = new Foto();
        $loja->setIdFoto((int)$id);
        $loja->updateFotos();
        header("location: /admin/editar-loja/$id");
        exit;
    });

    //-> Rota de listagem
    $app->get('/admin/loja', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-loja", array("loja"=> Loja::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-loja', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-loja");
        exit;
    });
    //
    $app->post('/admin/cadastrar-loja', function()
    {
        //User::verifyLoginAdmin();
        $loja = new Loja();
        $foto = new Foto();
        $foto->Upload($_FILES);
        $foto->setTxtFoto($_FILES["txtFoto"]["name"]);
        $loja->setDadosForm($_POST);
        $id = $loja->save();
        $foto->setFkLoja($id);
        $foto->save();
        header("location: /admin/loja");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-loja/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $loja = new loja();
        $loja->setIdAta((int)$id);
        $page->setTpl("edit-loja",array('loja'=>$loja->get(), 'foto' => Foto::listAll()));
        exit;
    });
    //
    $app->post('/admin/ediatr-loja/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $loja = new loja();
        $loja->setIdLoja((int)$id);
        $loja->setDadosForm($_POST);
        if($_FILES["txtFoto"]["name"]!=""){
            $foto = new Foto();
            $foto->seFkLoja((int)$id);
            $foto->Upload($_FILES);
            $foto->setTxtFoto($_FILES["txtNomeArquivo"]["name"]);
            $foto->save();
        }
        $loja->update();
        header("location: /admin/loja");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-loja/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $loja = new loja();
        $loja->setIdLoja((int)$id);
        $loja->delete();
        header('location: /admin/loja');
        exit;
    });
?>