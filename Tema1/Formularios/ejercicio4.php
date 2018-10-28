<!DOCTYPE html>
<html lang="es">
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<?PHP
if(!empty($_POST['numero1'])){
    if(!empty($_POST['numero2'])){
        if($_POST['operacion']=="suma"){
            echo "El resultado de realizar la " .  $_POST['operacion'] . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']+$_POST['numero2']);
        }
        elseif ($_POST['operacion']=="resta"){
            echo "El resultado de realizar la " .  $_POST['operacion'] . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']-$_POST['numero2']);
        }
        elseif ($_POST['operacion']=="producto"){
            echo "El resultado de realizar el " .  $_POST['operacion'] . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']*$_POST['numero2']);
        }
        elseif ($_POST['operacion']=="cociente"){
            echo "El resultado de realizar el " .  $_POST['operacion'] . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']/$_POST['numero2']);
        }
    }
}
else{
    echo "No has escrito un numero en el apartado uno<br>";
}
if(empty($_POST['numero2'])){
    echo "No has escrito un numero en el apartado dos<br>";
}
echo "<br><a href='Ejercicio4.html'>Volver</a>";
?>
</body>
</html>