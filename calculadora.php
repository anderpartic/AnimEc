<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Calculadora | AnimEc</title>
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
        <h1>Resultado</h1>
        <p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $operacion = $_POST["operacion"];
                $resultado = 0;

                if ($operacion == "suma") {
                    $resultado = $numero1 + $numero2;
                    echo "El resultado de la suma es: " . $resultado;
                } elseif ($operacion == "resta") {
                    $resultado = $numero1 - $numero2;
                    echo "El resultado de la resta es: " . $resultado;
                } elseif ($operacion == "multiplicacion") {
                    $resultado = $numero1 * $numero2;
                    echo "El resultado de la multiplicación es: " . $resultado;
                } elseif ($operacion == "division") {
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                        echo "El resultado de la división es: " . $resultado;
                    } else {
                        echo "Error: No se puede dividir entre cero.";
                    }
                }
            }
            ?>
        </p>


    </div>

</body>
<footer>
    <an> Copyright © 2023 | AnimEc. </an>
</footer>

</html>