  <?php
/* CBTIS 89
P21Array3.php
Programa que aamecena los nombres de 6  en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/

$info = array("Juan"=>"CBTIS 89 la carrera de mecatronica","Pedro"=>"CBTIS 110 la carrera de 
	informatica","Alejandro"=>"CBTIS 130 la carrera de arquitectura","Angel"=>"CBTIS 89 de programacion");
echo "** INFORMACION DE ALUMNOS **","<br>","<br>";

foreach($info as $Alumno=>$Escuela)
{
echo "El Alumno ",$Alumno . " estudia en el ". $Escuela;
echo "<br>","<br>";
}
?>