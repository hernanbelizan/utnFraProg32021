<?php

// Aplicación Nº 10 (Arrays de Arrays)
// Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
// contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
// Arrays de Arrays

//Crear
$lapicera1 = array();
$lapicera2 = array();
$lapicera3 = array();

$arrayDeArrays = array();

//*************************************************************************************************************/
//cargar

$lapicera1 = ["color"=>'Rojo',"marca"=>'Bic',"trazo"=>'Fino',"precio"=>10];
$lapicera2 = ["color"=>'Azul',"marca"=>'Pelikan',"trazo"=>'Grueso',"precio"=>12];
$lapicera3 = ["color"=>'Negro',"marca"=>'Faber Castel',"trazo"=>'Fino',"precio"=>11];

array_push($arrayDeArrays,$lapicera1);
array_push($arrayDeArrays,$lapicera2);
array_push($arrayDeArrays,$lapicera3);

//*************************************************************************************************************/
//Mostrar

mostarLapicera($arrayDeArrays);

function mostarLapicera($arrayLapicera){

    foreach ($arrayLapicera as $arrayIndexado) {
        # code...
        foreach ($arrayIndexado as $key => $value) {
            # code...
            echo $key . " -->" . $value . "<br/>";
            echo "<br/>";
        }
    }
}





?>