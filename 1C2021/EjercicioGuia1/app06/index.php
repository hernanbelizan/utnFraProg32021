<?php
//Hernán Matias Belizán 

// Aplicación Nº 6 (Carga aleatoria)
// Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
// función ​rand​). Mediante una estructura condicional, determinar si el promedio de los números
// son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
// resultado


$arrayEntrada = array();
$numMax = 5;

//Carga aleatoria de array
for ($i=0; $i < $numMax; $i++) { 
    $arrRand = rand(1,10);
    array_push($arrayEntrada,$arrRand);
}

//Busco el promedio
$cargaPromedio = 0;
$rstaPromedio = 0;
foreach ($arrayEntrada as $value) {
    
    $cargaPromedio += $value;
}

$rstaPromedio = $cargaPromedio / $numMax;

//Determino el promedio mayor, menor o igual a 6

if( $rstaPromedio < 6 ){
    echo "Promedio = $rstaPromedio" . "<br>";
    echo "El propmedio es menor a 6 ";
} else if( $rstaPromedio > 6 ){
    echo "Promedio = $rstaPromedio" . "<br>";
    echo "El propmedio es mayor a 6 ";
} else{
    echo "Promedio = $rstaPromedio" . "<br>";
    echo "El propmedio es 6 ";
}

//retorno respuesta

?>