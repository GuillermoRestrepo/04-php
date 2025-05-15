<?php 
////  NOMENCLATURAS DE LAS VARIABLES EN PHP  ////
/*
1. Todas las variables deben comenzar con $.

2. El nombre de la variable debe de empezar con una letra o con un guión bajo (_).

3. Solo Pueden contener lestras, numeros y el unico caracter especial valido es el guión bajo (_).

4. PHP es case sensitive (distingue entre mayusculas y minusculas), es decir ($variable;) y ($VARIABLE;), son dos variables diferentes.

5. Hay dos estilos para definir variables en PHP:
  · Camel Case: ($nombreUsuario;)  -->  Comúnmente usado
  · Snake Case: ($nombre_usuario;)  -->  Tambien aceptado
  · NOTA: solo usar un estilo, no mezclarlos.
*/


////  DEFINIR VARIABLES  ////
/*Para definir una variable, hay q poner el signo de dolar ($) seguido del nombre de la variable.*/

$nombre;  // Se crea.
$nombre= "Guillermo";  // Se le da valor.

$apellido= "Restrepo";  // Se crea y se le da valor.


////  TIPOS DE DATOS  ////
/*
    NOTA:
· gettype(variable): muestra el tipo de dato de una variable.

· var_dump(variable): muestra el tipo de dato y el valor de la variable, y en caso como de textos o arreglos, muestra la longitud. 
*/

/*Tipo cadena (string)*/
$cadena= "Hola";
echo gettype($cadena), "<br>";
echo var_dump($cadena), "<br>";

/*Tipo enter (integer)*/
$entero= 54;
echo gettype($entero), "<br>";
echo var_dump($entero), "<br>";

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
$estado= true;
echo gettype($estado), "<br>";

$estado= (int) $estado;
echo gettype($estado), "<br>";

$estado= (string) $estado;
echo gettype($estado), "<br>";

/*
2do - Función de conversión.
  · strval()	string

  · intval()	integer

  · floatval()	float

  · boolval()	boolean

  · settype($variabel, "tioDato"), los tipos posibles de datos son:.
    · "string"
    · "integer"
    · "float"
    · "boolean"
    · "array"
    · "null"
*/
$falso= "false";
echo gettype($falso), "<br>";

$falso= settype($falso, "boolean");
echo gettype($falso), "<br>";

$falso= intval($falso);
echo gettype($falso), "<br>";

/*
NOTA: EXISTEN OTROS TIPOS DE DATOS COMO (OBJECT, ARRAYS, CALLABLE) DE LOS CUALES SE HABLARÁN EN SUS TEMAS CORRESPONDIENTES.
*/
?>