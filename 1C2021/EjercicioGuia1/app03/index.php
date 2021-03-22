<?php
//Hernán Matias Belizán

// Aplicación Nº 3 (Obtener el valor del medio)
// Dadas tres variables numéricas de tipo entero ​$a​, ​$b​ y ​$c​ realizar una aplicación que muestre
// el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
// variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
// Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
// Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”

// Variables
$a = 2;
$b = 3;
$c = 1;


echo "<br>";
echo "Se hara una validacion de cual de los numeros es el mayor, cual el menor y cual es el del medio";
echo "<br/>";


//Arreglar porque hay mas opciones
/*
test para probar
135
153
531
513
*/
if ($a < $b && $a < $c || $b < $c && $b > $a ) {

    echo " $a es el valor del medio";
    echo "<br>";

} else if ($b > $a && $b < $c || $c > $a && $a < $b) {

    echo " $b es el valor del medio";
    echo "<br>";

} else if ($c > $a && $c < $b || $b > $a && $c < $a){

    echo " $c es el valor del medio";
    echo "<br>";

} else {
    echo"No hay valor del Medio";
    echo "<br>";
}


?>
