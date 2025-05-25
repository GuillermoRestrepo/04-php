<?php
/*  OPERADORES LOGICOS  */
// Operador AND (&&)
echo "1. (&&): Si ambos valores son verdaderos, el resultado es verdadero, el resto será falso.<br><br>";

// Operador OR (||)
echo "2. (||): Si ambos valores son flasos, el resultado será falso, el resto será verdadero.<br><br>";

// Operador NOT (!)
echo "3. (!): convierte verdadero en falso y falso en verdadero.<br><br>";

// Operador XOR
echo "4. (xor): si ambos valores sonn iguales, el resultado será verdadero, el resto será falso.<br><br>";

/*  VALORES QUE PUEDEN SER CONVERTIDOS A BOOLEANOS  */
echo "Cadenas vacías = falso<br>";
$falso1= "";
echo "<code>\"\"= ";
var_dump((bool) $falso1);
echo "</code><br><br>";

echo "Cadenas NO vacías = verdadero<br>";
$verdadero1= "rgrgajgpf";
echo "<code>\"rgrgajgpf\"= ";
var_dump((boolean) $verdadero1);
echo "</code><br><br>";

echo "Valores nulos= falso<br>";
$falso2= null;
echo "<code>null= ";
var_dump(boolval($falso2));
echo "</code><br><br>";

echo "El número cero o menos cero = falso<br>";
$falso3= 0;
echo "<code>0= ";
var_dump((bool) $falso3);
echo "</code><br>";
$falso4= -0;
echo "<code>-0= ";
var_dump((bool) $falso4);
echo "</code><br><br>";

echo "Cualquier número diferente de cero = verdadero<br>";
$falso5= -3;
$falso6= 5.3;
echo "<code>!!-3= ";
var_dump((bool) $falso5);
echo "</code><br>";
echo "<code>!!5.3= ";
var_dump((bool) $falso6);
echo "</code><br>";
?>