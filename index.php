<?php

session_start();

echo $_SESSION['email'];

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
  <nav class="navbar navbar-expand-lg purple navbar-dark nav-shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-0" href="index.php">
        <img src="img/logo.png" alt="logo" id="logo_img"> Constru Ideias
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-fluid">
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbar">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav nav-underline ms-md-auto pe-3">
              <li class="nav-item">
                <hr class="d-lg-none my-2 text-white-50">
              </li>
              <li class="nav-item">
                <a href="login.php"><button class="btn btn-purple-dark" type="button">Entrar</button></a>
              </li>
              <li class="nav-item">
                <a href="register.php"><button class="btn btn-purple-dark" type="button">Cadastrar</button></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!--HERO-->
  <div class="container col-xxl-8 px-4 py-5" id="hero1">
    <div class="row justify-content-center align-items-center g-5 py-5">
      <div class="col-lg-8 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Precisa de um profissional da construção civil?</h1>
        <p class="lead">Com o Constru Ideias é facil e rápido se conectar a profissionais para sua obra!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
          <a href="login.php" class="btn btn-purple btn-lg px-4 me-md-2">Entrar</a>
          <a href="register.php" class="btn btn-purple btn-lg px-4 me-md-2">Cadastrar</a>
        </div>
      </div>
      <div class="container d-flex mt-4">
        <img src="img/escolher.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" id="hero_image1"
          loading="lazy">
      </div>
    </div>
  </div>
  <div class="container text-center justify-content-center" id="text_hero">
    <h2 class="display-5 fw-bold">O que você pode fazer neste site?</h2>
  </div>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5">
      <div class="col-10 col-md-8 col-lg-6">
        <img src="img/construção.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" id="hero_image2"
          loading="lazy">
      </div>
      <div class="col-md-6">
        <h2 class="display-6 fw-bold">Conecte-se a outras pessoas</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis nunc scelerisque, maximus
          nisi eget, varius tellus. Nam imperdiet mi sit amet diam volutpat, et mollis metus bibendum. Aliquam nisi.</p>
      </div>
    </div>
  </div>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-5">
      <div class="col-10 col-md-8 col-lg-6">
        <img src="img/engenheiro.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" id="hero_image2"
          loading="lazy">
      </div>
      <div class="col-md-6">
        <h2 class="display-6 fw-bold">Dividido por setores</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis nunc scelerisque, maximus
          nisi eget, varius tellus. Nam imperdiet mi sit amet diam volutpat, et mollis metus bibendum. Aliquam nisi.</p>
      </div>
    </div>
  </div>

  <!--FOOTTER-->
  <fotter class="py-3 mx-2">
    <div class="container ">
      <div class="border-bottom py-3"></div>
      <p class="text-body-secondary text-center py-3">&copy 2023 Constru Ideias</p>
    </div>
  </fotter>
</body>

</html>