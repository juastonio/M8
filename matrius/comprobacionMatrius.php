<?php 

include "matrius.php";

// Valores de la Matriz 1
$matriz1 = array(
    array(2,0,1),
    array(3,0,0),
    array(5,1,1)
);
// Valores de la Matriz 2
$matriz2 = array(
    array(1,0,1),
    array(1,2,1),
    array(1,1,0)
);

$m = new Matriu();

echo "<b>Suma:</b>  </br>";
print_r($m->sumarMatrius($matriz1, $matriz2));
echo "</br></br>";

echo "<b>Resta:</b> </br>";
print_r($m->restarMatrius($matriz1, $matriz2));
echo "</br></br>";

echo "<b>Matriz por escalar:</b> </br>";
print_r($m->matriuPerEscalar($matriz1, 2));
echo "</br></br>";

echo "<b>Producto:</b> </br>";
print_r($m->producteMatrius($matriz1, $matriz2));
echo "</br></br>";

?>