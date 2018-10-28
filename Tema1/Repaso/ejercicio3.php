<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$numeros= array(
    "uno.jpg"=>[
        "grupo"=>1,
        "especie"=>11
    ],
    "dos.jpg"=>[
        "grupo"=>2,
        "especie"=>22
    ],
    "tres.jpg"=>[
        "grupo"=>3,
        "especie"=>33
    ],
    "cuatro.jpg"=>[
        "grupo"=>4,
        "especie"=>44
    ],
    "cinco.jpg"=>[
        "grupo"=>5,
        "especie"=>55
    ],
    "seis.jpg"=>[
        "grupo"=>6,
        "especie"=>66
    ]);
$nombrenumeros= array("uno.jpg","dos.jpg","tres.jpg","cuatro.jpg","cinco.jpg","seis.jpg");
$animal=$nombrenumeros[rand(0,5)];
    echo "<img src=Animales/" . $animal . "></img><br>";
    echo $animal .":". $numeros[$animal]["grupo"] . " y ". $numeros[$animal]["especie"] . "<br>";
?>
</p> 
</body> 
</html> 