<?php

// Aplicación Nº 7 (Mostrar impares)
// Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
// Luego imprimir (utilizando la estructura ​for​) cada uno en una línea distinta 
// (recordar que el salto de línea en HTML es la etiqueta ​<br/>​). 
// Repetir la impresión de los números utilizando
// las estructuras ​while​ y ​foreach​.

//variables:
$arrayImpares = array();

//*************************************************/
//Carga aleatoria de array
for ($i=0; $i < 10; $i++) {

    $arrRand = rand(1,100);

    if(esImpar($arrRand)){
        
        array_push($arrayImpares,$arrRand);    
    }
    
}
//*************************************************/
//funcion esImpar
function esImpar($number) {

    if($number % 2 == 1){
        return true;
    }else
        return false;
}
//*********************************************** */

//Muestro por pantalla

for ($i=0; $i <sizeof($arrayImpares) ; $i++) { 

    echo "<br/>";
    echo $arrayImpares[$i];
    echo "<br/>";
}
//*************************************************/

?>