<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
function ftabla($array, $key){
    $dimensiones=0;
    if (is_array($array)){
    if($dimensiones==0){
        if($dimensiones<1)
            $dimensiones=1;
            if($dimensiones==1){
                    foreach ($array as $elemento) {
                        if (is_array($elemento)){
                        if($dimensiones<2)
                            $dimensiones=2;
                            if($dimensiones==2){
                                    foreach ($elemento as $elem) {
                                        if (is_array($elem)){
                                            if($dimensiones<3)
                                                $dimensiones=3;
                                                if($dimensiones==3){
                                                    if (is_array($elemento)){
                                                        foreach ($elem as $el) {
                                                            if (is_array($el)){
                                                                if($dimensiones<4)
                                                                    $dimensiones=4;
                                                            }
                                                        }
                                                    }
                                                }
                                        }
                                    }
                                }
                            }
                    }
                }
            }
    }
    if($dimensiones==0){
        echo "
            <table border=1>
            <tr>
            <td>No has pasado un array</td>
            </tr>
            </table>
        ";
    }
    elseif($dimensiones==1){
            echo "<table border=1 style='text-align: center;'><tr>";
            foreach ($array as $tipos=>$lenguaje){
                if($key=="si"){
                    echo "<tr><td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $lenguaje ."</td>";
                    echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ffa996'>" . $tipos ."</td>";
                }
                else {
                    echo "<tr><td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $lenguaje ."</td>";
                }
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table>";
        }
        elseif ($dimensiones==2) {
            echo "<table border=1 style='text-align: center;'><tr>";
            foreach ($array as $tipos=>$lenguaje){
                if(is_array($lenguaje)){
                echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $tipos . "</td><tr>";
                foreach ($lenguaje as $dato=>$contenido){
                    if($key=="si"){
                        echo "<tr><td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#00b6ff'>" . $contenido ."</td>";
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#7fdaff'>" . $dato ."</td>";
                    }
                    else {
                        echo "<tr><td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#00b6ff'>" . $contenido ."</td>";
                    }
                    echo "</tr>";
                }
                echo "</tr>";
                }
                else{
                    if($key=="si"){
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $lenguaje . "</td>";
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ffa996'>" . $tipos . "</td>";
                    }
                    else{
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $lenguaje . "</td>";
                    }
                }
            }
            echo "</tr>";
            echo "</table>";
        }
        elseif($dimensiones==3){
            echo "<table border=1 style='text-align: center;'><tr>";
            foreach ($array as $tipos=>$lenguaje){
                if(is_array($lenguaje)){
                    echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $tipos . "</td><tr>";
                foreach ($lenguaje as $dato=>$contenido){
                    if(is_array($contenido)){
                    echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#00b6ff'>" . $dato . "</td><tr>";
                    foreach ($contenido as $dat=>$contenid){
                        if($key=="si"){
                            echo "<tr><td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff00f3'>" . $contenid ."</td>";
                            echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ffd1fd'>" . $dat ."</td>";
                        }
                        else {
                            echo "<tr><td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff00f3'>" . $contenid ."</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</tr>";
                }
                else{
                    if($key=="si"){
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#00b6ff'>" . $contenido . "</td>";
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#7fdaff'>" . $dato . "</td>";
                    }
                    else{
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#00b6ff'>" . $contenido . "</td>";
                    }
                }
                }
                echo "</tr>";
                }
                else {
                    if($key=="si"){
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $lenguaje . "</td>";
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ffa996'>" . $tipos . "</td>";
                    }
                    else{
                        echo "<td style='padding-right: 25px; padding-left: 25px; padding-bottom: 10px; background-color:#ff2e00'>" . $lenguaje . "</td>";
                    }
                }
            }
            echo "</tr>";
            echo "</table>";
        }
        elseif($dimensiones==4){
            echo "
            <table border=1>
            <tr>
            <td>Esta funcion no esta preparada para un array de mas de tres dimensiones</td>
            </tr>
            </table>
        ";
        }
}
$a=array("Contenido 1"=>"Tipo 1","Contenido 2"=>"Tipo 2");
$b=array(
    "1"=>[
        "1.1"
    ],
    "2"=>[
        "2.2"=>"miel",
        "2.3"=>"leon"
    ]
);
$c=array(
    "1"=>[
        "1.1"=>[
            "1.1.1","1.1.2"
        ],
        "1.2"=>[
            "1.2.1","1.2.2"
        ]
    ],
    "2"=>[
        "2.1"=>[
            "2.1.1"
        ]
    ]
);
$d=array(
    "1"=>[
        "1.1"=>[
            "1.1.1"=>[
                "1.1.1.1"
            ]
        ]
    ],
    "2"=>[
        "2.1"=>[
            "2.1.1"=>[
                "2.1.1.1"
            ]
        ]
    ]
);
$e=array(
    "1"=>[
        "1.1"=>[
            "Indice 1"=>"1.1.1"
        ],
        "1.2"=>[
            "Indice 2"=>"1.2.1"
        ]
    ],
    "2"=>[
        "2.1"
    ],
    "3"
);
$f=0;
$g=array(
    "1º curso"=>[
        "Lenguaje"=>[
            "6"=>"Marcos",
            "7"=>"Maria"
        ],
        "Matematicas"=>[
            "10"=>"Marcos",
            "7"=>"Maria"
        ]
    ]
);
ftabla($a,"si");
ftabla($b,"si");
ftabla($c,"no");
ftabla($d,"si");
ftabla($e,"si");
ftabla($f,"si");
ftabla($g,"si");
?>
</p> 
</body> 
</html> 