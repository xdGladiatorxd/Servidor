<!-- Primero php después html -->
<!DOCTYPE html>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 8</title>
</head>
<body>
<?php
// Inicializaci�n
DEFINE ( "LIMITE", 100 );
// Lectura de datos
$i = rand ( 1, LIMITE ); // Simulamos la lectura
$j = rand ( 1, LIMITE );
// Operaciones con los datos
if ($i > $j) {
	$mayor = $i;
	$menor = $j;
} else {
	$mayor = $j;
	$menor = $i;
}
while ( ($mayor % $menor) != 0 ) {
	$auxiliar = $menor;
	$menor = $mayor % $menor;
	$mayor = $auxiliar;
}
$mcd = $menor;
// Ver el uso de <?= $I que es igual que <?php echo $i
?>
<html>
<head>
<title>Máximo comun divisor</title>
</head>
<body>

    El máximo común divisor de <?php echo $i ?> y <?php echo $j ?> es <?php echo $mcd ?>.
</body>
</html>
