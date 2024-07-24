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

  <title>REGISTRO</title>

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>formulario de registro</title>

    <style>
    * {
      padding: 150;
      margin: 100;
      box-sizing: border-box;
  }
  body {
      margin: 50px auto;
      text-align: center;
      width: 700px;
      background: url(img/Diseño\ sin\ título.png);
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
      width: 180px;
      display: inline-flexbox;
      text-align: center;
      font-size: 1.6rem;
      font-family: 'roboto';
  }
  input {
      border: 2px solid #ccc;
      font-size: 1.5rem;
      font-weight: 100;
      font-family: 'roboto';
      padding: 5px;
  }
  form {
      margin: 20px auto;
      padding: 120px auto;
      border: 1px solid #c4c4c4;
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
      <h1>REGISTRO</h1>
      <form action="registro.php" name="" method="POST">
        <table border="0" align="left">
          <tr>
            <td>
              Nombre y Apellido:
            </td>
            <td>
              <label for="name"></label>
              <input type="text" name="nombre" id="name" required />
            </td>
          </tr>
          <tr>
            <td>
              Nombre de Usuario:
            </td>
            <td>
              <label for="user"></label>
              <input type="text" name="usuario" id="user" required />
            </td>
          </tr>
          <tr>
            <td>
              Contraseña:
            </td>
            <td>
              <label for="password"></label>
              <input type="password" name="password" id="password" required />
            </td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">
              <input type="submit" name="enviar" id="enviar" value="Registrarse" />
            </td>
            <td align="center">
              <input type="reset" name="borrar" id="borrar" value="Restablecer" />
            </td>
          </tr>
        </table>
      </form>
    </body>

</html>

</html>