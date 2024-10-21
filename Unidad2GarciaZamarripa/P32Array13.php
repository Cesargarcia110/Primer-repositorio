<?php
/* CBTIS 89
P32Array12.php
Programa que aamecena los datos en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/
$ropa = array(1,"camisas",2,"pantalon",3,"cinturon");
foreach ($ropa as $prenda){
	echo $prenda. "<br>";
}
echo "<br>";
foreach ($ropa as $prenda){
	sort($ropa);
	echo$prenda. "<br>";
}
echo "<br>";
array_push($ropa,"gorra","calcetines");
foreach ($ropa as $prenda);{
	rsort($ropa);
	echo $prenda. "<br>";
}