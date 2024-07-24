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

    <title>Title page</title>

    <link href="./main.3f6952e4.css" rel="stylesheet">
  </head>

  <body class="minimal">
    <div id="site-border-left"></div>
    <div id="site-border-right"></div>
    <div id="site-border-top"></div>
    <div id="site-border-bottom"></div>
    <!-- Add your content of header -->
    <header>
      <nav class="navbar  navbar-fixed-top navbar-inverse">
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
                <li><a href='./crud_U/Leer.php' title=''> LISTA DE USUARIOS</a></li>
                <li><a href='./crud_P/Leer.php' title=''> LISTA DE PRODUCTOS</a></li>
                <li><a  title=''>04 : <?php echo strtoupper(htmlspecialchars($_SESSION['usuario'])); ?></a></li>
                <li><a href='./cerrar_sesion.php' title=''> CERRAR SESION</a></li>
              <?php endif; ?>
              <li><a href="./work.php" title=""> TIENDA</a></li>


            </ul>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-small visible-md visible-lg">
              <li><a href="./work.html" title="" class="active"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                  </svg></a></li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- Add your site or app content here -->
    <div class="hero-full-container background-image-container white-text-container" style="background-image: url('./assets/images/portada\ 2.gif')">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="hero-full-wrapper">
              <div class="text-content">
                <h1><br>
                  <span id="typed-strings">
                    <span>BIENVENIDOS A</span>
                    <span>DISEÑOS Y ESTAMPADOS </span>
                    <span>LUMISU</span>
                  </span>
                  <span id="typed"></span>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        type();
        movingBackgroundImage();
      });
    </script>


    <script type="text/javascript" src="./main.70a66962.js"></script>
  </body>

  </html>