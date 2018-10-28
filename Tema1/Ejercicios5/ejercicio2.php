<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
function sinTildes($cadena){
    $tilde=array("á", "é", "i", "ó", "ú", "Á", "É", "Í", "Ó", "Ú");
    $sintilde=array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    for ($i = 0; $i < count($tilde); $i++) {
        $cadena=str_replace($tilde[$i], $sintilde[$i], $cadena);
    }
    return $cadena;
}
echo sinTildes("Á lá cásá dél árból");
?>
</p> 
</body> 
</html> 