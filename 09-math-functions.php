<?php
echo "<h1>FUNCIONES MATEMATICAS</h1>";

echo "COMUNES<br>";
echo "<code> 10.5 % 3.1 --> </code> el operador aritmetico (<code>%</code>) solo toma en consideración los numeros enteros, devolviendo: ".(10.5%3.1)."<br>";

echo "<code> fmod(10.5, 3.1) --> </code> Residuo de divisiones decimales: ".fmod(10.5, 3.1)."<br>";

echo "<code> abs(-10) --> </code> Valor Absoluto: ".abs(-10)."<br>";

echo "<code> max(5, 4, 6, 3) --> </code> Devuelve el valor máximo de un conjunto de números: ".max(5, 4, 6, 3)."<br>";

echo "<code> min(5, 4, 6, 3) --> </code> Devuelve el valor mínimo de un conjunto de números: ".min(5, 4, 6, 3)."<br><br>";


echo "REDONDEO<br>";
echo "<code> roun(10.639) --> </code> Redondea un número: ".round(10.639)."<br>";

echo "<code> roun(10.639, 2) --> </code> Se le puede indicar el numero de decimales: ".round(10.639, 2)."<br>";

echo "<code> floor(10.639) --> </code> Redondea al número entero inferior más próximo: ".floor(10.639)."<br>";

echo "<code> ceil(11.639) --> </code> Redondea al número entero superior más próximo: ".ceil(11.639)."<br><br>";


echo "POTENCIACIÓN Y RAÍCES<br>";
echo "<code> pow(2, 3) --> </code> Potencia: ".pow(2,3)."<br>";

echo "<code> exp(1) --> </code> Devuelve (<i>e</i>) elevado a una potencia: ".exp(1)."<br>";

echo "<code> sqrt(16) --> </code> Raíz cuadrada: ".sqrt(16)."<br>";

echo "<code> hypot(3, 4) --> </code> Devuelve la hipotenusa formada por dos catetos: ". hypot(3, 4)."<br><br>";


echo "LOGARITMOS:<br>";
echo "<code> log() --> </code> logaritmo natura (base <i>e</i>)<br>";

echo "<code> log10() --> </code> logaritmo base 10<br><br>";


echo "FUNCIONES TRIGONOMETRICAS<br>";
echo "<code> sin() --> </code> Seno de un ángulo.<br>";
echo "<code> cos() --> </code> Coseno de un ángulo.<br>";
echo "<code> tan() --> </code> Tangente de un ángulo.<br>";
echo "<code> asin() --> </code> Arco seno de un ángulo.<br>";
echo "<code> acos() --> </code> Arco coseno de un ángulo.<br>";
echo "<code> atan() --> </code> Arco tangente de un ángulo.<br>";
echo "<code> deg2rad() --> </code> Convierte grados a radianes.<br>";
echo "<code> rad3deg() --> </code> Convierte radianes a grados.<br><br>";


echo "ALEATORIEDAD<br>";
echo "· Número aleatorio más grande que se puede generar:<br>";
echo "<code>mt_getrandmax() --> </code>".mt_getrandmax()."<br><br>";

echo "1. Número aleatorio entre 0 y mt_getrandmax(): <br>";
echo "<code> rand() --> </code>".rand()."<br>";
echo "<code> mt_rand() --> </code>".mt_rand()."<br><br>";

echo "2. Número aleatorio entre dos enteros.<br>";
echo "<code> rand(10, 20) --> </code>".rand(10, 20)."<br>";
echo "<code> mt_rand(10, 20) --> </code>".mt_rand(10, 20)."<br><br>";

echo "3. Número aleatorio entre 0 y 1:<br>";
echo "<code> rand()/mt_getrandmax() --> </code>".rand()/mt_getrandmax()."<br>";
echo "<code> mt_rand()/mt_getrandmax() --> </code>".mt_rand()/mt_getrandmax()."<br>";

echo "Para obtener un numero aleatoro decimal, hay q crear dicha función, lo cual se verá mas adelante.<br><br>";


echo "CONSTANTES<br>";
echo "<code>M_PI --> </code> (π): ".M_PI."<br>";
echo "<code>M_E --> </code> (<i>e</i>): ".M_E."<br>";


echo "FORMATEAR NÚMEROS<br>";
echo "1. <code>number_format(1234567.89) --> </code>".number_format(1234567.89)."<br>";
echo "2. <code>number_format(1234567.89, 2) --> </code>".number_format(1234567.89, 2)."<br>";
echo "3. <code>number_format(1234567.89, 2, \",\", \".\") --> </code>".number_format(1234567.89, 2, ",", ".")."<br><br>";

?>