<!DOCTYPE html>
<html lang="es">
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<?PHP
if(!empty($_POST['numero'])){
    echo "TABLA DE MULTIPLICAR DEL " . $_POST['numero'] . ":<br>";
    for ($i = 1; $i < 11; $i++) {
        echo $i . " x " . $_POST['numero'] . " = " . $i*$_POST['numero'] . "<br>";
    }
}
else{
    echo "No has escrito un numero<br>";
}
echo "<a href='Ejercicio2.html'>Volver</a>";
?>
</body>
</html>