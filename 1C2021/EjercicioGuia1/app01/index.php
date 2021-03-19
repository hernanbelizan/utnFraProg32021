<?php
//Hernán Matias Belizán

// Aplicación Nº 1 (Sumar números)
// Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
// supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
// se sumaron

$num=0;
$suma=0;

for ($i=0; $i <1000 ; $i++) { 
    # code...
    $suma = $i + $num;
    if ($suma < 1000 || $suma == 1000) {
        # code...
        echo " $num + $i = $suma";
        echo "<br>";
        $num = +$i;
    }
}
echo "Proceso finalizado. El total de numero sumados es de:" .  $num;


?>