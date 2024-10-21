<?php
/* CBTIS 89
P21Array3.php
Programa que aamecena los nombres de 6  en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/


$arraynombres = array("cesar", "Angel", "Brayan", "Diego", "Hector", "Uriel", );

//Se obtiene el numero de elementos
$longitud = count($arraynombres);

//Recorre todos los elementos
for ($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemneto
echo $arraynombres[$i];
echo "<br>";
}
?> 