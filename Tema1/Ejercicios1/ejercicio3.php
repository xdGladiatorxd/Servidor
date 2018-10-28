<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$radio="6371";
$distanciaSol="149600000";
$pi="3.14";
echo "La distancia de una vuelta al mundo siguiendo el ecuador es " . (2*$pi*$radio) . "<br>";
echo "Las vueltas al mundo que equivale la distancia entre la Tierra y el Sol son " . ($distanciaSol/$radio);
?>
</p> 
</body> 
</html> 