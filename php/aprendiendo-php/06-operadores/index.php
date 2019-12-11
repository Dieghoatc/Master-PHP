<?php
//operadores aritmeticos

$numero1 = 55;
$numero2 = 33;
echo '<br>';
echo 'Suma: '.($numero1+$numero2). '<br>';
echo 'Resta: '. ($numero1-$numero2).'<br>';
echo 'Multiplicacion: '.($numero1*$numero2).'<br>';
echo 'Division: '.($numero1/$numero2).'<br>';
echo 'Modulo: '. ($numero1%$numero2).'<br>';


//Incremento - decremento

$year = 2019;
//incremento
$year ++;
echo "<h1>$year</h1><br>";
//Decremento
$year --;
echo "<h1>$year</h1><br>";

//Pre-inremento 1 + $year
++$year;
echo "<h1>$year</h1><br>";

//Pre-decremento
--$year;
echo "<h1>$year</h1><br>";

//Operadores de Asignacion

$edad = 55;
echo $edad .'<br>';

// $edad = $edad + 5;
echo ($edad += 5);