<?php
include ('ferGeneral.php');
cabecera($_SERVER['PHP_SELF']);
if (! isset($_REQUEST['bAceptar'])) {
    include ('Form.php');
    ?>
<?php
}  // En esta parte comprobamos los datos recibidos
else {
    $texto = recoge("texto");
    $texto2 = recoge("texto2");
    if($_POST['exR']=="codPostal"){
        if ((cCodPostal($texto) == 0)) {
            $resultado="El codigo postal esta mal";
        }
        else{
            $resultado="El codigo postal esta bien";
        }
    }
    elseif ($_POST['exR']=="tel"){
        if ((cTel($texto) == 0)) {
            $resultado="El telefono esta mal";
        }
        else{
            $resultado="El telefono esta bien";
        }
    }
    elseif ($_POST['exR']=="dir"){
        if ((cDirec($texto) == 0)) {
            $resultado="La direccion esta mal";
        }
        else{
            $resultado="La direccion esta bien";
        }
    }
    elseif ($_POST['exR']=="user"){
        if ((cUser($texto) == 0)) {
            $resultado="El usuario esta mal";
        }
        else{
            $resultado="El usuario esta bien";
        }
    }
    elseif ($_POST['exR']=="email"){
        if ((cEmail($texto) == 0)) {
            $resultado="El email esta mal";
        }
        else{
            $resultado="El email Postal esta bien";
        }
    }
    elseif ($_POST['exR']=="otro"){
        if ((cOtro($texto,$texto2) == 0)) {
            $resultado="El texto esta mal";
        }
        else{
            $resultado="El texto esta bien";
        }
    }
    header("location:correcto.php?resultado=$resultado");
}
?>
<?php

pie();
?>
	