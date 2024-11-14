<?php
//IF y ELSE
$edad = 51;
$name = "ximena";
if ($edad >= 18 & $edad <= 50) {
    echo "$name es mayor de edad";

}elseif ($edad < 18) {
    echo "$name es menor de edad";
} else {
    echo "$name es adulta mayor<br>";
}
//SWITCH
$semana = "miercoles";
switch ($semana){
    case "lunes":
        echo "Lunes es el primer dia de la semana";
        break;
    case "martes":
        echo "Martes es el segundo dia de la semana";
        break;
    case "miercoles":
        echo "Miercoles es el tercer dia de la semana";
        break;
    case "jueves":
        echo "Jueves es el cuarto dia de la semana";
        break;
    case "viernes":
        echo "Viernes es el quinto dia de la semana";
        break;
    case "sabado":
        echo "Sabado es el sexto dia de la semana";
        break;
    case "domingo":
        echo "Domingo es el septimo dia de la semana";
        break;
    default:
         echo "No existe este dia de la semana";
}

//OPERADOr TERNARIO
$ximena = false ? "verdadero" : "<br>falso";
echo $ximena;

//OPERADOR NULL COALESCE

echo isset($variable) ? $variable : '<br>No existe';

//OPERADOR SPACESHIP

$x = 9;
$j = 6;
$f = $x <=> $j;
echo "<br>x es mayor que j".$f;
$f = $j <=> $x;
echo "<br>j es menor que x".$f;
$f = $x <=> $x;
echo "<br>las dos variables son iguales";

