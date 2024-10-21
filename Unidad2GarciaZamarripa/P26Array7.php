<?php
/* CBTIS 89
P26Array7.php
Programa que aamecena los nombres de 6  en un arreglo y 
posteriormente los imprime por medio de un ciclo
Cesar Garcia
3ªA de programacion Matutino*/

   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>