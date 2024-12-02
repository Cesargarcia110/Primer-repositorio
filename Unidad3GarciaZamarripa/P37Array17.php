<?php
/* CBTIS 89
Programa de numeros positivos y negativos
3°A de programacion*/

$arrraynumero =array(4,8,17,-11,-3,1,
                      20,-30,21,50,-73,7,-10,-8);

$arraypusitivos = array();
$arraynegativos = array();
$suma_positivos = 0;
$suma_negativos = 0;

foreach ($arraynumero as $numero) {
	if ($numero >=){ 
	$arraypositivos[] = $numero;
	$suma_positivos += $numero;
} else  {
	$arraynegativos[] = $numero;
	$suma_negativos += $numero;
  }
}

echo "POSITIVOS <br>";
foreach ($arerpositivos as $numero){
	echo $numero . "<br>";
}
echo "Suma de ositivos: " . $suma_posistivos . "<br><br>";

echo "NEGATIVOS <br>";
foreach ($arraynegativos as $numero){
	echo $numero . "<br>";
}
echo "Suma de negativos " . $suma_negativos . "<br>";

?>