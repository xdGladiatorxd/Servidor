
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 3</title>
</head>
<body>
	<p> 
	<?php
$hora = 11; // La hora en formato de 24 horas
if ($hora == 8) {
    echo "Suena el despertador. ";
    echo "Es la hora de levantarse.";
} else {
    echo "No se que hora es"; // Se visualiza esta l�nea
}
echo "<br>";
echo "<br>";
echo "<br>";
if ($hora == 8)
    echo "Suena el despertador. ";
echo "Es la hora de levantarse.";
echo "<br>"; // Se visualiaza esta l�nea pq noforma parte del IF
?> 
<!-- IF .. ELSE ..IF-->
<?php
$hora = 14; // La hora en formato de 24 horas
if ($hora == 8) {
    echo "Es la hora de desayunar.";
} else 
    if ($hora == 14) {
        echo "Es la hora de la comida.";
    } else 
        if ($hora == 21) {
            echo "Es la hora de la cena.";
        } else {
            echo "Ahora no toca comer.";
        }
?>

	
    </p>
</body>
</html>
