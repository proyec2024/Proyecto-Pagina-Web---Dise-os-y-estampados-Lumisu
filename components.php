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

  <title>INICIO DE SESIÓN</title>

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
            <li><a href="./works.html" title=""> EMPRESA</a></li>
            <li><a href="./about.html" title=""> CATEGORIAS</a></li>
            <li><a href="./contact.html" title=""> REGISTRO</a></li>
            <li><a href="./components.html" title=""> INICIO SESION</a></li>
            <li><a href="./work.htmL" title=""> TIENDA</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="section-container">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INICIO DE SESIÓN</title>

    <style>
      * {
        padding: 100;
        margin: 100;
        box-sizing: border-box;
      }

      body {
        margin: 50px auto;
        text-align: center;
        width: 800px;
        background: url(img/Diseño\ sin\ título.gif);
        background-repeat: no-repeat;
        background-position: center;
        height: 120px;
        width: 100%;
      }

      h1 {
        font-family: 'roboto';
        font-size: 2rem;
        text-transform: uppercase;
      }

      label {
        width: 150px;
        display: inline-block;
        text-align: left;
        font-size: 1.6rem;
        font-family: 'roboto';
      }

      input {
        border: 2px solid #ccc;
        font-size: 1.5rem;
        font-weight: 100;
        font-family: 'roboto';
        padding: 12px;
      }

      form {
        margin: 25px auto;
        padding: 20px;
        border: 5px solid #c4c4c4;
        width: 500px;
        background: #ebebeb;
      }

      button {
        padding: 8px;
        font-size: 1.5rem;
        font-family: 'roboto';
        font-weight: 100;
        background: #fff;

      }
    </style>
    </head>

    <body>
      <br>
      <h1>INICIO DE SESIÓN</h1>
      <form action="inicio_sesion.php" method="POST">
        <table border="0" align="center">
          <tr>
            <td>
              Usuario:
            </td>
            <td>
              <label for="user"></label>
              <input type="text" name="usuario" id="user" ESTE CAMPO ES REQUERIDO />
              <?php if (!empty($_GET['mensaje'])) {
                echo '<p class="color: red;">' . $_GET['mensaje'] . '</p>';
              }
              ?>
            </td>
          </tr>
          <tr>
            <td>
              Contraseña:
            </td>
            <td>
              <label for="password"></label>
              <input type="password" name="password" id="password" ESTE CAMPO ES REQUERIDO />
            </td>
          </tr>
          <tr>
            <td align="center">
              <input type="submit" name="enviar" id="enviar" value="INICIAR" />
            </td>
          </tr>
        </table>
      </form>
    </body>
</html>

</html>
<div class="section-container">
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