<?php
$valor1= 5;
$valor2= 3;

$suma= $valor1+$valor2;

$resta= $valor1-$valor2;

$multiplicacion= $valor1*$valor2;

$division= $valor1/$valor2;

// El residuo solo funciona con valores enteros.
$residuo= $valor1%$valor2; 

// La potencia esá disponible desde la version 5.6
$potencia= $valor1**$valor2;

echo "El resultado de la suma de $valor1 más $valor2 es: $suma.<br>";

echo "El resultado de la resta de $valor1 menos $valor2 es: $resta.<br>";

echo "El resultado de la multiplicación de $valor1 por $valor2 es: $multiplicacion.<br>";

echo "El resultado de la división de $valor1 entre $valor2 es: $division.<br>";

echo "El residuo de la división de $valor1 entre $valor2 es: $residuo.<br>";

echo "El resultado de la potencia de $valor1 elevado a $valor2 es: $potencia.<br>";
?>