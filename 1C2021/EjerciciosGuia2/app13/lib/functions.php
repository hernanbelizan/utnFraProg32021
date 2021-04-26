<?php

function cantidadCaracteres($palabra,$max){
    
    $cantidadCaracteres = strlen($palabra);
    $intMax = intVal($max);
    //var_dump($max);
    echo "<br/>";
    //var_dump($cantidadCaracteres);

    if($cantidadCaracteres == $intMax){
        return "La cantidad de palabra es valida " . "<br/>"; 
    
    }else{
        return "La cantidad de palabra no es valido "."<br/>";
    }

}

function palabraValida($palabra){
    $palabrasValidas = array("Recuperatorio","Parcial","Programacion");

    foreach ($palabrasValidas as $value) {
        # code...
        if($palabra == $value){
            return 1;
        }else
            return 0;
    }

}


?>
