<?php
/*Mostrar todos los numeros entre dos numeros que nos
lleguen por la URL($_GET)*/

if (isset($_GET['number1']) && isset($_GET['number2'])){
    $number1 = (int)$_GET['number1'];
    $number2 = (int)$_GET['number2'];

    if ($number1 < $number2) {
        for ($i = $number1; $i <= $number2; $i++) {
            echo "<br>";
            echo $i;
        }
    }else {
        echo "El numero 1 debe ser menor al numero 2";
    }
}