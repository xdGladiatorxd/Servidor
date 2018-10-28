<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$lenguajes=array(
    'Lenguajes Servidor'=>
        array(
            'Perl',
            'PHP'
            ),
    'Lenguajes Cliente'=>
        array(
            'JavaScript',
            'HTML'
            ) 
);
foreach ($lenguajes as $tipos=>$lenguaje){
    echo $tipos . ":<br>";
    foreach ($lenguaje as $contenido=>$datos){
            echo $contenido+1 . ": " . $datos . "<br>";
    }
}
?>
</p> 
</body> 
</html> 