<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../res/bootstrap/dist/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link rel="stylesheet" href="../res/style.css" />
    <link rel="stylesheet" href="/res/easyzoom.css">

    <!-- <script src=“https://assets.pagar.me/pagarme-js/4.5/pagarme.min.js”></script> -->
    <title>Document</title>
  </head>

  <body>
    <header class="desktop">
        <div class="superior">
            <div class="container d-flex justify-content-between">
            <span><b>Televendas: </b><a href="https://api.whatsapp.com/send?phone=5537998353524" target="blank"><i class="fab fa-whatsapp"></i> (35)99990-6309</a></span>
            <div>
              <b>Siga nossas redes sociais: </b><i class="fab fa-instagram"></i><i class="fab fa-facebook-f"></i>
            </div>
          </div>
        </div>
      <hr>
      

      <div class="container d-flex justify-content-between centro align-items-center">
        <a href="/" class="logo"><img src="../res/_img/logo.svg" alt="" loading="lazy"></a>
        <div class="formulario">
          <form action="/produtos" method="get" class="d-flex justify-content-between align-items-center">
            <input type="text" placeholder="Faça aqui sua busca" name="busca">
            <button type="submit" class="d-flex align-items-center">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <div class="usuario">
          <ul class="d-flex align-items-center">
            <li class="mr-20">
              <a href="/conta" class="d-flex align-items-center">
                <i class="fas fa-user"></i> <span>Minha Conta</span></a
              >
            </li>
            <li>
              <a href="/carrinho" class="d-flex align-items-center"
                ><i class="fas fa-shopping-cart"></i> <span>{$carrinho.total} itens</span></a
              >
            </li>
          </ul>
        </div>
      </div>
      <hr>
      <nav class="navbar navbar-expand-lg desktop">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav container">
            <li class="nav-item">
              <a class="nav-link" href="/produtos?categoria=1">LINHA BATIZADO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/produtos?categoria=8">LINHA NEUTRA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/produtos?categoria=4">MENINOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/produtos?categoria=2">MENINAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/produtos?categoria=3">KIT BERÇO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/produtos?categoria=9">PERSONALIZADOS</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>


  <header class="mobile">

   

        <div class="d-flex justify-content-between centro align-items-center container">
          <div><img src="_img/logo.svg" alt="" /></div>
         
          <div class="usuario">
            <ul class="d-flex align-items-center">
              <li class="mr-20">
                <a href="" class="d-flex align-items-center">
                  <i class="fas fa-user"></i> <span>Minha Conta</span></a
                >
              </li>
              <li>
                <a href="/carrinho" class="d-flex align-items-center"
                  ><i class="fas fa-shopping-cart"></i> <span>{$carrinho.total} itens</span></a
                >
              </li>
            </ul>
          </div>
        </div>

        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed left" data-toggle="collapse" data-target="#menu">
                <i class="fas fa-bars"></i>
              </button>
             
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
                      <i class="fas fa-search"></i>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/produtos?categoria=1">LINHA BATIZADO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/produtos?categoria=8">LINHA NEUTRA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/produtos?categoria=4">MENINOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/produtos?categoria=2">MENINAS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/produtos?categoria=3">KIT BERÇO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/produtos?categoria=9">PERSONALIZADOS</a>
                </li>
                
              </ul> 
              <hr>
              <ul class="d-flex">
                <li><a href="">Quem Somos</a></li>
                <li><a href="">Dúvidas Frequentes</a></li>
                
              </ul> 
            </div>
      
            <!-- /.navbar-collapse #menu -->
            <div class="collapse navbar-collapse hidden-lg form-mobile" id="search">
              <form class="hidden-sm hidden-md hidden-lg" role="search" action="/" method="GET">
              <div class="input-group">
              <input type="text" placeholder="Busque aqui seu smartphone"/>
              <button type="submit"><i class="fas fa-search"></i></button>
        </form> 
            </div>
            <!-- /.navbar-collapse #search -->
        </div>
          <!-- /.container -->
       </nav>
     
      
    </header> 