<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Contraseña | AnimEc</title>
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
    <div class="main" style="padding-bottom: 25%;">
        <h1>Generador de contraseñas</h1>

        <hr />
        <style>
            php {
                text-align: center;
                color: white;
                font-family: 'Courier New', Courier, monospace;
                font-size: 20px;
            }
            h2{
                margin-top: 1%;
            }
            ul{
                margin-top: 1%;
            }
        </style>
        <php>
            
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $longitud = $_POST["longitud"];
        $incluir_caracteres_especiales = isset($_POST["caracteres_especiales"]);

        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ($incluir_caracteres_especiales) {
            $caracteres .= '!@#$%^&*()';
        }

        $contrasena = '';
        for ($i = 0; $i < $longitud; $i++) {
            $indice = random_int(0, strlen($caracteres) - 1);
            $contrasena .= $caracteres[$indice];
        }

        echo "<h2>Contraseña generada:</h2>";
        echo "<p>" . $contrasena . "</p>";
    }
    ?>
        </php>


        <br />
    </div>
</body>

<footer>
    <an> Copyright © 2023 | AnimEc. </an>
</footer>

</html>