<?php

    /*Mostrar todos los numeros entre dos numeros impares que nos
lleguen por la URL($_GET)*/


    if (isset($_GET['number1']) && isset($_GET['number2'])){
        $number1 = (int)$_GET['number1'];
        $number2 = (int)$_GET['number2'];

        if ($number1 < $number2) {
            for ($i = $number1; $i <= $number2; $i++) {
                if ($i % 2 != 0 ) {
                    echo "<p>$i</p>";
                }else {
                    echo "<p style='color: red'>$i</p>";
                }
            }
        }else {
            echo "El numero 1 debe ser menor al numero 2";
        }
    }