<?php 
    //-> Rota de listagem
    $app->get('/admin/categoria', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-categoria", array("categoria"=> Categoria::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-categoria', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-categoria");
        exit;
    });
    //
    $app->post('/admin/cadastrar-categoria', function()
    {
        //User::verifyLoginAdmin();
        $categoria = new Categoria();
        $categoria->setDadosForm($_POST);
        $categoria->save();
        header("location: /admin/categoria");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-categoria/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $categoria = new Categoria();
        $categoria->setIdCategoria((int)$id);
        $page->setTpl("edit-categoria", array("categoria"=>$categoria->get()));
        exit;
    });
    //
    $app->post('/admin/cadastrar-categoria/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $categoria = new Categoria();
        $categoria->setIdCategoria((int)$id);
        $categoria->setDadosForm($_POST);
        $categoria->update();
        header("location: /admin/categoria");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-categoria/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $categoria = new Categoria();
        $categoria->setIdCategoria((int)$id);
        $categoria->delete();
        header('location: /admin/categoria');
        exit;
    });
?>