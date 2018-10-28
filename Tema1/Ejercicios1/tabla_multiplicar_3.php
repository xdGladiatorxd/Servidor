<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$numero=2;
echo '<table border="1">';
    for($x = 1; $x <= 9; $x++){
    echo "<tr>";
    echo '<td style="color:blue">';
    echo "$numero x $x ";
    echo "</td>";
    echo '<td style="color:blue">';
    echo $numero*$x;
    echo "</td>";
    echo "</tr>";
    }
echo "</table>";
?>
</p> 
</body> 
</html> 