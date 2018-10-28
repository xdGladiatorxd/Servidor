<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$contador=0;
echo '<table border="1">';
    echo "<tr>";
    for($x = 1; $x <= 100; $x++){
    if($contador==1){
      echo '<td style="background-color:#ADD8E6">';
      echo "$x";
      echo "</td>";
    }
    else{
    echo "<td>";
    echo "$x";
    echo "</td>";
    }
    if($x%10==0){
    echo "</tr>";
    if($contador==1){
    $contador=0;
    }
    else{
    $contador++;
    }
    }
    }
echo "</table>";
?>
</p> 
</body> 
</html> 