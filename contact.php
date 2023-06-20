<?php
session_start();
clearstatcache();
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
                <a href="index.php" class="nav-link">Início</a>
              </li>
              <li class="nav-item">
                <a href="whoareus.php" class="nav-link">Quem somos</a>
              </li>
              <li class="nav-item">
                <a href="sector.php" class="nav-link">Setor Atuação</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link active" aria-current="page">Contato</a>
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

  <!-- SUPORT FORM -->
  <div class="container mb-4 shadow" id="suport">
    <form class="row justify-content-center">
        <div class="col-12">
            <h1 class="fw-bold text-body-emphasis border-bottom border-2 text-center">Suporte</h1>
            <h3 class="mb-4 text-center">Entre em contato conosco!</h3>
        </div>
        <div class="col-lg-6 col-12">
            <div class="form-floating mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome">
                <label class="form-label" for="email">Nome</label>
              </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="form-floating mb-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                <label class="form-label" for="email">E-mail</label>
              </div>
        </div>
        <div class="col-lg-12 col-12">
            <div class="form-floating mb-3">
                <textarea name="message" id="message" class="form-control" placeholder="Mensagem"></textarea>
                <label class="form-label" for="message">Mensagem</label>
              </div>
        </div>
        <div class="col-lg-2 col-12 d-grid">
            <button type="submit" class="btn btn-purple mb-3 btn-lg" onclick="location.href='index.php'">Entrar</button>
        </div>
    </form>
  </div>

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