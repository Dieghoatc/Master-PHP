<?php

    /*Imprimir por pantalla todas las tablas de multiplicar
    dentro de una tabla html*/

    //Tabla de 1

echo "<table border = '1'> <tr>"; //inicio de la tabla
    echo "<tr>"; // Inicio La fila 1 de celdas
    for ($cabecera = 1; $cabecera <= 10; $cabecera ++){
        echo "<td>Tabla del $cabecera</td>";
    }
    echo "</tr>"; // cierre fila 1 de celdas

    echo "<tr>"; //Inicio fila 2
        for ($i = 1; $i<=10; $i++){
            echo "<td>";
            for ($x = 1; $x<=10; $x++){
                echo "$i x $x = ". $i*$x ."<br>";
            }
            echo "</td>";
        }
    echo "</tr>"; //Cierre fila 2

echo "</table>";

