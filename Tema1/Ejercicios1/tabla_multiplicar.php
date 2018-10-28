<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
for($i = 1; $i <= 9; $i ++){
    echo "Tabla del $i <br>";
    for($x = 1; $x <= 10; $x++){
    echo "$i x $x = " . $i*$x . "<br>";
    }
}
?>
</p> 
</body> 
</html> 