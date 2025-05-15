<?php
////  USAR COMA (,), NO CONCATENA  ////
$nombre= "Guillermo";
echo "Nombre: ", $nombre, ". <br>";
/*La coma (,) no concatena, sirve para separar argumentos.*/


////  CONCATENAR CON PUNTO  ////
echo "Hola, ". $nombre. ". ¿Cómo estás?.". "<br>";


////  CONCATENAR CON VARIABLES DENTRO DE TEXTO  ////
echo "Hola, $nombre. ¿Cómo estás?.<br>";

/*Esto solo funciona con comillas dobles ("), si se intenta con comillas simples ('), tomará a la variable como texto.*/
echo 'Hola, $nombre. ¿Cómo estás?.<br>';

////  CONCATENAR EL TEXTO DE UNA VARIABLE  ////
$saludo= "Hola, ";
$saludo.= "¿cómo estás?, ";
$saludo.= "espero te encuentres bien.";

echo $saludo;

/*
    NOTA:
Lo más aconsejable es utilizar el punto (.), para concatenar.
*/
?>