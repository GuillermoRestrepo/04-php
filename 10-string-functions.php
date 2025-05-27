<?php
echo "<h1>FUNCIONES PARA CADENAS DE TEXTO</h1>";

echo "EXTRAER UN CARACTER SEGUN SU INDICE<br>";
$cadena= "Esto es una cadena";
echo "<code> \$cadena= \"Esto es una cadena\";</code><br>";
echo "<code> \$cadena[-1] --> </code>".$cadena[-1]."<br>";


echo "<br>MAYÚSCULAS Y MINÚSCULAS<br>";
echo "<code>strtolower(\"MINÚSCULAS\") --> </code> Convierte a minúsculas: (".strtolower("MINÚSCULAS").")<br>";

echo "<code>strtoupper(\"mayúculas\") --> </code> Convierte a mayúsculas: (".strtoupper("mayúculas").")<br>";

echo "<code>ucfirst(\"primer\") --> </code> Convierte el primer caracter de la cadena a mayúsculas: (".ucfirst("primer").")<br>";

echo "<code>lcfirst(\"PRIMER\") --> </code> Convierte el primer caracter de la cadena a mayúsculas: (".lcfirst("PRIMER").")<br>";

echo "<code> ucwords(\"hola mudno\") --> </code> Convierte en mayúsculas el primer caracter de cada palabra: (".ucwords("hola mundo").")<br>";


echo "<br>LONGITUD Y CONTEO<br>";
echo "<code> strlen(\"aéióu\") --> </code> Cuenta los caracteres de una cadena pero por byte: (".strlen("aéióu").")<br>";

echo "<code> mb_strlen(\"aéióu\") --> </code> Cuenta los caracteres de una cadena por caracter: (".mb_strlen("aéióu").")<br>";

echo "<code> str_word_count(\"hola mundo\") --> </code> Cuenta cuantas palabras hay en una cadena: (".str_word_count("hola mundo").")<br>";

echo "<code> substr-count(\"hola mundo\", \"o\") --> </code> Cuenta cuantas veces aparece una subcadena en una cadena: (".substr_count("hola mundo", "o").")<br>";


echo "<br>EXTRACCIÓN DE CADENAS<br>";
echo "<code> substr(\"abcdefghijk\", 3, 5) --> </code> Extrae una subcadena a partir del indice del caracter inicial y de la cantdad de caracteres que se deseen extraer: (".substr("abcdefghijk", 3, 5).")<br>";

echo "<code> strchr(\"abcd abcd\", \"c\") --> </code> Devuelve la cadena a partir de la primera coincidencia que encuentre partiendo del inicio: (".strchr("abcd abcd", "c").")<br>";

echo "<code> strrchr(\"abcd abcd\", \"c\") --> </code> Devuelve la cadena a partir de la primera coincidencia que encuentre partiendo del final: (".strrchr("abcd abcd", "c").")<br>";


echo "<br>BÚSQUEDA DE TEXTO<br>";
echo "<code> strpos(\"Este es un texto\", \"es\") --> </code> Devuelve la posición en donde se encuentra la primera aparicio de la subcadena (SI importa mayúsculas y minúsculas): (".strpos("Este es un texto", "es").")<br>";

echo "<code> stripos(\"Este es un texto\", \"es\") --> </code> Devuelve la posición en donde se encuentra la primera aparicio de la subcadena (NO importar mayúsculas y minúsculas): (".stripos("Este es un texto", "es").")<br>";

echo "<code> strrpos(\"Este es un texto\", \"e\") --> </code> Devuelve la posición en donde se encuentra la última aparición de la subcadena (SI importa mayúsculas y minúsculas): (".strrpos("Este es un texto", "e").")<br>";

echo "<code> str_contains(\"Este Es un texto\", \"es\") --> </code> Devuelve true si existe la subcadena en la cadena principal y false si no (SI importa mayúsculas y minúsculas): ";
var_dump(str_contains("Este Es un texto", "es"));
echo "<br>";


echo "<br>REEMPLAZO DE TEXTO<br>";
echo "<code> str_replace(\"JavaScript\", \"PHP\", \"Esto es JavaScript\") --> </code> Texto a reemplazar, Texto nuevo, Cadena en donde se reemplazará (SI importa mayúsculas y minúsculas): (".str_replace("JavaScript", "PHP", "Esto es JavaScript").")<br>";

echo "<code> str_ireplace(\"javascript\", \"PHP\", \"Esto es JavaScript\") --> </code> Texto a reemplazar, Texto nuevo, Cadena en donde se reemplazará (NO importa mayúsculas y minúsculas): (".str_ireplace("javascript", "PHP", "Esto es JavaScript").")<br>";

echo "<code> substr_replace(\"Esto es JavaScript\", \"PHP\", 8) --> </code> se le indica una posicion a partir de esta se reemplazará por la subcadena que se especifique: (".substr_replace("Esto es JavaScript", "PHP", 8).")<br>";


echo "<br>ELIMINACIÓN / LIMPIEZA<br>";
echo "<code> trim(\"  Hola mundo  \") --> </code> Elimina los espacios al inicio y al final de un texto: (".trim("  Hola mundo  ").")<br>";

echo "<code> ltrim(\"  Hola mundo  \") --> </code> Elimina los espacios al inicio de un texto: (".ltrim("  Hola mundo  ").")<br>";

echo "<code> rtrim(\"  Hola mundo  \") --> </code> Elimina los espacios al final de un texto: (".rtrim("  Hola mundo  ").")<br>";


echo "<br>COMPARACIÓN DE CADENAS<br>";
echo "<code> strcmp(\"Este es PHP\", \"Este es php\") --> </code> Devuelve cero si es igual y valores diferentes de cero si es diferente (SI importa mayúsculas y minúsculas): (".strcmp("Este es PHP", "Este es php").")<br>";

echo "<code> strcasecmp(\"Este es PHP\", \"Este es php\") --> </code> Devuelve cero si es igual y valores diferentes de cero si es diferente (NO importa mayúsculas y minúsculas): (".strcasecmp("Este es PHP", "Este es php").")<br>";

echo "<code>INVESTIGAR COMO SE CALCULAN LOS VALORES DIFERENTES DE 0</code><br>";


echo "<br>INICIO Y FIN<br>";
echo "<code> str_starts_with(\"Hola mundo\", \"Hola\") --> </code>	Verifica si la cadena inicia con la subcadena que se indica (SI importa mayúsculas y minúsculas): ";
var_dump(str_starts_with("Hola mundo", "Hola"));
echo "<br>";

echo "<code> str_ends_with(\"Hola mundo\", \"mundo\")--> </code>	Verifica si la cadena termina con la subcadena que se le indica (SI importa mayúsculas y minúsculas): ";
var_dump(str_ends_with("Hola mundo", "mundo"));
echo "<br>";
?>