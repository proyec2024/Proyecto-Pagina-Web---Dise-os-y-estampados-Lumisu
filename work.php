<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <title>TIENDA </title>

  <link href="./main.3f6952e4.css" rel="stylesheet">
</head>

<body class="">
  <div id="site-border-left"></div>
  <div id="site-border-right"></div>
  <div id="site-border-top"></div>
  <div id="site-border-bottom"></div>
  <!-- Add your content of header -->
  <header>
    <nav class="navbar  navbar-fixed-top navbar-default">
      <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav ">
            <li><a href="./index.php" title=""> INICIO</a></li>
            <li><a href="./works.php" title=""> EMPRESA</a></li>
            <li><a href="./about.php" title=""> CATEGORIAS</a></li>
            <?php if (!isset($_SESSION['usuario'])) : ?>
              <li><a href='./contact.php' title=''> REGISTRO</a></li>
              <li><a href='./components.php' title=''> INICIO SESION</a></li>
            <?php else : ?>
              <li><a title=''href="./crud_U/Leer.php" >04 : <?php echo strtoupper(htmlspecialchars($_SESSION['usuario'])); ?></a></li>
              <li><a href='./cerrar_sesion.php' title=''> CERRAR SESION</a></li>
            <?php endif; ?>
            <li><a href="./work.php" title=""> TIENDA</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-small visible-md visible-lg">
            <li><a href="./work.php" title="" class="active"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                </svg></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <center>
            <img src="img/Diseño sin título.gif" class="img-responsive" alt="50px">
          </center>
          <div class="card-container">
            <div class="text-center">
              <h1 class="h2"> TIENDA</h1>
            </div>
            <p>Bienvenidos a la Tienda.</p>
            <blockquote>
              <p>"Selecciona tu pack de producto, cantidad y te haremos la cotización."</p>
              <small class="pull-right"></small>
            </blockquote>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2 section-container-spacer">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <img src="./assets/images/behance_download_1535217383618.jpg" class="img-responsive" alt="">
              <p>PACK 1 CAMISETAS</p>
              <form action="#">
                <label for="lang">Pack 1</label>
                <select name="lenguajes" id="lang">
                  <option value="pack 1">1, CAMISETA</option>
                  <option value="pack 2">2, CAMISETAS</option>
                  <option value="pack 3">3, CAMISETAS</option>
                  <option value="pack 4">4, CAMISETAS</option>
                  <option value="pack 5">5, CAMISETAS</option>
                  <option value="pack 6">6, CAMISETAS</option>
                  <option value="pack 7">7, CAMISETAS</option>
                  <option value="pack 8">8, CAMISETAS</option>
                </select>
                <input type="submit" value="Comprar" />
              </form>
            </div>
            <div class="col-xs-12 col-md-6">
              <img src="./assets/images/behance_download_1535217390084.jpg" class="img-responsive" alt="">
              <p>PACK 1 CAMISETAS</p>
              <form action="#">
                <label for="lang">Pack 1</label>
                <select name="lenguajes" id="lang">
                  <option value="pack 1">1, CAMISETA</option>
                  <option value="pack 2">2, CAMISETAS</option>
                  <option value="pack 3">3, CAMISETAS</option>
                  <option value="pack 4">4, CAMISETAS</option>
                  <option value="pack 5">5, CAMISETAS</option>
                  <option value="pack 6">6, CAMISETAS</option>
                  <option value="pack 7">7, CAMISETAS</option>
                  <option value="pack 8">8, CAMISETAS</option>
                </select>
                <input type="submit" value="Comprar" />
              </form>
              <br>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <img src="./assets/images/behance_download_1535217397427.jpg" class="img-responsive" alt="">
                <p>PACK 1 CAMISETAS</p>
                <form action="#">
                  <label for="lang">Pack 1</label>
                  <select name="lenguajes" id="lang">
                    <option value="pack 1">1, CAMISETA</option>
                    <option value="pack 2">2, CAMISETAS</option>
                    <option value="pack 3">3, CAMISETAS</option>
                    <option value="pack 4">4, CAMISETAS</option>
                    <option value="pack 5">5, CAMISETAS</option>
                    <option value="pack 6">6, CAMISETAS</option>
                    <option value="pack 7">7, CAMISETAS</option>
                    <option value="pack 8">8, CAMISETAS</option>
                  </select>
                  <input type="submit" value="Comprar" />
                </form>
              </div>
              <div class="col-xs-12 col-md-6">
                <img src="./assets/images/behance_download_1535929378301.jpg" class="img-responsive" alt="">
                <p>PACK 1 CAMISETAS</p>
                <form action="#">
                  <label for="lang">Pack 1</label>
                  <select name="lenguajes" id="lang">
                    <option value="pack 1">1, CAMISETA</option>
                    <option value="pack 2">2, CAMISETAS</option>
                    <option value="pack 3">3, CAMISETAS</option>
                    <option value="pack 4">4, CAMISETAS</option>
                    <option value="pack 5">5, CAMISETAS</option>
                    <option value="pack 6">6, CAMISETAS</option>
                    <option value="pack 7">7, CAMISETAS</option>
                    <option value="pack 8">8, CAMISETAS</option>
                  </select>
                  <input type="submit" value="Comprar" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer-container text-center">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
          </div>
        </div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        navActivePage();
      });
    </script>
    <script type="text/javascript" src="./main.70a66962.js"></script>
</body>

</html>