<?php
/* CBTIS 89
P35Array16.php
Programa que convierte los datos de un arreglo en una cadena de texto 
y de forma contraria es decir una cadena d texto a elementos dentro 
de un arraglo.
Cesra Garcia 
3ºA de programacion Matutino */
$array1 = array(10,20,30,40,50);
$array2 = array(5,7,6,15,18);
$arraysuma = array();
$arrayresta = array();
$arraydivi = array();
$arraymulti = array();

for($i=0; $i<$longitud; $i++)
	{$arraysuma[$1] = $array1[$i]+$array2[$i];
		$arrayresta[$i]= $array1[$i]-$array2[$i];
		$arraymulti[$i] = $array1[$i]*$array2[$i];
		$arraydivi[$i] = $array1[$i]/$array2[$i];
	}

	echo "Suma entre arreglos <br>";
	for($i=0; $i<$longitud; $i++)
		{echo $array1[$i]." + ".$array2[$i]." = ".$arraysuma[$i];
echo "<br>";
}
echo "<br>";

echo "Resta entre Arreglos <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." - ".$array2[$i]." = ".$arayresta[$i];
}

echo "divicion entre arreglo <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $arraydatos1[$i]." / ".$arraydatos2[$i]." = ".$arraydivi[$i];
echo "<br>";
}
