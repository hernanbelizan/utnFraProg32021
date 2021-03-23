<?php

//Hernán Matias Belizán

//Aplicación Nº 4 (Calculadora)
//Escribir un programa que use la variable ​$operador​ que pueda almacenar los símbolos
//matemáticos: ‘​+​’, ‘​-​’, ‘​/​’ y ‘​*​’; y definir dos variables enteras ​$op1​ y ​$op2​. De acuerdo al
//símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
//resultado por pantalla.

$operador = '+';
$op1 = 1;
$op2 = 2;

switch ($operador) {
    case '+':
        echo "<br>";
        echo "$op1 + $op2 = " . $op1 + $op2 ."<br>";
        echo "<br>";
        break;

    case '-':
        echo "<br>";
        echo "$op1 - $op2 = " . $op1 - $op2 ."<br>";
        echo "<br>";
        break;

    case '/':
        if($op2 == 0){
            echo "No se puede dividir por cero" ."<br>";
        }else{

            echo "<br>";
            echo "$op1 / $op2 = " . $op1 / $op2."<br>";
            echo "<br>";
        }
        break;

    case '*':
        echo "<br>";
        echo "$op1 * $op2 = " . $op1 * $op2 . "<br>";
        echo "<br>";
        break;

    default:
        echo "Debe agregar un operador";
        break;
}
