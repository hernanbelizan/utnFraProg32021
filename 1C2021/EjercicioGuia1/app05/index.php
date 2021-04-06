<?php

//Hernán Matias Belizán

// Aplicación Nº 5 (Números en letras)
// Realizar un programa que en base al valor numérico de una variable ​$num​, pueda mostrarse
// por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
// entre el 20 y el 60.
// Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

//tener switch de unidades y de decenas

$num = random_int(20, 60);
//$num = 60;
$numString = (string)$num;
$miArr = str_split($numString);

$unidades = array('1'=>'y uno','2'=>'y dos','3'=>'y tres','4'=>'y cuatro','5'=>'y cinco','6'=>'y seis','7'=>'y siete','8'=>'y ocho','9'=>'y nueve','0'=>''); 
$decenas = array('2'=>'veinte','3'=>'treinta','4'=>'cuarenta','5'=>'cincuenta','6'=>'sesenta');

// var_dump($numString);
// var_dump($decenas);
// var_dump($unidades);

$unidad;
$decena;

// var_dump($unidad);
// var_dump($decena);

foreach ($decenas as $key => $value) {
    # code...
    if($miArr[0] == $key){
        $decena = $value;
    }
    
}

foreach ($unidades as $key => $value) {
    # code...
    if($miArr[1] == $key){
        $unidad = $value;
    }
    
}

echo $decena ." ".  $unidad;



?>