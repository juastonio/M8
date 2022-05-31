<?php
include "vectors.php";

$V1 = array(1, 2, 2, 4, 3);
$V2 = array(5, 6, 7, 3, 4);

$v = new Vector();

echo "<b> Suma: </b></br>";
print_r($v->sumaVectores($V1, $V2));
echo"</br></br>";

echo "<b> Resta: </b></br>";
print_r($v->restaVectores($V1, $V2));
echo"</br></br>";

echo "<b> Producto Escalar: </b></br>";
print_r($v->productoEscalarVectores($V1, 2));
echo"</br></br>";

echo "<b> Modulo de un vector: </b></br>";
print_r($v->moduloVector($V1));
echo"</br></br>";
?>