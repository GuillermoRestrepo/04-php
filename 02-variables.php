<?php 
////  DEFINIR VARIABLES  ////
/*Para definir una variable, hay q poner el signo de dolar ($) seguido del nombre de la variable.*/

$nombre;  // Se crea.
$nombre= "Guillermo";  // Se le da valor.

$apellido= "Restrepo";  // Se crea y se le da valor.


////  TIPOS DE DATOS  ////
/*
    NOTA:
· gettype(variable): sirve para saber que tipo de dato contiene una variable.
*/

/*Tipo cadena (string)*/
$cadena= "Hola";
echo gettype($cadena), "<br>";

/*Tipo enter (integer)*/
$entero= 54;
echo gettype($entero), "<br>";

/*Tipo decimal (double)*/
$decimal= 9.1416;
echo gettype($decimal), "<br>";

/*Tipo Booleano (boolean)*/
$booleano= true;
echo gettype($booleano), "<br>";

/*Tipo Null (null)*/
$nulo1;  // aparecerá una alerta diciendo "que no está fefinido".
echo gettype($nulo1), "<br>";

$nulo2= null;
echo gettype($nulo2), "<br>";


////  CAMBIAR TIPO DE DATO DE UNA VARIABLE  ////
/*
1era - Conversion forzada.
  · (int) o (integer) convierte a Entero.

  · (float) o (double) convierte a Número decimal.

  · (string) convierte a Cadena de texto.

  · (bool) o (boolean) convierte a Booleano.

  · (unset) convierte a Devuelve null.
*/
$edad= "24.5";
echo gettype($edad), "<br>";

$edad= (int) $edad;
echo gettype($edad), "<br>";

/*
2do - Función de conversión.
  · strval()	string

  · intval()	integer

  · floatval()	float

  · boolval()	boolean

  · settype()	Cambia el tipo directamente
*/
$falso= "false";
echo gettype($falso), "<br>";

$falso= boolval($falso);
echo gettype($falso), "<br>";

/*
NOTA: EXISTEN OTROS TIPOS DE DATOS COMO (OBJECT, ARRAYS, CALLABLE) DE LOS CUALES SE HABLARÁN EN SUS TEMAS CORRESPONDIENTES.
*/
?>