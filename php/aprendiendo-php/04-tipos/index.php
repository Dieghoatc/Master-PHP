<?php


 // Para saber el tipo de variable visualmente:

$numero = 29;
$decimal= 3.14159235;
$texto = "Soy un texto";
$verdadero = true;

echo"<br>";
echo gettype($numero);
echo"<br>";
echo gettype($decimal);
echo"<br>";
echo gettype($texto);
echo"<br>";
echo gettype($verdadero);


//Para debuggear ua variable, donde muestra el valor de la variable, pero no se imprima en pantalla

$mi_nombre = "Dieghoatc";
var_dump($mi_nombre);


//Tambien se puede debbugear para que muestre los resultados por consola.