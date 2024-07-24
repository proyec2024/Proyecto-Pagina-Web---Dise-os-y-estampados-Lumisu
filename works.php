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

  <title>EMPRESA</title>

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
              <li><a title='' href="./crud_U/Leer.php">04 : <?php echo strtoupper(htmlspecialchars($_SESSION['usuario'])); ?></a></li>
              <li><a href='./cerrar_sesion.php' title=''> CERRAR SESION</a></li>
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

        <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
          <div class="text-center">
            <h1 class="h2"> EMPRESA </h1>
            <p>Somos una empresa dedicada a promover la originalidad de las ideas y plasmasrlas en productos publicitario tangibles, nos enfocamos en la produccion de
              pequeños a medianos desarrollo que estan limitados por procesos habituales de fabrica. nuestra empresa ataca estos factores y los convierte en soluciones
              para los empresario o personas.</p>
          </div>
        </div>

        <div class="col-md-12">

          <div id="myCarousel" class="carousel slide projects-carousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-4">

                    <a href="https://www.behance.net/gallery/99069809/HOT-MACH-MACHINE-CYBERPUNK" title="" class="black-image-project-hover">
                      <img src="./img/proyecto cyberpunk/maquinas cyberpunk-07.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="card-container card-container-lg">
                      <h4></h4>
                      <h3>MAQUINAS CYBERPUNK</h3>
                      <p>Proyecto de ilustracion y transformacion que se centra
                        en volver algo de 2 dimensiones una ilustracion realista y detallada
                        del vehiculo a intervenir hasta que queda bien definido, 
                        visite el portafolio con el proyecto.</p>
                      <a href="https://www.behance.net/gallery/99069809/HOT-MACH-MACHINE-CYBERPUNK" title="" class="btn btn-default">Ver más</a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <a href="https://www.behance.net/gallery/49374829/distorsion" title="" class="black-image-project-hover">
                      <img src="./img/proyecto distorsion/behance_download_1536975026754.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="card-container card-container-lg">
                      <h4></h4>
                      <h3>DISTORSION</h3>
                      <p>Proyecto de diseño grafico que tuvo lugar y producción a muy pequeña escala en la ciudad de medellín y hasta el momento se
                        se conserva como el punto de partida para todo el portafolio de proyectos que posee esta empresa.</p>
                      <a href="https://www.behance.net/gallery/49374829/distorsion" title="" class="btn btn-default">Ver más</a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <a href="https://www.behance.net/gallery/62774639/aviones-del-crimen-en-llamas" title="" class="black-image-project-hover">
                      <img src="./img/proyectos aviones del crimen/behance_download_1536965412687.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="card-container card-container-lg">
                      <h4></h4>
                      <h3>AVIONES DEL CRIMEN</h3>
                      <p>Proyecto de ilustracion creado por el diseñador luis fernando murillo 
                        par elaborar calcomanias ilustradas de diferentes aeronaves que se
                        han usado por mucho tiempo para cometer crimenenes relacionados con el narcotrafico
                        y como acaban estas al final, en llamas para no dejar evicencias.</p>
                      <a href="https://www.behance.net/gallery/62774639/aviones-del-crimen-en-llamas" title="" class="btn btn-default">Ver más</a>
                    </div>
                  </div>

                </div>
                <!--/row-->
              </div>
              <!--/item-->
            </div>

          </div>
          <!--/row-->
        </div>

        <!--/item-->
      </div>
      <!--/carousel-inner-->
    </div>



    <!--/myCarousel-->
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