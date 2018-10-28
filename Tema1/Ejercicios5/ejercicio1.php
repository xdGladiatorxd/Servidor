<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
function capitales($pais, $capital="Madrid", $habitantes="muchos"){
    return "La capital de ".$pais." es ".$capital." y tiene ".$habitantes ." habitantes<br>";
}
echo capitales("España");
echo capitales("Portugal","Lisboa");
echo capitales("Francia","Paris",1000000);
?>
</p> 
</body> 
</html> 