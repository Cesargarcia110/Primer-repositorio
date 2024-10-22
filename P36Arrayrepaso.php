<?php
/* CBTIS 89
P28Array9.php
Programa que calcula los datos de una tienda de pizza utilizando 
varios array u foreach echo .
Cesar Garcia
3ªA de programacion Matutino*/

$menu = array(
    'pizza_peperoni' => 50,

    'pizza_grande' => 120,
    
    'pizza_mediana' => 80,
    
    'refresco chico' => 25,

    "refresco grande" =>30,

    "agua natural de litro" =>20,
);

foreach ($menu as $producto => $precio) {
    echo "El producto " . ($producto) . " cuesta " . $precio . " pesos.";
    echo "<br>";
}
?>
