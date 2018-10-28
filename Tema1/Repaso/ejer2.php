<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$dias=array("Uno","Dos","Tres","Cuatro","Cinco","Seis");
echo $dias[rand(0,count($dias))];
?>
</p> 
</body> 
</html> 