<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Multiplos | AnimEc</title>
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

        <h1>Tabla de multiplicar</h1>
        <p>
        <style>
    h2 {
        font-family: 'Courier New', Courier, monospace;
        color: white;
        text-align: center;
    }

    .tabla-container {
        display: flex;
        justify-content: center;
        margin-top: 2%;
        font-size: 25px;
    }

    table {
        font-family: 'Courier New', Courier, monospace;
        color: white;
    }
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h2>Tabla de multiplicar del número " . $numero . ":</h2>";
    echo "<div class='tabla-container'>";
    echo "<table>";
    for ($i = 1; $i <= 20; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>" . $numero . " x " . $i . "</td>";
        echo "<td>=</td>";
        echo "<td>" . $resultado . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
?>

        </p>

    </div>

</body>

<footer>
    <an>
        Copyright © 2023 | AnimEc.

    </an>

</footer>

</html>