
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php 
define("PI", 3.1416); //asignamos valor a la constante
echo "El valor de PI es : " .PI . "<br>"; //No se pone el símbolo dolar
$precio = 33; //diferencia variables en mayúsculas y ninúsculas
$Precio = 55; 
echo "La variable precio contiene el valor:  "; 
echo $precio; //cuando se visualiza no se ponen comillas
echo "<br>"; 
echo "La variable Precio contiene el valor: "; 
echo $Precio . "<br>"; //concatenación cadenas
$suma=$precio+$Precio;
echo "El resultado de sumar precio y Precio es:" . $suma ."<br>";
echo "El resultado de sumar precio y Precio es:" . ($precio+$Precio) ."<br>"
?> 
    </p> 
</body> 
</html> 
