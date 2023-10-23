<!DOCTYPE html>
<html>
<head>
    <title>Práctica de <link>PHP</link></title>
    <style>
        html{
            background-color: black;
        }
        body {
            color: white;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 5px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .resultados {
            text-align: center;
            color: greenyellow;

        }
    </style>
</head>
<body>
    <h1>Práctica de <link>PHP</link></h1>

    <h2>Ejercicio 1: Calculadora de gastos de envío</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="precio">Precio total de la cesta:</label>
        <input type="text" name="precio" id="precio" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precioCesta = $_POST["precio"];

        if ($precioCesta < 50) {
            $gastosEnvio = 3.95;
        } elseif ($precioCesta < 75) {
            $gastosEnvio = 2.95;
        } elseif ($precioCesta < 100) {
            $gastosEnvio = 1.95;
        } else {
            $gastosEnvio = 0;
        }

        echo "<div class='resultados'>";
        echo "<p>Precio de la cesta: " . $precioCesta . "€</p>";
        echo "<p>Gastos de envio: " . $gastosEnvio . "€</p>";
        echo "</div>";
    }
    ?>

    <h2>Ejercicio 2: Calculadora de gastos de envío (con switch-case)</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="precio_switch">Precio total de la cesta:</label>
        <input type="text" name="precio_switch" id="precio_switch" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precioCestaSwitch = $_POST["precio_switch"];

        switch (true) {
            case $precioCestaSwitch < 50:
                $gastosEnvioSwitch = 3.95;
                break;
            case $precioCestaSwitch < 75:
                $gastosEnvioSwitch = 2.95;
                break;
            case $precioCestaSwitch < 100:
                $gastosEnvioSwitch = 1.95;
                break;
            default:
                $gastosEnvioSwitch = 0;
                break;
        }

        echo "<div class='resultados'>";
        echo "<p>Precio de la cesta: " . $precioCestaSwitch . "€</p>";
        echo "<p>Gastos de envio: " . $gastosEnvioSwitch . "€</p>";
        echo "</div>";
    }
    ?>

    <h2>Ejercicio 3: Cálculo del mayor de 5 números</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1" required><br>
        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2" required><br>
        <label for="num3">Número 3:</label>
        <input type="text" name="num3" id="num3" required><br>
        <label for="num4">Número 4:</label>
        <input type="text" name="num4" id="num4" required><br>
        <label for="num5">Número 5:</label>
        <input type="text" name="num5" id="num5" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];

        $mayor = $num1;

        $numeros = [$num2, $num3, $num4, $num5];

        foreach ($numeros as $numero) {
            if ($numero > $mayor) {
                $mayor = $numero;
            }
        }

        echo "<div class='resultados'>";
        echo "<p>El numerito mas graaande: " . $mayor . "</p>";
        echo "</div>";
    }
    ?>

    <h2>Ejercicio 4: Matriz con bucle foreach</h2>

    <?php
    $matriz = [[3, 1], [2, 0]];

    echo "<div class='resultados'>";
    echo "<table>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $elemento) {
            echo "<td>" . $elemento . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>

    <h2>Ejercicio 5: Suma de matrices</h2>

    <?php
    $matriz1 = [[1, 0], [0, 1]];
    $matriz2 = [[0, 1], [1, 0]];

    $resultado = [];

    for ($i = 0; $i < count($matriz1); $i++) {
        for ($j = 0; $j < count($matriz1[$i]); $j++) {
            $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
        }
    }

    echo "<div class='resultados'>";
    echo "<table>";
    foreach ($resultado as $fila) {
        echo "<tr>";
        foreach ($fila as $elemento) {
            echo "<td>" . $elemento . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
</body>
</html>