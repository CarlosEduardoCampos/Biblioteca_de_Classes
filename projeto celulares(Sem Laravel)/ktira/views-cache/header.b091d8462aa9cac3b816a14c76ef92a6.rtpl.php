<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Câmara Municipal | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/res/Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/res/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/res/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/res/Admin/plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="/res/Admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/Admin/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/res/Admin/dist/css/admin.css">

  <link rel="stylesheet" href="/res/Admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/res/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/res/Admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/res/Admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- SEARCH FORM -->


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item ">
          <a class="nav-link" href="#">
            <i class="fas fa-door-open"></i>

          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/administramulti" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard</p>
              </a>
            </li>




            <li class="nav-item">
              <a href="/admin/licitacao" class="nav-link">
                <i class="nav-icon fas fa-gavel"></i>
                <p>Licitação</p>
              </a>
            </li>


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">

                <i class="nav-icon fas fa-bullhorn"></i>
                <p>Comunicação<i class="fas fa-angle-left right"></i></p>
               
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/noticia" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Notícia</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/admin/tvCamara" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tv Camara</p>
                  </a>
                </li>
              </ul>
            </li>



            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">

                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                  Atividades Legislativas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="/admin/decretos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Decretos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/indicacoes" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Indicações</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/mocao" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Moções</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/portaria" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Portarias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/projetosLei" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Projetos de Lei</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="/admin/atas" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Atas</p>
              </a>
            </li>






            <li class="nav-item">
              <a href="/admin/oficio" class="nav-link">
                <i class="nav-icon fas fa-file-pdf"></i>
                <p>Ofício</p>
              </a>

            </li>




            <li class="nav-item">
              <a href="/admin/respostasExecutivo" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Respostas do Executivo</p>
              </a>

            </li>

            <li class="nav-item">
              <a href="/admin/usuarios" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Usuarios</p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">

                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                  Legislaturas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="/admin/vereadores" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vereadores</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/admin/vereadorLegislatura" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vereador Legislatura</p>
                  </a>

                </li>

                <li class="nav-item">
                  <a href="/admin/legislatura" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Legislatura</p>
                  </a>

                </li>

                <li class="nav-item">
                  <a href="/admin/mesaDiretora" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mesas Diretoras</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/membrosMesa" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>Membros da Mesa</p>
                  </a>

                </li>



              </ul>
            </li>


            <!-- <li class="nav-item">
              <a href="/admin/membroComissao" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>Membros da Comissão</p>
              </a>

            </li> -->

            <li class="nav-item">
              <a href="/admin/comissoes" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>Comissões</p>
              </a>

            </li>





            </li>


            <li class="nav-header">ADMINISTRATIVO</li>

            <li class="nav-item">
              <a href="/admin/cadastrar-usuarios" class="nav-link">

                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Usuários
                </p>
              </a>
            </li>
      </div>
      <!-- /.sidebar -->
    </aside>