<?php
/*Imprimir por pantalla los cuadrados de los 40 primeros numeros naturales.
utilizando el bucle while*/

/*$number = 0;
$res = 0;
while ($number <= 40) {

    $res = $number * $number;
    echo "<h1>El cuadrado de  $number es : $res </h1>";
    $number ++;
}*/

// con for

for ($i = 0; $i <= 40; $i++){
    echo "<h1>El cuadrado de $i es: ". $i*$i. "</h1>";

}