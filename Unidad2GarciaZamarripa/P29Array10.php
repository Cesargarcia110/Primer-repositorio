<?php
/* CBTIS 89
P28Array9.php
Programa que aamecena los datos en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/
$nombres = array("Juan", "María", "Pedro", "Ana", "Luis", "Miguel", "Carlos", "Angel");
$nombre = "Cesar";
$Name=0;
foreach ($nombres as $Persona ){
	
	if ($Persona==$nombre){
		$Name=1;
		echo " El nombre " . $nombre . " Esta en array ";
	}
}
if ($Name==0){
	echo " El nombre " . $nombre . " No esta en el array ";
}
?>