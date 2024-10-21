<?php 
/* CBTIS 89
P21Cheque.php
Programa que almacena los datosde un cheque en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/

$Vcheque1000=6948;$cheque;
$Billete20;$Billete50;$Billete100;$Billete200;$Billete500;$Billete1000;$moneda10;$moneda5;$moneda2;$moneda1;

$Billete1000=floor($Vcheque/1000);
$cheque=$cheque%1000;
 
$Billete500=floor($Vcheque/500);
$cheque=$cheque%500;

$Billete200=floor($Vcheque/200);
$cheque=$cheque%200;

$Billete100=floor($Vcheque/100);
$cheque=$cheque%100;

$Billete50=floor($Vcheque/50);
$cheque=$cheque%50;

$Billete20=floor($Vcheque/20);
$cheque=$cheque%20;

$moneda10=floor($Vcheque/10);
$cheque=$cheque%10

$moneda5=floor($Vcheque/5);
$cheque=$cheque%5;

$moneda2=floor($Vcheque/2);
$cheque=$cheque%2,

$moneda1=floor($Vcheque/1);
$cheque=$cheque%1;

echo "<br> El valor del cheque es: <br>" , $Vcheque;
echo "<br>","<br>";
echo "Tiene " . $Billete1000 . " Billetes de 1000 ";
echo "<br>";
echo "Tiene " . $Billete500 . " Billete de 500 ";
echo "<br>";
echo "Tiene " . $Billete200 . " Billete de 200 ";
echo "<br>";
echo "Tiene " . $Billete100 .  "Billetes de 100 ";
echo "<br>";
echo "Tiene " . $Billete50 . " Billete de 50 ";
echo "<br>";
echo "Tiene " . $Billete20 . " Billete de 20 ";
echo "<br>";
echo "Tiene " . $moneda10 . " Moneda de 10 ";
echo "<br>";
echo "Tiene " . $moneda5 . " Moneda de 5 ";
echo "<br>";
echo "Tiene " . $moneda2 . " Moneda de 2 ";
echo "<br>";
echo "Tiene " . $moneda1 . " Moneda de 1 ";

?>