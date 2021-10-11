<?php 
    //-> Rota de listagem
    $app->get('/admin/reserva', function()
    {
        //Usuarios::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("list-reserva", array("reserva"=> Reserva::listAll()));
        exit;
    });

    //-> Rota de Cadastro
    $app->get('/admin/cadastrar-reserva', function()
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $page->setTpl("cadastro-reserva");
        exit;
    });
    //
    $app->post('/admin/cadastrar-reserva', function()
    {
        //User::verifyLoginAdmin();
        $reserva = new Reserva();
        $reserva->setDadosForm($_POST);
        $reserva->save();
        header("location: /admin/reserva");
        exit;
    });

    //-> Rota de Edição
    $app->get('/admin/editar-reserva/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $page = new PageAdmin();
        $reserva = new Reserva();
        $reserva->setIdReserva((int)$id);
        $page->setTpl("edit-reserva", array("reserva"=>$reserva->get()));
        exit;
    });
    //
    $app->post('/admin/editar-reserva/:id', function($id)
    {
        //Usuarios::verifyLoginAdmin();
        $reserva = new Reserva();
        $reserva->setIdReserva((int)$id);
        $reserva->setDadosForm($_POST);
        $reserva->update();
        header("location: /admin/reserva");
        exit;
    });

    //-> Rota Delete
    $app->get('/admin/deletar-reserva/:id', function($id)
    {
        //User::verifyLoginAdmin();
        $reserva = new Reserva();
        $reserva->setIdReserva((int)$id);
        $reserva->delete();
        header('location: /admin/reserva');
        exit;
    });
?>