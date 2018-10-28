<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$dias= array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
echo "for each<br>";
foreach ($dias as $clave => $valor) {
    echo "$clave : $valor <br>";
}
echo "<br>for<br>";
for ($i = 0; $i < count($dias); $i++) {
    echo "$i : $dias[$i]<br>";
}
?>
</p> 
</body> 
</html> 