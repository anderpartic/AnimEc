<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Conversor de Unidades | AnimEc</title>
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
        <h1>Resultado de la conversión</h1>

        <hr />
        <style>
            php {
                text-align: center;
                color: white;
                font-family: 'Courier New', Courier, monospace;
                font-size: 20px;
                display: flex;
                justify-content: center;
                margin-top: 1%;
                            }
        </style>

        <php>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cantidad = $_POST["cantidad"];
                $unidad = $_POST["unidad"];
                $resultado = 0;
                if ($unidad == "pulgadas") {
                    $resultado = $cantidad * 39.37;
                    echo $cantidad . " metros equivalen a " . $resultado . " pulgadas.";
                } elseif ($unidad == "pies") {
                    $resultado = $cantidad * 3.281;
                    echo $cantidad . " metros equivalen a " . $resultado . " pies.";
                } elseif ($unidad == "centimetros") {
                    $resultado = $cantidad * 100;
                    echo $cantidad . " metros equivalen a " . $resultado . " centímetros.";
                }
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