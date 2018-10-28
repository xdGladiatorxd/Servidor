<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
echo '<table border="1">';
for($i = 1; $i <= 9; $i ++){
    echo "<tr>";
    for($x = 0; $x <= 10; $x++){
    echo "<td>";
    if($x==0){
    echo "Tabla del $i ";
    }
    else{
    echo "$i x $x = " . $i*$x;
    echo "</td>";
    }
    }
    echo "</tr>";
}
echo "</table>";
?>
</p> 
</body> 
</html> 