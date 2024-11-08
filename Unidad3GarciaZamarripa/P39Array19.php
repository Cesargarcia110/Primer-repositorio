<?php
/* CBTIS 89
P39Array19.php
Programa que almacena informacion de 6 personas y dependiendo
de su edad cintabiliza en diversosos arreglos de acuerdo a las 
siguientes condiciones:
Si la persona es menor a 18 años se debe colocar un 1 en el arreglo 
$Grupo1 y en los otros dos colocar un 0.
Si la persona es mayor de 18 y 49 años se debe colocar un 1 en el arreglo
$Grupo2 y en los otros dos colocar un 0.
Si la persona tiene 50 o mas se debe de colocar un 1 en eñ arreglo $Grupo3, 
y en los otro dos un 0.
	Cesar Garcia Zamarripa
	3°Ade programacion Matutino
*/
$Nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edadb = array(17,30,71,38,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

 if ($Edad[$i]<=18)
    {$Grupo2[$i]=0;
    	$Grupo1[$i]=1;
    	$Grupo3[$i]=0}

else if ($Edad[$i]>=18 and $Edad[$i]<=49)
	{$Grupo2[$i]=1;
		$Grupo3[$i]=0;
		$Grupo1[$i]=0}

else if($Edad[$i]>=50)
	{$Grupo3[$i]=1;
		$Grupo2[$i]=0;
		$Grupo1[$i]=0}

		echo "<br>";
		echo "Nombre ", "Edad ", "Grupo1 ", "Grupo2 ", "Grupo3 ","<br>";
		for ($i=0;$i<6;$i++)
			{echo $Nombre[$i]."---". $Edad[$i]."---".$Grupo1[$i]."----".
		$Grupo2[$i]."----".$Grupo3[$i]."<br>";}

		?>
