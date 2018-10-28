<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$dias=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
echo "For each";
foreach ($dias as $clave => $contenido){
    echo $contenido . ":" . $clave . "<br>";
}
echo "For<br>";
for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . ":" .$i . "<br>";
}
?>
</p> 
</body> 
</html> 