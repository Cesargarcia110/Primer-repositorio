<?php
/* CBTIS 89
Programa que almacena datos en un arreglo y 
posteriormente los imprime
Cesar Garcia 
3ºA de programacion matutino*/

$equipo = array(" portero "=>" Julio "," Defensa "=>" Diego ",
" Medio "=>" Jair "," Delantero "=>" Rafa ");

echo "** SELECCION NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
	{echo " El jugador " . $jugador . " es el " . 
$posicion;
echo "<br>","<br>";
}
?>