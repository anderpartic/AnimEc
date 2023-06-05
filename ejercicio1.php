<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 | AnimEc</title>
        <link rel="stylesheet" href="css/root.css" />
    </head>
</head>

<header>
    <div class="logo logo-main">AnimEc</div>
    <div class="nav">
        <div class="wrap">
            <div class="logo logo-small">AnimEc</div>
            <nav>
                <ul class="menu-horizontal">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="">Ejercicios</a>
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
                    <li><a href="https://youtu.be/Fve_lHIPa-I" target="_blank">Música</a></li>
                </ul>
            </nav>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js">
    </script>
    <script src="js/script.js"></script>
</header>

<body>
    <div class="main">
        <h1>Ejercicio 1</h1>
        <hr>
        <p style="padding: 8%; font-size: 50px;">
            <?php
            $sms = "¡Hola Mundo!";
            echo "$sms"
            ?>
        </p>

        <br>
    </div>
</body>


<footer>
    <an>
        Copyright © 2023 | AnimEc.

    </an>

</footer>

</html>