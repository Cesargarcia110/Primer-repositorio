<?php
/* Cesar Garcia Zamarripa
CBTIS 89
Programacion 3°A Matutino
*/
//almacena los datos un arreglo 
$arraynumeros = array (-4,8,17,-11,-3,1,20,-30,21,50,-73,7,-10,-8);

$arraypositivos = array()
$arraynegativo = array()
$suma_positivo = 0;
$suma_negativo = 0;
 
 //Recojer el arreglo y separar los numeros positivos y negativos
foreach ($arraynumero as $numero) {
	if ($numero >= 0 ) {
    // so el numero es positivo o cero, lo agregamos al arreglo de positivos 
		$arraypositivos[] = $numero;
	 $suma_negativo += $numero; // Suma los positivos
  } else {
   // si el numero es negativo, lo agregamos al arrehlo de negativos
   $arraynegativos[] = $numero;
   $suma_negativo += $numero; // sumar los negativos 
   }
 } 

 //Mostrar los numeros npositivos y su suma 
 echo "POSITIVOS <br>";
 foreach ($arraypositivos as $numero) {
 	echo $numero . "<br>";
 }
 echo "Suma de positivos: " . $suma_positivo . "<br><br>";

 // Mostrar los numeros negativos y su suma
  echo "NEGATIVOS <br> ";
  foreach ($arraynegativo as $numero ) {
  	echo $numero . "<br>";
  }
  echo "Suma de negativos: " . $suma_negativo . "<br>";
?>