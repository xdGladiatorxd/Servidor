<?php
/*
 * •	•	Ejercicio 2.- Código mostrar fotos. Modificar el ejercicio 1, 
 *          de manera que en la carpeta fotos podemos tener tanto fotos como otras carpetas 
 *          que a su vez también pueden tener imágenes. 
 */
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$count=0;
echo "<table border=1>";
echo "<caption>fotos<caption>";
foreach (devuelveDirSubdir1("fotos") as $elemento){
    if($count==0){
        $count++;
        echo "<tr><td><img src='".$elemento."' width='250px' height='250px'></td>";
    }
    else{
        $count=0;
        echo "<td><img src='".$elemento."' width='250px' height='250px'></td></tr>";
    }
}
pie();
?>