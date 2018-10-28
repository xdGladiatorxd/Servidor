<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$colores=array(
    'Colores fuertes'=>[
        'Rojo'=>'FF0000',
        'Verde'=>'00FF00',
        'Azul'=>'0000FF'
    ],
    'Colores suaves'=>[
        'Rosa'=>'FE9ABC',
        'Amarillo'=>'FDF189',
        'Malva'=>'BC8F8F'
    ]
);
echo "<table>";
foreach($colores as $tipos=>$contenido){
    echo "<tr><td style='border: none; padding-right: 25px; padding-left: 25px; padding-bottom: 10px;'>".$tipos.":</td>";
    foreach ($contenido as $color=>$valor){
        echo "<td style='border: black 1px solid; padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#".$valor.";'>".$color.":".$valor."</td>";
    }
    echo "</tr>";
}
echo "</table>";
foreach($colores as $tipos=>$contenido){
    if(in_array('FF88CC',$contenido)){
        echo "Esta";
    }     
}
foreach($colores as $tipos=>$contenido){
    if(in_array('FF0000',$contenido)){
        echo "Esta";
    }
}
?>
</p> 
</body> 
</html> 