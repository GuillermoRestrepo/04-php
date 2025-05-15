<?php
////  NOMENCLATURA DE LAS CONSTANTES EN PHP  ////
/*
1. Las constantes NO llevan el signo de dolar ($).

2. Deben de iniciar con una letra o un guión bajo (_), no pueden iniciar con números.

3. Deben de ser todas sus letras en mayusculas y el unico caracter especial valido es el guión bajo (_).

4. Las palabras deben de estar separadas por un guión bajo (NOMBRE_USUARIO).

5. No permiten la asignación de otro valor después de ser definidas.
*/


//// COMO SE DEFINE UNA CONSTANTE  ////
/*
    Forma tradicional:
Se pueden definir de forma global, y dentro de funciones.

*/
define("NOMBRE", "Guillermo");
echo NOMBRE."<br>";

/*
    Forma Moderna (Disponible desde php 5.3)
Se pueden definir de forma global y dentro de clases.
*/
const PI= 3.1416;
echo PI."<br>"

/*
    NOTAS:
· Si se define una constante de forma global, esta puede ser utilizada dentro de funciones y clases, sin importar que haya sido definida con (define) o con (const).

· A partir de php 7, se pueden definir constantes de tipo (array), se verá proximamente.

· Existen constantes que php tienen definidas por defecto: invetigar cuales son y para q sirven.
*/
?>