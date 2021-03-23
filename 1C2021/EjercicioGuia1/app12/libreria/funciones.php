<?php

function returString($array){
    $arraySalida = array();
    $arraySize = count($array);

    var_dump($array);
    var_dump($arraySize);

    foreach ($array as $value) {
        # code...
        foreach ($arraySalida as $key => $valor) {
            # code...
            $arraySalida[$arraySize - 1] = $value;
        }
    }

    var_dump($arraySalida);
    return $arraySalida;
}

?>