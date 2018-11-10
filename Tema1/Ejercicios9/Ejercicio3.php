<?php
/*
 * •	•	•	Ejercicio 3.- Código mostrar fotos. Modificar el ejercicio 2, de manera que crearemos una tabla para el contenido de cada carpeta.
 */
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$count=0;
$caption=0;
echo "<table border=1>";
echo "<caption>fotos<caption>";
foreach (devuelveDirSubdir3("fotos") as $key1=>$elemento){
    if(!is_array($elemento)){
        if($count==0){
            $count++;
            echo "<tr><td><img src='".$elemento."' width='250px' height='250px'></td>";
        }
        else{
            $count=0;
            echo "<td><img src='".$elemento."' width='250px' height='250px'></td></tr>";
        }
    }
    else{
        $caption=1;
        echo "</table>";
        echo "<table border=1>";
        echo "<caption>".$key1."<caption>";
        foreach ($elemento as $dato){
            if($count==0){
                $count++;
                echo "<tr><td><img src='".$dato."' width='250px' height='250px'></td>";
            }
            else{
                $count=0;
                echo "<td><img src='".$dato."' width='250px' height='250px'></td></tr>";
            }
        }
        echo "</table>";
    }
}
if($caption==0){
    echo "</table>";
}
pie();
?>