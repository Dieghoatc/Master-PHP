<?php
/*Variables locales
    - Son las que se definen dentro de una funcion
    y no pueden ser usadas fueera de la funcion, solo estan
    disponibles dentro, A no ser que hagamos un return
Variables globales
- Las qur se declaran fera de una funcion y estan disponibles
    dentro y fuera de las funciones*/

//Variable global

$frase = "No quiero creer, quiero saber";
echo $frase;

function holamundo (){
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";
    return $year;
}
holamundo();
echo $year;