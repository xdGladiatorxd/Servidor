<?php
/*
 * •	•	•	Ejercicio 3.- Código mostrar fotos. Modificar el ejercicio 2, de manera que crearemos una tabla para el contenido de cada carpeta.
 */
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
echo "<table border=1>";
echo "<tr>";
foreach(devuelveDirSubdir3("fotos") as $elemento){
    if(!is_array($elemento)){
        if($count==0){
            $count++;
            echo "<td><img src='".$elemento."' width='250px' height='250px'></td>";
        }
        else{
            $count=0;
            echo "<td><img src='".$elemento."' width='250px' height='250px'></td></tr><tr>";
        }
    }
    else{
        if($table==1){
            echo "</table>";
            $table=0;
        }
        echo "<table border=1>";
        $table++;
        foreach ($elemento as $dato){
            if($count==0){
                $count++;
                echo "<td><img src='".$dato."' width='250px' height='250px'></td>";
            }
            else{
                $count=0;
                echo "<td><img src='".$dato."' width='250px' height='250px'></td></tr><tr>";
            }
        }
        if($table==1){
            echo "</table>";
            $table=0;
        }
        echo "<table border=1>";
    }
}
pie();
?>