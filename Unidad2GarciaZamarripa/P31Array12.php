<?php
/* CBTIS 89
P32Array11.php
Programa que aamecena los datos en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>