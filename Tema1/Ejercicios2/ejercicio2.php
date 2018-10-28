<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$numeros= array("uno","dos","tres","cuatro","cinco","seis");
echo "Ha salido el numero " . $numeros[rand(0,5)];
?>
</p> 
</body> 
</html> 