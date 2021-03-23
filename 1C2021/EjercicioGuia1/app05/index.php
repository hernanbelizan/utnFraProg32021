<?php

//Hernán Matias Belizán

// Aplicación Nº 5 (Números en letras)
// Realizar un programa que en base al valor numérico de una variable ​$num​, pueda mostrarse
// por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
// entre el 20 y el 60.
// Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

//tener switch de unidades y de decenas
$num = random_int(20, 60);
$numString = (string)$num;
$unidades = substr($numString,0);
$decenas = substr($numString,-1);

$unidad;
$decena;

switch ($unidades) {
    case '1':
        $unidad = " y uno";
        break;
    case '2':
        $unidad = " y dos";
        break;
    case '3':
        $unidad = " y tres";
        break;
    case '4':
        $unidad = " y cuatro";
        break;
    case '5':
        $unidad = " y cinco";
        break;
    case '6':
        $unidad = " y seis";
        break;
    case '7':
        $unidad = " y siete";
        break;
    case '8':
        $unidad = " y ocho";
        break;
    case '9':
        $unidad = " y nueve";
        break;
    default:
        break;
}

switch ($decenas) {
    case '2':
        $decena = "veinte";
        break;

    case '3':
        $decena = "treinta";
        break;

    case '4':
        $decena = "cuarenta";
        break;

    case '5':
        $decena = "ciencuenta";
        break;

    case '6':
        $decena = "sesenta";
        break;

    default:
        break;
}

echo $decena . $unidad;



?>