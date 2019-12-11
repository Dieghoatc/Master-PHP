<?php
 //Sacar todos los numeros pares que hay del 1 al 100
    //Pintar de color rojo los pares

for ($i = 0; $i<= 100; $i++){
    if ($i % 2 == 0){
        echo "<h1 style='color: red'>$i</h1>";
    }else {
        echo "<h1>$i</h1>";
    }
}