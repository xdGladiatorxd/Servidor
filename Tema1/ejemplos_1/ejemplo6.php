<!--  bucle infinito -->
<!-- 
while (TRUE) { 
    echo "Hasta el infinito"; 
    break; 
    echo " y más allí..."; 
    echo "<br>"; 
} 
-->

<!-- En ocasiones se pone intencionadamente un bucle infinito que se pretende romper
 con una sentencia break en su cuerpo. -->
<!DOCTYPE html>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 6</title>
</head>
<body>
<?php
define("ALERTA_MISION", 5);
$nivel_alerta = 1;
while (TRUE) {
    echo "Hasta el infinito";
    if ($nivel_alerta == ALERTA_MISION) {
        break;
    }
    echo " y más allí...";
    echo "<br>";
    $nivel_alerta ++; // Se incrementa en uno
}
echo "<br>";
echo "Parece que hay alguien en apuros.";
?> 
<!-- Este programa lista los números del 1 al diez, e indica los que son m�ltiplos
 por 3, en cuyo caso nos muestra el resultado de dicha división. -->
<?php
for ($i = 1; $i <= 10; $i ++) {
    echo "El número " . $i;
    if (($i % 3) != 0) {
        echo " no es múltiplo de 3.";
        echo "<br>";
        continue;
    }
    echo " es multiplo de 3. ";
    echo "Por lo tanto ";
    echo $i . " dividido entre 3 es igual a " . ($i / 3);
    echo "<br>";
}
?> 
</body>
</html>

