<?php




    $app->get('/admin/atas/removerFoto/:id', function($id)
    {
        //User::verifyLoginAdmin();
  
        $atas = new Atas();
        $atas->setIdAta((int)$id);
        $atas->updateFotos();
        header("location: /admin/editar-atas/$id");
        exit;
    });

    //-> Rota de listagem
    $app->get('/admin/atas', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-atas", array("atas"=> Atas::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-atas', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-atas");
        exit;
    });
    //
    $app->post('/admin/cadastrar-atas', function()
    {
        //User::verifyLoginAdmin();
        $atas = new Atas();
        $atas->Upload($_FILES);
        $atas->setTxtNomeArquivo($_FILES["txtNomeArquivo"]["name"]);
        $atas->setDadosForm($_POST);
        $atas->save();
        header("location: /admin/atas");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-atas/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $atas = new Atas();
        $atas->setIdAta((int)$id);
        $page->setTpl("edit-atas",array('atas'=>$atas->get()));
        exit;
    });
    //
    $app->post('/admin/cadastrar-atas/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $atas = new Atas();
        $atas->setIdAta((int)$id);
        $atas->setTxtNomeAta($_POST["txtNomeAta"]);
        
        if($_FILES["txtNomeArquivo"]["name"]!=""){
            $atas->Upload($_FILES);
            $atas->setTxtNomeArquivo($_FILES["txtNomeArquivo"]["name"]);
            $atas->updateFotos();
        }
        $atas->update();
        header("location: /admin/atas");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-atas/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $atas = new Atas();
        $atas->setIdAta((int)$id);
        $atas->delete();
        header('location: /admin/atas');
        exit;
    });
?>