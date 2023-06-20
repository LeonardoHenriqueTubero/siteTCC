<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--BOOTSTRAP CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!--BOOTSTRAP JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"
    defer></script>
  <!--BOOTSTRAP ICONS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!--CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <!--JS-->
  <script src="js\scripts.js" defer></script>
</head>

<body>

  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg fixed-top purple navbar-light nav-shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-0" href="index.php">
        <img src="img/logo.png" alt="logo" id="logo_img"> Constru Ideias
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-fluid">
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbar">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="nav navbar-nav nav-underline pe-3">
              <li class="nav-item">
                <a href="index.php" class="nav-link active" aria-current="page">Início</a>
              </li>
              <li class="nav-item">
                <a href="whoareus.php" class="nav-link">Quem somos</a>
              </li>
              <li class="nav-item">
                <a href="sector.php" class="nav-link">Setor Atuação</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">Contato</a>
              </li>
            </ul>
            <?php

            if (isset($_SESSION['login']) == true) {
              echo "    
                <ul class='navbar-nav nav-underline ms-md-auto pe-3'>
                <li class='nav-item'>
                  <hr class='d-lg-none my-2 text-dark-50'>
                </li>
                <li class='dropdown-center' id='user'>
                  <a href='#' class='d-flex align-items-center text-black text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'><i class='bi bi-person-circle' id='userIcon'></i></a>
                  <ul class='dropdown-menu dropdown-menu-end'>
                    <li><a href='account.php' class='dropdown-item'>Conta</a></li>
                    <li><a href='#' class='dropdown-item'>Opções</a></li>
                    <li><hr class='dropdown-divider'></li>
                    <li><a href='logout.php' class='dropdown-item'>Sair</a></li>
                  </ul>
                </li>
              </ul>";
            } else {
              echo "
              <ul class='navbar-nav nav-underline ms-md-auto pe-3'>
                <li class='nav-item'>
                  <hr class='d-lg-none my-2 text-dark-50'>
                </li>
                <li class='nav-item'>
                  <a href='login.php'><button class='btn btn-outline-purple-dark' type='button'>Entrar</button></a>
                </li>
                <li class='nav-item'>
                  <a href='register.php'><button class='btn btn-purple-dark' type='button'>Se torne um profissional</button></a>
                </li>
              </ul>
                ";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php

  if (isset($_SESSION['login']) == true) {
    echo"
    <!-- ADS SLIDER -->
    <div class='container mb-4' id='sliderAd'>
      <h2 class='fw-bold text-center display-5 mb-4'>Propagandas de empresas ao redor de você:</h2>
      <div class='row justify-content-center'>
        <div class='col-lg-9 col-12 shadow-lg'  id='sliders'>
          <div id='carouselExampleIndicators' class='carousel slide carousel-dark' data-bs-ride='carousel'>
            <div class='carousel-indicators'>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' class='active'
                aria-current='true' aria-label='Slide 1'></button>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='1'
                aria-label='Slide 2'></button>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='2'
                aria-label='Slide 3'></button>
            </div>
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <img src='img/propaganda1.jpg' class='d-block img-fluid' alt='algo'>
              </div>
              <div class='carousel-item'>
                <img src='img/propaganda2.jpg' class='d-block img-fluid' alt='algo'>
              </div>
              <div class='carousel-item'>
                <img src='img/propaganda3.jpg' class='d-block img-fluid' alt='algo'>
              </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators'
              data-bs-slide='prev'>
              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators'
              data-bs-slide='next'>
              <span class='carousel-control-next-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- WORKS -->
    <div class='container mb-4' id='work'>
      <form class='row justify-content-center gap-1' action='sector.php' method='get'>
        <h2 class='fw-bold text-center display-5 mb-4'>Trabalhos mais realizados na sua região:</h2>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn btn-sm work-links mb-0 shadow-sm' name='search' value='pedreiro'><i class='bi bi-bricks'></i> Pedreiro </p>
        </div>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn work-links mb-0 shadow-sm' name='search' value='marceneiro'><i class='bi bi-hammer'></i> Marceneiro </p>
        </div>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn work-links mb-0 shadow-sm' name='search' value='pintor'><i class='bi bi-brush'></i> Pintor </p>
        </div>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn work-links mb-0 shadow-sm' name='search' value='eletricista'><i class='bi bi-tools'></i> Eletricista </p>
        </div>
      </div>
    </div>
    ";
  } else {
    echo "
    <!--HERO-->
    <div class='container col-xxl-8 px-4 py-5' id='hero1'>
      <div class='row justify-content-center align-items-center g-5 py-5'>
        <div class='col-lg-8 text-center'>
          <h1 class='display-5 fw-bold text-body-emphasis lh-1 mb-3'>Precisa de um profissional da construção civil?</h1>
          <p class='lead mb-4 fw-bold'>Com o Constru Ideias é facil e rápido se conectar a profissionais para sua obra!</p>
          <div class='d-grid gap-2 d-md-flex justify-content-md-center'>
            <a href='register.php' class='btn btn-purple btn-lg px-4 me-md-2'>Seja um profissional!</a>
          </div>
        </div>
        <div class='container d-flex mt-4'>
          <img src='img/escolher.svg' class='d-block mx-lg-auto img-fluid' alt='Bootstrap Themes' id='hero_image1'
            loading='lazy'>
        </div>
      </div>
    </div>

    <!-- ADS SLIDER -->
    <div class='container mb-4' id='sliderAd'>
      <h2 class='fw-bold text-center display-5 mb-4'>Propagandas de empresas ao redor de você:</h2>
      <div class='row justify-content-center'>
        <div class='col-lg-9 col-12 shadow-lg'  id='sliders'>
          <div id='carouselExampleIndicators' class='carousel slide carousel-dark' data-bs-ride='carousel'>
            <div class='carousel-indicators'>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' class='active'
                aria-current='true' aria-label='Slide 1'></button>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='1'
                aria-label='Slide 2'></button>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='2'
                aria-label='Slide 3'></button>
            </div>
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <img src='img/propaganda1.jpg' class='d-block img-fluid' alt='algo'>
              </div>
              <div class='carousel-item'>
                <img src='img/propaganda2.jpg' class='d-block img-fluid' alt='algo'>
              </div>
              <div class='carousel-item'>
                <img src='img/propaganda3.jpg' class='d-block img-fluid' alt='algo'>
              </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators'
              data-bs-slide='prev'>
              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators'
              data-bs-slide='next'>
              <span class='carousel-control-next-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- WORKS -->
    <div class='container mb-4' id='work'>
      <form class='row justify-content-center gap-1' action='sector.php' method='GET'>
        <h2 class='fw-bold text-center display-5 mb-4'>Trabalhos mais realizados na sua região:</h2>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn btn-sm work-links mb-0 shadow-sm' name='search' value='pedreiro'><i class='bi bi-bricks'></i> Pedreiro </p>
        </div>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn work-links mb-0 shadow-sm' name='search' value='marceneiro'><i class='bi bi-hammer'></i> Marceneiro </p>
        </div>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn work-links mb-0 shadow-sm' name='search' value='pintor'><i class='bi bi-brush'></i> Pintor </p>
        </div>
        <div class='col-lg-5 col-11 d-grid'>
          <button type='submit' class='btn work-links mb-0 shadow-sm' name='search' value='eletricista'><i class='bi bi-tools'></i> Eletricista </p>
        </div>
      </div>
    </div>

    <!-- HERO -->
    <div class='container text-center justify-content-center' id='text_hero'>
      <h2 class='display-5 fw-bold'>O que você pode fazer neste site?</h2>
    </div>
    <div class='container col-xxl-8 px-4 py-5'>
      <div class='row flex-lg-row-reverse align-items-center g-5'>
        <div class='col-10 col-md-8 col-lg-6'>
          <img src='img/construção.svg' class='d-block mx-lg-auto img-fluid' alt='Bootstrap Themes' id='hero_image2'
            loading='lazy'>
        </div>
        <div class='col-md-6'>
          <h2 class='display-6 fw-bold'>Conecte-se a outras pessoas</h2>
          <p class='lead'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis nunc scelerisque, maximus
            nisi eget, varius tellus. Nam imperdiet mi sit amet diam volutpat, et mollis metus bibendum. Aliquam nisi.</p>
        </div>
      </div>
    </div>
    <div class='container col-xxl-8 px-4 py-5'>
      <div class='row align-items-center g-5'>
        <div class='col-10 col-md-8 col-lg-6'>
          <img src='img/engenheiro.svg' class='d-block mx-lg-auto img-fluid' alt='Bootstrap Themes' id='hero_image2'
            loading='lazy'>
        </div>
        <div class='col-md-6'>
          <h2 class='display-6 fw-bold'>Dividido por setores</h2>
          <p class='lead'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis nunc scelerisque, maximus
            nisi eget, varius tellus. Nam imperdiet mi sit amet diam volutpat, et mollis metus bibendum. Aliquam nisi.</p>
        </div>
      </div>
    </div>
    ";
  }
  ?>

  

  <!--FOOTTER-->
  <fotter class="py-3 mx-2">
    <div class="container">
      <ul class="nav nav-underline justify-content-center border-bottom py-3">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-body-secondary">Início</a>
        </li>
        <li class="nav-item">
          <a href="whoareus.php" class="nav-link text-body-secondary">Quem somos</a>
        </li>
        <li class="nav-item">
          <a href="sector.php" class="nav-link text-body-secondary">Setor Atuação</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link text-body-secondary">Contato</a>
        </li>
      </ul>
      <p class="text-body-secondary text-center py-3">&copy 2023 Constru Ideias</p>
    </div>
  </fotter>
</body>

</html>