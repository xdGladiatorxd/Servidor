<?php
require_once ('bGeneral.php');
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


function recogeArray($var)
{
    if (!empty($_REQUEST[$var])){
        $array=$_REQUEST[$var];
        foreach ($array as $value){
            $tmp[]=strip_tags(sinEspacios($value));
        }
    }else
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
function cTextoEspacio ($text)
{
    if (preg_match("/^[A-Za-zÑñ ]+$/", sinTildes($text)))
        return 1;
    else
        return 0;
}

function cNumTexto ($text)
{
    if (preg_match("/^[A-Za-zÑñ0-9]+$/", sinTildes($text)))
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
function fecha1($fecha){
    $array=preg_split('/\/|-|\./', $fecha);
    if(is_array($array)){
        if(count($array)==3){
            $fecha_valida = checkdate($array[1],$array[0],$array[2]);
            if ($fecha_valida==true)
                return mktime(0,0,0,$array[1],$array[0],$array[2]);
        }
    }
    return 0;
}
echo fecha1("15/08/1999")."<br>";
function fecha2($fecha){
    $array=preg_split('/\/|-|\./', $fecha);
    if(is_array($array)){
        if(count($array)==3){
            $fecha_valida = checkdate($array[1],$array[2],$array[0]);
            if ($fecha_valida==true)
                return mktime(0,0,0,$array[1],$array[2],$array[0]);
        }
    }
    return 0;
}
echo fecha2("1999/08/15")."<br>";
function fecha3($fecha,$tipo){
    if($tipo==0)
        return date('d-m-Y',$fecha);
    else
        return date('Y-m-d',$fecha);
}
echo fecha3(934668000,0)."<br>";
function fecha4($fecha1,$fecha2){
    $array1=preg_split('/\/|-|\./', $fecha1);
    $array2=preg_split('/\/|-|\./', $fecha2);
    if(is_array($array1)){
        if(count($array1)==3){
            $fecha_valida = checkdate($array1[1],$array1[2],$array1[0]);
            if ($fecha_valida==true){
                $time1 = mktime(0,0,0,$array1[1],$array1[2],$array1[0]);
            }
            else{
                $fecha_valida = checkdate($array1[1],$array1[0],$array1[2]);
                if ($fecha_valida==true){
                    $time1 = mktime(0,0,0,$array1[1],$array1[0],$array1[2]);
                }
                else{
                    return 0;
                }
            }
        }
    }
    else{
        return 0;
    }
    if(is_array($array2)){
        if(count($array2)==3){
            $fecha_valida = checkdate($array2[1],$array2[2],$array2[0]);
            if ($fecha_valida==true){
                $time2 = mktime(0,0,0,$array2[1],$array2[2],$array2[0]);
            }
            else{
                $fecha_valida = checkdate($array2[1],$array2[0],$array2[2]);
                if ($fecha_valida==true){
                    $time2 = mktime(0,0,0,$array2[1],$array2[0],$array2[2]);
                }
                else{
                    return 0;
                }
            }
        }
    }
    else{
        return 0;
    }
    $r=(($time1-$time2)/60/60/24);
    if($r<0){
        $r=$r*-1;
    }
    return $r;
}
echo fecha4("18/08/1999","1999.09.29")."<br>";
/*
Realiza una función que muestre una imagen diferente según la estación del año. Para
facilitarlo podemos tener en cuenta como primavera (marzo, abril, mayo) y así
sucesivamente.
*/
function fecha5($fecha){
    $array=preg_split('/\/|-|\./', $fecha);
    if($array[1]>=3 && $array[1]<=5){
        echo "<img src='Imagenes/primavera.jpg' width='250px' heigth='250px'>"."<br>";
    }
    else if($array[1]>=6 && $array[1]<=8){
        echo "<img src='Imagenes/verano.jpg' width='250px' heigth='250px'>"."<br>";
    }
    else if($array[1]>=9 && $array[1]<=11){
        echo "<img src='Imagenes/otoño.jpg' width='250px' heigth='250px'>"."<br>";
    }
    else if($array[1]==12 || ($array[1]>=1 && $array[1]<=2)){
        echo "<img src='Imagenes/invierno.jpg' width='250px' heigth='250px'>"."<br>";
    }
    return 0;
}
fecha5("18/08/1999");
function recogeFecha($fecha){
    $array1=preg_split('/\/|-|\./', $fecha);
    if(is_array($array1)){
        if(count($array1)==3){
            $fecha_valida = checkdate($array1[1],$array1[2],$array1[0]);
            if ($fecha_valida==true){
                return true;
            }
            else{
                $fecha_valida = checkdate($array1[1],$array1[0],$array1[2]);
                if ($fecha_valida==true){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
    }
    else{
        return false;
    }
}
if(recogeFecha("15/08/1999")){
    echo "bien";
}
else{
    echo "mal";
}
?>