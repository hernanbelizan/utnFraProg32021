<?php

// Aplicación Nº 14 (Par e impar)
// Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
// si este número es par ó FALSE si es impar.
// Reutilizando el código anterior, crear la función esImpar


include_once "lib/functions.php";
//*******************************
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['numero'])) {

        $numero = $_POST['numero'];
        echo "<br/>";        

        if (esPar($numero)) {
            echo "Funcion esPar " . "<br/>";
            echo "El $numero es Par " . "<br/>";
        }
        if (esImpar($numero)) {
            echo "Funcion esImpar " . "<br/>";
            echo "El $numero es impar " . "<br/>";
        }

        
    } else {

        echo "<br/>";
        echo "No todos los parametros estan cargados. Vuelva a intentar";
        echo "<br/>";
    }
} else {

    echo "<br/>";
    echo "Utilice el metodo POST";
    echo "<br/>";
}

//*******************************
