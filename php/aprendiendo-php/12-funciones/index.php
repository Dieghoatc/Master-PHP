<?php

    /*FUNCIONES: BLOQUE DE CODIGO QUE SE PUEDE
EJECUTAR CUANTAS VECES SE REQUIERA UNA OPERACION
PARA REUTILIZAR CODIGO*/

    /*Es un conjunto de instrucciones agrupadas bajo
un nombre concreto y se pueden reutilizar solamente
invocando a la funcion tantas veces como queramos

function nombreDeMiFuncion ($parametros){
   conjunto de instrucciones
}
    para ejecutarla:
    nombreDeMiFuncion ($mi_parametro);
    */

    //Ejemplo 1
function muestraNombres (){
    echo "<br>";
    echo "Diego<br>";
    echo "Armando<br>";
    echo "Tejedor<br>";
    echo "Cortes<br>";
    echo "<hr>";
}
//para invocarla
/*muestraNombres();
muestraNombres();
    muestraNombres();
    muestraNombres();*/

    //Ejemplo 2

function tabla($numero){
    echo "<h3>Tabla de multiplicar de $numero</h3>";
    for ($i = 1; $i<=10; $i++){
        $oper = $numero * $i;
        echo "$numero x $i = $oper <br>";
    }
}
if (isset($_GET['numero'])){
    tabla ($_GET['numero']);
}else {
    //echo "<h2>No hay numero en la URL</h2>";
}

//Ejemplo 3

function calculadora($numero1,$numero2, $negrita){
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if ($negrita){
        $cadena_texto .= "<h1>";
    }
    $cadena_texto .= "<br>";
    $cadena_texto .= "Suma : $suma <br>";
    $cadena_texto .= "Resta : $resta <br>";
    $cadena_texto .= "Multi: $multi <br>";
    $cadena_texto .= "Division: $division <br>";
    $cadena_texto .= "<br>";

    if ($negrita){
        $cadena_texto .= "<h1>";
    }
    $cadena_texto .= "<hr>";

    return $cadena_texto;
}
echo calculadora(10,20,true);


//calculadora(5,6, true);
//calculadora(6,9);

//return
    //Ejemplo4

    function getNombre($nombre){
        $texto = "El nombre es: $nombre";
        return $texto;
    }
    function getApellido($apellido){
        $texto = "El nombre es: $apellido";
        return $texto;
    }

function devuelveElNombre($nombre, $apellido){
    $texto = getNombre($nombre)
        ."<br>".
        getApellido($apellido);
    return $texto;
}
echo devuelveElNombre("dieghoatc","tejedor");

//la funcion siempre debe devolver algo
