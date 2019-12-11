<?php

    /*Recoger 2 numeros por la URL (parametro GET) y hacer todas las operaciones
basicas de una calculadora*/

    if (isset($_GET['number1']) && isset($_GET['number2'])) {


        $number1 = (int)$_GET['number1'];
        $number2 = (int)$_GET['number2'];

        $suma = $number1 + $number2;
        $resta = $number1 - $number2;
        $multiplicacion = $number1 * $number2;
        $division = $number1 / $number2;
        $modulo = $number1 % $number2;

        echo "<h1>Suma: " . $suma . "</h1>";
        echo "<h1>Resta: " . $resta . "</h1>";
        echo "<h1>Multiplicacion: " . $multiplicacion . "</h1>";
        echo "<h1>Division: " . $division . "</h1>";
        echo "<h1>Modulo: " . $modulo . "</h1>";
    }