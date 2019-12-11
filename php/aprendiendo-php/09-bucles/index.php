<?php
 /* BUCLE WHILE:
    ESTRUCTURA DE CONTROL QUE ITERA O REPITE LA EJECUCION
    DE UNA SERIE DE INSTRUCCIONES TANTAS VECES COMO SEA
    NECESARIO, EN BASE A UNA CONDICIÓN

    while(condicion){
        bloque de instrucciones
    }
 */
 $number = 0;
 echo "<hr>";
 while ($number <= 100){
     echo $number;
     if ($number != 100){
         echo ", ";
     }
     $number ++;
 }
    echo "<hr>";

 //Ejemplo tabla de multiplicar

    //isset comprueba si existe una variable o no

if ($_GET['number']){
    //castear, cambiar tipo de dato
    $number = (int)$_GET['number'];
}else {
    $number = 1;
}
echo "<h1>Tabla de multiplicar $number </h1>";

$count = 0;
while ($count <= 10){
    echo "$number x $count = " .($count*$number). "<br>";
    $count ++;
}

echo "<hr>";
// DO WHILE

/*do {
    //instrucciones
}while (condicion){

}*/
$edad = 18;
$contador = 1;
do {
    echo "Tienes acceso $contador";
    echo "<br>";
    $contador ++;
}while($edad >= 18 && $contador <= 10);