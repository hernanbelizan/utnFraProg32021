<?php

function potencia($num1,$num2){

    $resultado = pow($num1,$num2);
    return $resultado;
}

function mostrarPotencias($arrayNumeros,$arrayPotencia){
    

    foreach ($arrayNumeros as $num) {
        # code...

        echo "Potencias del 1 al 4 de $num==> " . "<br/>";

        foreach ($arrayPotencia as $potencia) {
            # code...
            echo "<br/>";

            echo potencia($num,$potencia);

            echo "<br/>";
        }
    }
}

?>