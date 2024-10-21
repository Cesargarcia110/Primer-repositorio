<?php
/* CBTIS 89
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto 
y de forma contraria es decir una cadena d texto a elementos dentro 
de un arraglo.
Cesra Garcia 
3ºA de programacion Matutino */

//Alcanza datos en un arraglo
$arraydatos = ["Karina","Rosales","Orozco"];

//Convierte un array en cadena de texto
$string = implode(" ",$arraydatos);
echo "cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//Cadena de texto a separar
$cadena = "Tercero de programacion matutino ";

//COnvierte una cadena de texto en array
$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los elementos del arraglo
for($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento 
	echo $array[$i];
	echo "<br>";

}
?>

