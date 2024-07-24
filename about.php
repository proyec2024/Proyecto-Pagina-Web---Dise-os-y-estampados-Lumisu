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

  <title>PRECIOS Y PRODUCTOS</title>

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
            <li><a href="./index.php" title="">INICIO</a></li>
            <li><a href="./works.php" title="">EMPRESA</a></li>
            <li><a href="./about.php" title="">CATEGORIAS</a></li>

            <?php if (!isset($_SESSION['usuario'])) : ?>
              <li><a href='./contact.php' title=''>REGISTRO</a></li>
              <li><a href='./components.php' title=''>INICIO SESION</a></li>
            <?php else : ?>
              <li><a title='' href="./crud_U/Leer.php">04 : <?php echo strtoupper(htmlspecialchars($_SESSION['usuario'])); ?></a></li>
              <li><a href='./cerrar_sesion.php' title=''>CERRAR SESION</a></li>
            <?php endif; ?>
            <li><a href="./work.php" title=""> TIENDA</a></li>
          </ul>


        </div>
      </div>
    </nav>
  </header>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">CATEGORIAS</h1>
          </div>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h3>PAQUETE ESTANDAR #1</h3>
                  <p>Contenido basico de camistas estampadas.
                    Cantidad 1-25, valor por unidad: 35.000 pesos.</p>
                  <h3>PAQUETE ESTANDAR #2</h3>
                  <p>Contenido basico de tarejetas de presentacion personal
                    valor por unidad: 850 pesos.
                    Cantidad 1-25.</p>
                  <h3>PAQUETE ESTANDAR #3</h3>
                  <p>Contenido basico de mugs estampados
                    valor por unidad: 15.000 pesos.
                    Cantidad 1-25.</p>
                  <h3>PAQUETE ESTANDAR #4</h3>
                  <p>Contenido basico de camistas stickers
                    valor por unidad: 1000 pesos precio varía dependiendo
                    en parte del numero de stickers del pack.
                    Cantidad 1-500.</p>
                </div>
                <div class="col-xs-12 col-md-6">
                  <img src="./assets/images/123343.jpg" class="img-responsive" alt="">
                </div>
              </div>
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
          <p>© UNTITLED | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      navActivePage();
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
  <script type="text/javascript" src="./main.70a66962.js"></script>
</body>

</html>