<?php
    //Condicionales
    /*
    if (condicion){
        instruccion;
    }else{
        otra instruccion;
    }*/

    /* OPERADORES DE COMPARACION

        == igual
        === identico
        ?= diferente
        <> diferente
        != no identico
        < menor que
        > mayor que
        <= menor o igual que
        >= mayor igual que

    */
    echo "<br>";
    $color = 'verde';
    if ($color == 'rojo') {
        echo "El color es rojo";
    } else {
        echo "El color no es rojo";
    }

    echo "<br>";

    $year = 2019;
    if ($year == 2019) {
        echo "Estamos en 2019";
    }

    echo "<hr>";
    $country = "Neerlandes";
    if ($country == "Spain" || $country == "Colombia" || $country == "Peru") {
        echo "In this Country, Spanish is spoken ";
    } else {
        echo "In this Country, spanish is not spoken";
    }

///////////////////////////////////////////////////////////////////
    echo "<hr>";
// SWITCH

    $day = 7;

    switch ($day) {
        case 1 :
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Is not existed";
    }

    //GOTO

    goto ejecuta_aqui;

    echo "<h1>Instruction 1 </h1>";
    echo "<h1>Instruction 2 </h1>";
    echo "<h1>Instruction 3 </h1>";
    echo "<h1>Instruction 4 </h1>";

    ejecuta_aqui:
    echo "<h1>Me he saltado 4 echos </h1>";