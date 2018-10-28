<!--  En este ejemplo mostramos todos los tipos de bucles -->
<!DOCTYPE html>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 5</title>
</head>
<body>
<?php //bucle while
$i = 1; 
while ($i <= 10) { 
    echo "Línea " . $i; 
    echo "<br>"; 
    $i++; 
} 
?> 
<?php //bucle while
define("HORA_DE_CENAR", 21); //Constante 
$hora = 12; // La hora en formato de 24 horas 
while ($hora < HORA_DE_CENAR) { 
    echo "Son las " . $hora . ". "; 
    echo "Faltan " . (HORA_DE_CENAR - $hora) . " horas "; 
    echo "para la cena."; 
    echo "<br>"; 
    $hora++; 
}
echo "Son las " . $hora . ". Es la hora de la cena."; 
echo "<br>";
echo "<br>";
echo "<br>";
?> 

<?php //bucle do .. while  que tiramos un dado hasta que sacamos 5
do { 
    $dado = rand(1,6); //rand() devuelve un valor aleatorio 
    echo "Tirando el dado... <br>"; 
    echo "ha salido un " . $dado . "."; 
    echo "<br>"; 
} while ($dado != 5); 
echo "!Bien! Saco una ficha de casa."; 
?> 


<?php  //bucle for.... decrementa
echo "Cuenta atrás."; 
echo "<br>"; 
for ($i = 10; $i >= 0; $i=$i--) { 
    echo $i . " ... "; 
   echo "<br>"; 
}
echo "Ignición!"; 
?> 
</body>
</html>

