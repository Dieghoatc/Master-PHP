<?php
/*
    for (expresion inicial, condicion, incremento contador){
        bloque de instruccion
    }*/

$res = 0;
$number = 2;

for ($i = 0; $i <= 10; $i++) {
    $res = $number * $i;
    if ($i == 5){
        echo "No se puede mostrar este numero";
        break;
    }
    echo "<h1>$number x $i = ". $res.  "</h1>";
}

//breake nos permite salir de la ejecucion de un bucle