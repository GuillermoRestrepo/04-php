<?php
$valor1= 5;
$valor2= "5";
$valor3= 10;
$valor4= "10";

echo "(<code> > </code>): Es $valor1 mayor que \"$valor4\": ";
var_dump($valor1>$valor4);
echo ".<br>";

echo "(<code> < </code>): Es \"$valor2\" menor que $valor3: ";
var_dump($valor2<$valor3);
echo ".<br>";

echo "(<code> >= </code>): Es $valor1 mayor o igual que \"$valor4\": ";
var_dump($valor1>=$valor4);
echo ".<br>";

echo "(<code> <= </code>): Es \"$valor2\" menor o igual que $valor3: ";
var_dump($valor2<=$valor3);
echo ".<br>";

echo "(<code> == </code>): Es $valor1 igual que \"$valor2\": ";
var_dump($valor1==$valor2);
echo ".<br>";

echo "(<code> === </code>): Es $valor3 estrictamente igual que \"$valor4\": ";
var_dump($valor3===$valor4);
echo ".<br>";

echo "(<code> != / <> </code>): Es $valor1 diferente que \"$valor2\": ";
var_dump($valor1<>$valor2);
echo ".<br>";

echo "(<code> !== </code>): Es $valor3 estrictamente diferente que \"$valor4\": ";
var_dump($valor3!==$valor4);
echo ".<br>";