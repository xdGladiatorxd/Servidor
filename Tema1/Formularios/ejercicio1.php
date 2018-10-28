<!DOCTYPE html>
<html lang="es">
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<?PHP
if(!empty($_POST['numero'])){
    if ($_POST['numero']%2==0) {
        echo "El numero " . $_POST['numero'] . " es par<br>";
    }
    else{
        echo "El numero " . $_POST['numero'] . " es impar<br>";
    }
}
else{
    echo "No has escrito un numero<br>";
}
echo "<a href='Ejercicio1.html'>Volver</a>";
?>
</body>
</html>