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
        if(isset($_POST['operacion'])){
            foreach(($_POST['operacion']) as $dato) {  
                if($dato=="suma"){
                    echo "El resultado de realizar la " .  $dato . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']+$_POST['numero2']) . "<br>";
                }
                elseif ($dato=="resta"){
                    echo "El resultado de realizar la " .  $dato . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']-$_POST['numero2']) . "<br>";
                }
                elseif ($dato=="producto"){
                    echo "El resultado de realizar el " .  $dato . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']*$_POST['numero2']) . "<br>";
                }
                elseif ($dato=="cociente"){
                    echo "El resultado de realizar el " .  $dato . " de los numeros " . $_POST['numero1'] . " y " . $_POST['numero2'] . " es " . ($_POST['numero1']/$_POST['numero2']) . "<br>";
                }
            }
        }
    }
}
else{
    echo "No has escrito un numero en el apartado uno<br>";
}
if(empty($_POST['numero2'])){
    echo "No has escrito un numero en el apartado dos<br>";
}
if(!isset($_POST['operacion'])){
    echo "No has seleccionado ninguna operacion<br>";
}
echo "<a href='Ejercicio5.html'>Volver</a>";
?>
</body>
</html>