<?php
/* CBTIS 89
P40Array20.oho
Programa que alamacena por medio de un ciclo
los numeros pares del 150 al 200 de la siguiente
manera:
En el $Arreglo van los numeros pares, en el $Arreglo2
van los numeros impares, en el $Arreglo3 va la suma de
 los numeros correspondiente al indice
 Cesar Garcia Zamarripa
 3ºA de programcion*/
 
 $Arreglo1 = array();
 $Arreglo2 = array();
 $Arreglo3 = array();
for ($i = 150;·$i <= 201; $i++){
	if ($i % 2 == 0 ) {
		$array1[] = $i;
	 }else {
	 	$array2[] = $i;
	}
}
for ($i = 0; $i < count($array1); $i++){
	if ($array2[$i]){
		$array3[] = $array1[$i] + $array2[$i];
} else {
$array3[] = $array1[$i];		
	}
}

echo "Array1------ Array2------ Array3<br>";

for ($i = 0; $i < count($array1); $i++) {
	echo $array1[$i] . "-----";
	echo $array3[$i] . "<br>";
}
?>