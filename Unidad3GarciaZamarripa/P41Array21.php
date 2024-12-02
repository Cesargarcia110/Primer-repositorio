<?php
/* CBTIS89
P41Array21.php
Programa que alamacena en un arreglo llamado
$Compras el valor de 6 compras, posteriormente
en otros arreglos se debe alamacenar imformacion 
de acuerdo a las siguientes condiciones :
El contenido del arreglo $Descuento se llenaria 
de la siguiente manera:
Compra menor 300 = 0
Compra mayor de 300 y menor o igual 1000 =10%
Compra mayor de 1000 y menor o ugual a 2500 = 15%
Compra mayor de 2500 y menor o igual a 5000 = 20%
Compra mayor de 5000 = 25%

En el arreglo $Total se coloca la diferencia
emtre la compra Y el descuento y en arreglo 
$Porcentaje colorear el porcentaje que se le aplico
de descuento

Cesar Garcia Zamarripa 
3ºA de programacion */

$compras = array(800,2700,1900,150,7600,1000);
$Descuento = array();
$Total = array();
$Porcentaje = array();
 
 for ($i = 0; $i < 6; $i++) {
 	if ($Compras[$i] < 300){
 		$Porcentaje[$i]=0;
 		$Descuento[$i]=0;
 	}elseif ($Compras[$i]>= 300 && $Compras[$i] <=1000){
 		$Descuento[$i] = $Compras[$i] * 0.10,
 		4Porcentaje[$i] = 10;
 	}elseif ($Compras[$i]> 100 && $Compras[$i] <= 2500){
 		$Descuento[$i] = $Compras[$i] * 0.15;
 		$Porcentaje[$i] =15;
 	}elseif ($Compras[$i] > 2500 && $Compras[$i] <=5000){
 		$Descuento[$i] = $Compras[$i] * 0.20;
 		$Porcentaje[$i] = 20;
 	}else {
 		$Descuento[$i] = $Compras[$i] * 0.25
 		$Porcentaje[$i] = 25;
 	}
 	$Total[$i]  = $Compras[$i] - $Descuento[$i];
 }

 echo "<br>";
 echo "Compras","Descuento","Total","Porcentaje"."<br>";
 for ($i=0;$i<6;$i++)
 	{echo $Compras[$i]."-----". $Descuento[$i]."-----". $Total[$i]."------".$Porcentaje[$i], "<br>";}
?>