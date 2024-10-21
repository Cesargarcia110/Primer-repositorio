<?php
/* CBTIS 89
P30Array10.php
Programa que aamecena los datos en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>