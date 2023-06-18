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
                  <a href='#' class='d-flex align-items-center text-white text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'><i class='bi bi-person-circle' id='userIcon'></i></a>
                  <ul class='dropdown-menu dropdown-menu-end'>
                    <li><a href='account.php' class='dropdown-item'>Conta</a></li>
                    <li><a href='#' class='dropdown-item'>Opções</a></li>
                    <li><hr class='dropdown-divider'></li>
                    <li><a href='#' class='dropdown-item'>Sair</a></li>
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
                  <a href='login.php'><button class='btn btn-outline-purple' type='button'>Entrar</button></a>
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
  <div class="container" id="terms-of-use">
    <div class="row">
      <div class="col-12">
        <h2 class="display-5 fw-bold text-body-emphasis mb-4 text-center">Termos de uso</h2>
      </div>
    </div>
  </div>

  <nav id="scrollspy">
    <ul class="nav nav-underline justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#item1">Item 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item2">Item 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item3">Item 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item4">Item 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item5">Item 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item6">Item 6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item7">Item 7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item8">Item 8</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item9">Item 9</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#item10">Item 10</a>
      </li>
    </ul>
  </nav>

  <div data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" tabindex="0">
    <div class="container mb-4" id="terms-of-use">
      <div class="row">
        <div class="col-12">
          <h3 class="mt-3" id="item1">Item 1</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item2">Item 2</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item3">Item 3</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item4">Item 4</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item5">Item 5</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item6">Item 6</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item7">Item 7</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item8">Item 8</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
        <div class="col-12">
          <h3 class="mt-3" id="item9">Item 9</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
          <div class="col-12">
          </div>
          <h3 class="mt-3" id="item10">Item 10</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod convallis volutpat. Fusce
            fermentum, sem ac accumsan euismod, felis neque blandit libero, non interdum libero elit a ante.
            Pellentesque
            rutrum iaculis molestie. Morbi eget mattis nisl. Donec eget eros a augue molestie suscipit. Morbi non quam
            lacus. Morbi accumsan lorem neque, id sodales ligula tincidunt in. Nulla lacus felis, pulvinar id nibh ac,
            fringilla facilisis mi. Curabitur quis lorem convallis, congue elit et, porttitor enim. Integer ac felis id
            massa iaculis maximus sed at odio. Ut feugiat urna eu quam fermentum ultrices. Aenean eget suscipit enim.
            Suspendisse consectetur nulla risus, vel semper metus imperdiet eget. Suspendisse eu justo nec massa rutrum
            accumsan vitae non neque. Maecenas ut aliquet lorem.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mb-4">
    <a href="register.php"><i class="bi bi-arrow-left"></i> Voltar</a>
  </div>

  <!--FOOTTER-->
  <!--FOOTTER-->
  <fotter class="py-3 mx-2">
    <div class="container">
      <ul class="nav nav-underline justify-content-center border-bottom py-3">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-body-secondary">Início</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-body-secondary">Quem somos</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-body-secondary">Setor Atuação</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-body-secondary">Contato</a>
        </li>
      </ul>
      <p class="text-body-secondary text-center py-3">&copy 2023 Constru Ideias</p>
    </div>
  </fotter>
</body>

</html>