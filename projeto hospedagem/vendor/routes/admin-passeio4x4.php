<?php 
    //-> Rota de listagem
    $app->get('/admin/passeio4x4', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-passeio4x4", array("passeio4x4"=> Passeio4x4::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-passeio4x4', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-passeio4x4");
        exit;
    });
    //
    $app->post('/admin/cadastrar-passeio4x4', function()
    {
        //User::verifyLoginAdmin();
        $passeio4x4 = new Passeio4x4();
        $passeio4x4->setDadosForm($_POST);
        $passeio4x4->save();
        header("location: /admin/passeio4x4");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-passeio4x4/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $passeio4x4 = new Passeio4x4();
        $passeio4x4->setIdPasseio4x4((int)$id);
        $page->setTpl("edit-passeio4x4", array("passeio4x4"=>$passeio4x4->get()));
        exit;
    });
    //
    $app->post('/admin/editar-passeio4x4/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $passeio4x4 = new Passeio4x4();
        $passeio4x4->setIdPasseio4x4((int)$id);
        $passeio4x4->setDadosForm($_POST);
        $passeio4x4->update();
        header("location: /admin/passeio4x4");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-passeio4x4/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $passeio4x4 = new Passeio4x4();
        $passeio4x4->setIdPasseio4x4((int)$id);
        $passeio4x4->delete();
        header('location: /admin/passeio4x4');
        exit;
    });
?>