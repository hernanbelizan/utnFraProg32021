<?php
//Hernán Matias Belizán

// Aplicación Nº 2 (Mostrar fecha y estación)
// Obtenga la fecha actual del servidor (función ​date​) y luego imprímala dentro de la página con
// distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
// año es. Utilizar una estructura selectiva múltiple.

/*
    Estaciones del año:
        Verano (21 de diciembre a 20 de marzo).
        Otoño (21 de marzo a 20 de junio).
        Invierno (21 de junio a 20 de septiembre).
        Primavera (21 de septiembre a 20 de diciembre).
*/

$diaDeHoy = date('d-m-Y');

echo "Formato de fechas";
echo "<br>";
echo date('d-m-Y') . " ; " . date('m-d-Y') . " ; " . date('Y-m-d');
echo "<br>";
echo date('d/m/Y') . " ; " . date('m/d/Y') . " ; " . date('Y/m/d');
echo "<br>";
echo date('d.m.Y') . " ; " . date('m.d.Y') . " ; " . date('Y.m.d');
echo "<br>";


echo "Calculo estacion del año";
echo "<br>";

$mes = date('m');
$dia = date('d');
$estacion;

switch ($mes) {
    case '12':
        # code...
        if($dia >= 21){
            $estacion = "Verano";   
        }else
            $estacion = "Primavera";
        break;

    case '01':
        # code...
        $estacion = "Verano";
        break;

    case '02':
        # code...
        $estacion = "Verano";
        break;
    case '03':
        # code...
        if($dia >= 21){
            $estacion = "Otoño";   
        }else
            $estacion = "Verano";
        break;

    case '04':
        # code...
        $estacion = "Otoño";
        break;

    case '05':
        # code...
        $estacion = "Otoño";
        break;

    case '06':
        # code...
        if($dia >= 21){
            $estacion = "Invierno";   
        }else
            $estacion = "Otoño";
        break;

    case '07':
        # code...
        $estacion = "Invierno";
        break;

    case '08':
        # code...
        $estacion = "Invierno";
        break;

    case '09':
        # code...
        if($dia >= 21){
            $estacion = "Primavera";   
        }else
            $estacion = "Invierno";
        break;

    case '10':
        # code...
        $estacion = "Primavera";
        break;

    default:
        # code...
        $estacion = "Primavera";
        break;
}

echo $estacion;

?>