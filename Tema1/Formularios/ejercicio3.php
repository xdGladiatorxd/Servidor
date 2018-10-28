<!DOCTYPE html>
<html lang="es">
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<?PHP
if(!empty($_POST['menor'])){
    if(!empty($_POST['mayor'])){
        $n1=$_POST['menor'];
        $n2=$_POST['mayor'];
        for($i=0;$i<=($n2-$n1);$i++){
            echo "(" . ($n1+$i) . "," . ($n2-$i) . ")";
        }
    }
}
else{
    echo "No has escrito un numero en el apartado menor<br>";
}
if(empty($_POST['mayor'])){
    echo "No has escrito un numero en el apartado mayor<br>";
}
echo "<br><a href='Ejercicio3.html'>Volver</a>";
?>
</body>
</html>