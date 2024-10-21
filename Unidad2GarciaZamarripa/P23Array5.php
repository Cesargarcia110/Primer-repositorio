<?php
/* CBTIS 89
Programa que almacena datos en un arreglo y 
posteriormente los imprime
Cesar Garcia 
3ºA de programacion matutino*/

$precio = array("manzana" => "25", "mango"=>"40","Limon"=>"35","naranja"=>"20");
echo "** FRUTERIA DEL SUR **", "<br>","<br>";
foreach($precio as $fruta=>$precio)
{
echo "El kilo de ",$fruta . " Cuesta " . $precio;
echo "<br>","<br>";
}
?>