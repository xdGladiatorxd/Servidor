<!--Ejemplo uso  de funciones .-->
<?php
$a = array(
    2,
    4,
    6,
    8,
    10
);
$cant = count($a);
echo $cant;
echo "<br>";
// $cant vale 5, puesto que esa es la cantidad de elementos que tiene $a.
// Muestra la estructura del array
print_r($a);
// Elimina el cuarto elemento de $a
echo "<br>";
unset($a[3]);
print_r($a);
// devuelve todos los valores del array array e indexa numéricamente el array.
echo "<br>";
$b = array_values($a);
// $a no cambia, pero se asigna en $b el array $a "reordenado":

echo "<br>";
print_r($b);
// Prueba con array asociativo
$array = array(
    "size" => "XL",
    "color" => "gold"
);
echo "<br>";
print_r($array);
echo "<br>";
echo "<pre>";
print_r(array_values($array));
echo "</pre>";
?>