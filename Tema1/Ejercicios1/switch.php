<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$posicion = 2;
switch ($posicion) {
    case 1:
        echo "Estoy arriba";
        break;
    case 2:
        echo "Estoy abajo";
        break;
    case 3:
        echo "Estoy medio";
        break;
    case 4:
        echo "Estoy otros";
        break;
}
?>
</p> 
</body> 
</html> 