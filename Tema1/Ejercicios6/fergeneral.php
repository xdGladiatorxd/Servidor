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
	if (preg_match("/^[0-9]$/", $num))
		return 1;
	else
		return 0;
}
function cCodPostal ($codPostal)
{
    if (preg_match("/^[0-9]{5}$/", $codPostal)) {
        return 1;
    }else{
        return 0;
    }
}
function cTel ($tel)
{
    $tel=trim(preg_replace('/ +/', '', $tel));
    $tel=trim(preg_replace('/\-+/', '', $tel));
    if (preg_match("/^[0-9]{9}$/", $tel)) {
        return 1;
    }else{
        return 0;
    }
}
function cDirec ($direc)
{
    if (preg_match("/(calle|avenida|direccion)/", $direc)) {
        return 1;
    }else{
        return 0;
    }
}
function cUser ($user)
{
    if (preg_match("/^[a-z]{1}[a-z0-9_]{7,23}[^_]$/iu", $user)) {
        return 1;
    }else{
        return 0;
    }
}
function cEmail ($email)
{
    if (preg_match("/^[a-z]{1}[a-z0-9._]{2}[@]{1}[a-z0-9]+[.]+[a-z]{2}$/i", $email)) {
        return 1;
    }else{
        return 0;
    }
}
?>