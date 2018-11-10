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
function cEmail ($correo)
{
    if (filter_var($correo, FILTER_VALIDATE_EMAIL) ) {
        return 1;
    }else{
        return 0;
    }
}
function cFile ($dirA, $maxA, $imgA, $extA, &$errores)
{
    $dir = $dirA;
    $max_file_size = $maxA;
    $extensionesValidas = $extA;
    if ($_FILES[$imgA]['error'] != 0) {
        switch ($_FILES[$imgA]['error']) {
            case 1:
                $errores[]="UPLOAD_ERR_INI_SIZE";
                $errores[]="Fichero demasiado grande";
                break;
            case 2:
                $errores[]="UPLOAD_ERR_FORM_SIZE";
                $errores[]='El fichero es demasiado grande';
                break;
            case 3:
                $errores[]="UPLOAD_ERR_PARTIAL";
                $errores[]='El fichero no se ha podido subir entero';
                break;
            case 4:
                $errores[]="UPLOAD_ERR_NO_FILE";
                $errores[]='No se ha podido subir el fichero';
                break;
            case 6:
                $errores[]="UPLOAD_ERR_NO_TMP_DIR";
                $errores[]="Falta carpeta temporal";
            case 7:
                $errores[]="UPLOAD_ERR_CANT_WRITE";
                $errores[]="No se ha podido escribir en el disco";
                
            default:
                $errores[]='Error indeterminado.';
        }
        return "0";
    } else {
        // Guardamos el nombre original del fichero
        $nombreArchivo = $_FILES[$imgA]['name'];
        // Guardamos tamaño fichero
        $filesize = $_FILES[$imgA]['size'];
        // Guardamos nombre del fichero en el servidor
        $directorioTemp = $_FILES[$imgA]['tmp_name'];
        // Guardamos la información del archivo en un array
        $arrayArchivo = pathinfo($nombreArchivo);
        /*
         * Extraemos la extensión del fichero, desde el último punto. Si hubiese doble extensión, no lo
         * tendría en cuenta.
         */
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensión del archivo dentro de la lista que hemos definido al principio
        if(is_array($extensionesValidas)){
            if (! in_array($extension, $extensionesValidas)) {
                $errores[]="La extensión del archivo no es válida o no se ha subido ningún archivo";
            }
        }
        else{
            if($extension!=$extensionesValidas){
                $errores[]="La extensión del archivo no es válida o no se ha subido ningún archivo";
            }
        }
        // Comprobamos el tamaño del archivo
        if ($filesize > $max_file_size) {
            $errores[]="La imagen debe de tener un tamaño inferior a 50 kb";
        }
        
        // Almacenamos el archivo en ubicación definitiva si no hay errores
        if (empty($errores)) {
            // Añadimo time() al nombre del fichero, así lo haremos único y si tuviera doble extensión
            // Haríamos inservible la segunda.
            $nombreArchivo = $arrayArchivo['filename'] . time();
            $nombreCompleto = $dir . $nombreArchivo . "." . $extension;
            // Movemos el fichero a la ubicación definitiva
            if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
                $errores[]="El fichero \"$nombreCompleto\" ha sido guardado";
                return $nombreCompleto;
            } else {
                $errores[]="Error: No se puede mover el fichero a su destino";
            }
        }
        return "0";
    }
}
?>