<?php
/*
 * •	Ejercicio 1.- Código mostrar fotos. 
 *      Escribir el código necesario que muestre en una tabla de 2 columnas todas las imágenes del directorio "fotos". 
 *      Si hay una carpeta dentro no mostraremos su contenido, sólo los ficheros que se encuentren en “fotos”.
 */
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$count=0;
echo "<table border=1>";
echo "<caption>fotos<caption>";
foreach (devuelveDir("fotos") as $elemento){
    if($count==0){
        $count++;
        echo "<tr><td><img src='fotos/".$elemento."' width='250px' height='250px'></td>";
    }
    else{
        $count=0;
        echo "<td><img src='fotos/".$elemento."' width='250px' height='250px'></td></tr>";
    }
}
echo "</table>";
pie();
?>