<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
function sinEspacios($cadena){
    $cadena = trim(preg_replace('/ +/', ' ', $cadena));
    return $cadena;
}
echo sinEspacios("      Texto         con          espacios            ");
?>
</p> 
</body> 
</html> 