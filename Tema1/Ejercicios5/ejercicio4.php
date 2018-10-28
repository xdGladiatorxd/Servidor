<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
function compCaseEsp($cadena1, $cadena2){
    $tilde=array("á", "é", "i", "ó", "ú", "Á", "É", "Í", "Ó", "Ú");
    $sintilde=array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    for ($i = 0; $i < count($tilde); $i++) {
        $cadena1=str_replace($tilde[$i], $sintilde[$i], $cadena1);
        $cadena2=str_replace($tilde[$i], $sintilde[$i], $cadena2);
    }
    $cadena1 = trim(preg_replace('/ +/', ' ', $cadena1));
    $cadena2 = trim(preg_replace('/ +/', ' ', $cadena2));
    $r=strcasecmp($cadena1,$cadena2);
    return $r;
}
echo compCaseEsp("Hola","Hola")."<br>";
echo compCaseEsp("Holá","Hola")."<br>";
echo compCaseEsp("Hola ","Hola")."<br>";
echo compCaseEsp("Holas","Hola")."<br>";
echo compCaseEsp("Hola","Holas")."<br>";
?>
</p> 
</body> 
</html> 