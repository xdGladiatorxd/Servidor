<!--  Ejemplo switch ver la necesidad de break en cada caso-->

<!DOCTYPE html>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 4</title>
</head>
<body>
	<p> 
	<?php
$hora = 14; // La hora en formato de 24 horas
switch ($hora) {
    case 9:
        echo "Es la hora de desayunar.";
        break;
    case 14:
        echo "Es la hora de comer.";
        break;
    case 21:
        echo "Es la hora de merendar.";
        break;
    default:
        echo "Ahora no toca comer.";
        break;
}
?> 

<?php
// ejemplo sin break. Vemos que entra en más de un caso
echo "<br>";
echo '<p>Ahora el ejemplo sin break en los case</p> ';
$hora = 19; // La hora en formato de 24 horas
switch ($hora) {
    case 24:
    case 23:
    case 22:
        echo "Ya he cenado.";
    case 21:
    case 20:
    case 19:
    case 18:
    case 17:
    case 16:
    case 15:
        echo "Ya he comido.";
    case 14:
    case 13:
    case 12:
    case 11:
    case 10:
        echo "Ya he desayunado.";
        break;
    default:
        echo "Tengo hambre";
        break;
}
?> 

</p>
</body>
</html>
