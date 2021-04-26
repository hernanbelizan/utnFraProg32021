<?php

// Aplicación Nº 13 (Invertir palabra)
// Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
// función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
// deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
// “Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
// 1 si la palabra pertenece a algún elemento del listado.
// 0 en caso contrario.

include_once "lib/functions.php";


$palabra;
$max;
$palabrasValidas = array("Recuperatorio","Parcial","Programacion");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if( !empty($_POST['palabra']) && !empty($_POST['max'] )){
        
        $palabra = $_POST['palabra'];
        $max = $_POST['max'];

        echo cantidadCaracteres($palabra,$max);
        echo "<br/>";
        echo palabraValida($palabra,$max);

    }else{

        echo "<br/>";
        echo "No todos los parametros estan cargados. Vuelva a intentar";
        echo "<br/>";

    }
}else{

    echo "<br/>";
    echo "Utilice el metodo POST";
    echo "<br/>";

}

?>