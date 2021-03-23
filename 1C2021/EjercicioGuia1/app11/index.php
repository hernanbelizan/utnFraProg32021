<?php
//Hernán Matias Belizán 

//Aplicación Nº 11 (Potencias de números)
//Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
//que las calcule invocando la función pow)

include "libreria/funciones.php";


$miArray = array(1,2,3,4);

foreach ($miArray as $value) {
    # code...
    echo "<br>";
    echo obtenerPotencia($value);
    echo "<br>";
}

?>