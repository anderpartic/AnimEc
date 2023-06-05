<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Formulario | AnimEc</title>
  <link rel="stylesheet" href="css/root.css" />
</head>
<header>
  <div class="logo logo-main">AnimEc</div>
  <div class="nav">
    <div class="wrap">
      <div class="logo logo-small">AnimEc</div>
      <nav>
        <ul class="menu-horizontal">
          <li><a href="index.html">Inicio</a></li>
          <li>
            <a href="">Ejercicios</a>
            <ul class="menu-vertical">
              <li><a href="ejercicio1.php">Ejercicio 1</a></li>
              <li><a href="ejercicio2.html">Ejercicio 2</a></li>
              <li><a href="ejercicio3.html">Ejercicio 3</a></li>
              <li><a href="ejercicio4.html">Ejercicio 4</a></li>
              <li><a href="ejercicio6.html">Ejercicio 6</a></li>
              <li><a href="ejercicio7.html">Ejercicio 7</a></li>
              <li><a href="ejercicio8.html">Ejercicio 8</a></li>
            </ul>
          </li>
          <li>
            <a href="https://youtu.be/Fve_lHIPa-I" target="_blank">Música</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="js/script.js"></script>
</header>

<body>
  <div class="main">
    <h2 style="color: white; text-align: center; font-family: 'Courier New', Courier, monospace; font-size: 40px;">Datos enviados</h2>
    <?php
    // Verificar si se enviaron los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = $_POST["nombre"];
      $email = $_POST["email"];
      $mensaje = $_POST["mensaje"];

      echo "<p><strong>Nombre:</strong> $nombre</p>";
      echo "<p><strong>Correo electrónico:</strong> $email</p>";
      
      echo "<p><strong>Mensaje:</strong><br> $mensaje</p>";

    }
    ?>
  </div>
</body>

<footer>
  <an> Copyright © 2023 | AnimEc. </an>
</footer>

</html>