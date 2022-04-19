<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--faz o site ocupar todo o espaço disponível na janela, seja em celulares, tablets ou PC’s-->
  <title>Pizzaria</title>
  <link rel="stylesheet" type="text/css" href="../sisPizza/pagina.css">
  <link rel="shortcut icon" href="../sisPizza/img/logo.png" type="image/x-icon">
</head>

<body>

  <!--Menu ===============  Menu  =========================  Menu  ====================================  Menu  =======================  Menu  ==============================-->

  
  <header id="header">
      <div class="logo">

        <img src="../sisPizza/img/logo.png" class="media-object  img-responsive img-thumbnail"> 
      
      </div>
      <nav id="nav">

        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
          <span id="hamburger"></span>
        </button>

        <ul id="menu" role="menu">

          <li><a href="#" class="nav__link">Home</a></li>
          <li><a href="#" class="nav__link">Quem Somos</a></li>
          <li><a href="cardapio.php" class="nav__link">Cardápio</a></li>
          <li><a href="preco.php" class="nav__link">Preço</a></li>
          <li><a href="#" class="nav__link">Opções da pizza</a></li>
        
        </ul>

        <ul id="nav__list">
          <li class="nav__list-item">
            <a class="nav__link nav__link--btn" href="login.php" target="_blank">Login</a>
          </li>
  
          <li class="nav__list-item">
            <a class="nav__link nav__link--btn nav__link--btn--highlight" href="cadastro.php" target="_blank">Cadastro</a>
          </li>

      </nav>
  </header>
  
<main>

  <!--Slidershow  ==================  Slidershow  ======================  Slidershow  ====================  Slidershow  ===================  Slidershow  =================-->

  <div id="items-wrapper">
    <div id="items">
        <div class="item"><img src="../sisPizza/img/sli.jpg" /></div>
        <div class="item"><img src="../sisPizza/img/sli1.jpg" /></div>
        <div class="item"><img src="../sisPizza/img/sli2.jpg" /></div>
    </div>
  </div>

  <!--Empresas Parceiras  ===================  Empresas Parceiras  ====================  Empresas Parceiras  =====================  Empresas Parceiras  =================-->
  
<div class="titulos">
    <h1>Pizzas</h1>
    </div>
  <br>
  <br>
  <br>
<section>
  <div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/1.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/2.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/3.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/4.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/5.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/6.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/7.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/8.jpg">
      </div>
      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/9.jpg">
      </div>

      <!-- mais 9 slides -->

      <div class="slide">
        <img class="img-slide" src="../sisPizza/img/1.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/2.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/3.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/4.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/5.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/6.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/7.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/8.jpg">
    </div>
    <div class="slide">
      <img class="img-slide" src="../sisPizza/img/9.jpg">
    </div>


    </div>
  </div>
</section>

  <br>
  <br>
  <br>
  <br>
  <br>

</main>


<!-- Footer  ====================  Footer  ========================  Footer  ========================  Footer  ========================  Footer  ======================= -->


  <!-- Ícones impressionantes de fontes (versão gratuita)-->
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <!--Rodapé-->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <!-- rodapé localização-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localização</h4>
          <p class="lead mb-0">
            Salvador BA, Bairro Liberdade
            <br>
            Rua Alves Rebouças Maira Mota, N 421
          </p>
        </div>
          
        <!--Footer Social Icons-->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">redes sociais</h4>
          <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-linkedin-in"></i></a>
          <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-instagram"></i></a>
          <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-google"></i></a>
          <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-whatsapp"></i></a>
        </div>
          
        <!--Footer About Text-->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Informações legais</h4>
          <p class="lead mb-0">
            Copyright © 2020 Pizzaria.com <br> Todos os direitos reservados.
          </p>
        </div>
      </div>
    </div>
</footer>
</body>
</html> 