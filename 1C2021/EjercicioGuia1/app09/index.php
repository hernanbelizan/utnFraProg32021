<?php

// Aplicación Nº 9 (Arrays asociativos)
// Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
// contenga como elementos: ‘​color’​, ‘​marca’​, ‘​trazo’​ y ‘​precio’​. Crear, cargar y mostrar tres
// lapiceras.


//Crear
$lapicera1 = array();
$lapicera2 = array();
$lapicera3 = array();

//Cargar 

$lapicera1 = ["color"=>'Rojo',"marca"=>'Bic',"trazo"=>'Fino',"precio"=>10];
$lapicera2 = ["color"=>'Azul',"marca"=>'Pelikan',"trazo"=>'Grueso',"precio"=>12];
$lapicera3 = ["color"=>'Negro',"marca"=>'Faber Castel',"trazo"=>'Fino',"precio"=>11];


//Mostrar
echo "Lapicera 1" ."<br/>";
mostrarLapicera($lapicera1);
echo "<br/>";
echo "Lapicera 2" . "<br/>";
mostrarLapicera($lapicera2);
echo "<br/>";
echo "Lapicera 3" . "<br/>";
mostrarLapicera($lapicera3);
echo "<br/>";


function mostrarLapicera($arrayLapicera){

    foreach ($arrayLapicera as $key => $value) {
        echo $key . " -->" . $value . "<br/>";
    }
}


?>