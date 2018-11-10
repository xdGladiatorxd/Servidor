<?php

function cabecera($titulo) //el archivo actual
{
?>
<!DOCTYPE html>
		<html lang="es">
			<head>
				<title>
				<?php
				echo $titulo;
				?>
			
			</title>
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function cTexto ($text)
{
	if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
		return 1;
	else 
		return 0;
}


function cNum ($num)
{
	if (preg_match("/^[0-9]+$/", $num))
		return 1;
	else
		return 0;
}
/*
 * •	Función que recorre y devuelve el contenido de un directorio 
 *      Realiza una función devuelveDir que recorre un directorio devolviendo 
 *      los nombre de los ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 * 
 */
function devuelveDir($ruta) {
    $array=array();
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) != false) {
                if(is_file($ruta . "/" . $file)){
                    $array[]=$file;
                }
            }
        }
        closedir($dh);
    }else
        $array[]="<br>No es ruta valida";
    return $array;
}
/*
 * •	Función recorre directorio y subdirectorios. Realiza una función devuelveDirSubdir 
 * que recorre un directorio y sus subdirectorios devuelve el nombre de los ficheros que contienen cada uno de ellos. 
 * Devolvemos el nombre con la ruta completa. Devolvemos array.
 */
function devuelveDirSubdir1($ruta) {
    $array=array();
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) != false) {
                if(is_file($ruta . "/" . $file)){
                    $array[]=$ruta . "/" . $file;
                }
                if (is_dir($ruta . "/" . $file) && $file!="." && $file!=".."){
                    $array=array_merge($array,devuelveDirSubdir1($ruta . "/" . $file));
                }
            }
        }
        closedir($dh);
    }else
        $array[]="<br>No es ruta valida"; 
    return $array;
}
function devuelveDirSubdir2($ruta) {
    $array=array();
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) != false) {
                if(is_file($ruta . "/" . $file)){
                    $array[]=$ruta . "/" . $file;
                }
                if (is_dir($ruta . "/" . $file) && $file!="." && $file!=".."){
                    $array[$file]=devuelveDirSubdir2($ruta . "/" . $file);
                }
            }
        }
        closedir($dh);
    }else
        $array[]="<br>No es ruta valida";
        return $array;
}
function mostrarArrayMultidimensional($array){
    foreach ($array as $elemento){
        if(!is_array($elemento)){
            echo $elemento."<br>";
        }
        else{
            foreach ($elemento as $dato){
                echo $dato."<br>";
            }
        }
    }
}
function devuelveDirSubdir3($ruta) {
    $array1=array();
    $array2=array();
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) != false) {
                if(is_file($ruta . "/" . $file)){
                    $array1[]=$ruta . "/" . $file;
                }
                if (is_dir($ruta . "/" . $file) && $file!="." && $file!=".."){
                    $array2[]=$ruta . "/" . $file;
                }
            }
            foreach ($array2 as $elemento){
                $array1[$elemento]=devuelveDirSubdir3($elemento);
            }
        }
        closedir($dh);
    }else
        $array1[]="<br>No es ruta valida";
    return $array1;
}
/*
function devuelveDirSubdir3($ruta) {
    $array1=array();
    $array2=array();
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            while (($file = readdir($dh)) != false) {
                if(is_file($ruta . "/" . $file)){
                    $array1[]=$ruta . "/" . $file;
                }
                if (is_dir($ruta . "/" . $file) && $file!="." && $file!=".."){
                    $array2[]=$ruta . "/" . $file;
                }
            }
            foreach ($array1 as $elemento){
                echo $elemento;
            }
            foreach ($array2 as $elemento){
                echo devuelveDirSubdir3($elemento);
            }
        }
        closedir($dh);
    }else
        $array1[]="<br>No es ruta valida";
}
devuelveDirSubdir3("fotos")
*/
?>