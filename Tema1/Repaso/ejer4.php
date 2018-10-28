<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$alumnos=array(
    'Marcos'=>[
        'Servidor'=>5,
        'Cliente'=>6,
        'Diseño'=>7
    ],
    'Fran'=>[
        'Servidor'=>8,
        'Cliente'=>9,
        'Diseño'=>10
    ],
    'Angel'=>[
        'Servidor'=>4,
        'Cliente'=>3,
        'Diseño'=>2
    ],
    'Adrian'=>[
        'Servidor'=>0,
        'Cliente'=>1,
        'Diseño'=>2
    ],
    'Ruben'=>[
        'Servidor'=>5,
        'Cliente'=>5,
        'Diseño'=>5
    ]
);
$medias=0;
$mediac=0;
$mediad=0;
$media1=0;
$media2=0;
$media3=0;
$media4=0;
$media5=0;
$count=1;
echo "<table border='1'><tr><td>Servidor</td></tr>";
foreach ($alumnos as $alumno=>$contenido){
    echo "<tr><td>".$count."</td>"."<td>".$alumno."</td>";
    echo "<td>".$contenido['Servidor']."</td></tr>";
    if($count==1){
        $media1+=$contenido['Servidor'];
    }
    elseif($count==2){
        $media2+=$contenido['Servidor'];
    }
    elseif($count==3){
        $media3+=$contenido['Servidor'];
    }
    elseif($count==4){
        $media4+=$contenido['Servidor'];
    }
    elseif($count==5){
        $media5+=$contenido['Servidor'];
    }
    $count++;
    $medias+=$contenido['Servidor'];
}
$medias=$medias/5;
echo "</table>";
$count=1;
echo "<table border='1'><tr><td>Cliente</td></tr>";
foreach ($alumnos as $alumno=>$contenido){
    echo "<tr><td>".$count."</td>"."<td>".$alumno."</td>";
    echo "<td>".$contenido['Cliente']."</td></tr>";
    if($count==1){
        $media1+=$contenido['Cliente'];
    }
    elseif($count==2){
        $media2+=$contenido['Cliente'];
    }
    elseif($count==3){
        $media3+=$contenido['Cliente'];
    }
    elseif($count==4){
        $media4+=$contenido['Cliente'];
    }
    elseif($count==5){
        $media5+=$contenido['Cliente'];
    }
    $count++;
    $mediac+=$contenido['Cliente'];
}
$mediac=$mediac/5;
echo "</table>";
$count=1;
echo "<table border='1'><tr><td>Diseño</td></tr>";
foreach ($alumnos as $alumno=>$contenido){
    echo "<tr><td>".$count."</td>"."<td>".$alumno."</td>";
    echo "<td>".$contenido['Diseño']."</td></tr>";
    if($count==1){
        $media1+=$contenido['Diseño'];
    }
    elseif($count==2){
        $media2+=$contenido['Diseño'];
    }
    elseif($count==3){
        $media3+=$contenido['Diseño'];
    }
    elseif($count==4){
        $media4+=$contenido['Diseño'];
    }
    elseif($count==5){
        $media5+=$contenido['Diseño'];
    }
    $count++;
    $mediad+=$contenido['Diseño'];
}
$mediad=$mediad/5;
echo "</table>";
echo "<table border='1'>";
echo "<tr><td>Nota Media Asignatura</td>";
echo "<tr><td>Servidor</td>"."<td>".$medias."</td></tr>";
echo "<tr><td>Cliente</td>"."<td>".$mediac."</td></tr>";
echo "<tr><td>Diseño</td>"."<td>".$mediad."</td></tr>";
echo "</table>";
$count=1;
echo "<table border='1'>";
echo "<tr><td>Nota Media Alumno</td>";
foreach ($alumnos as $alumno=>$contenido){
    echo "<tr><td>".$count."</td>"."<td>".$alumno."</td>";
    if($count==1){
        echo "<td>".$media1."</td>";
    }
    elseif($count==2){
        echo "<td>".$media2."</td>";
    }
    elseif($count==3){
        echo "<td>".$media3."</td>";
    }
    elseif($count==4){
        echo "<td>".$media4."</td>";
    }
    elseif($count==5){
        echo "<td>".$media5."</td>";
    }
    echo "</tr>";
    $count++;
}
echo "</table>";
?>
</p> 
</body> 
</html> 