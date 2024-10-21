<?php
/* CBTIS 89
P20Array2.php
Programa que aamecena diversos datos en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/

$nombre = "Anna";
$array = array(1, 2, 3, "casa",$nombre);

//Se obtiene el numero de elementos
$longitud = count($array);

//Recorre todos los elementos
for ($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemneto
echo $array[$i];
echo "<br>";
}
?> 