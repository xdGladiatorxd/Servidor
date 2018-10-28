<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$correo = "luisobz44@gmail.com";
if(mb_strpos($correo, "@")!=false){
    $trozosArroba=explode("@", $correo);
    if(mb_strpos($trozosArroba[1], ".")!=false){
        $trozosPunto=explode(".", $trozosArroba[1]);
        echo "Nombre de Email es <b>$trozosArroba[0]</b><br>";
        echo "Dominio es <b>$trozosPunto[0]</b><br>";
        if(mb_strlen($trozosPunto[0])<2)
            echo "Antes de punto no hay dos o mas caracteres<br>";
        if(mb_strlen($trozosPunto[1])<2)
            echo "Despues de punto no hay dos o mas caracteres<br>";
    }
    else {
        echo "No incluye el caracter '.' despues de la arroba<br>";
    }
    if(mb_strlen($trozosArroba[0])<2)
        echo "Antes de arroba no hay dos o mas caracteres";
}
else {
    echo "No incluye el caracter '@'";
}
?>
</p> 
</body> 
</html> 