
<!--  Recorrido de array con foreach sin leer clave -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo3</title>
</head>
<body>
<?php 
$frutas = array("melón", "sandía", "naranja");
foreach ($frutas as $valor) {
    echo "Valor: $valor </br>";
    }
    ?>

<!--  Recorrido de array con foreach con clave -->
<?php 
$frutas = array("melón", "sandía", "naranja");
foreach ($frutas as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor</br>";
    }
    ?>



