<?php
include ('ferGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
if (! isset($_REQUEST['bAceptar'])) {
    include ('Form.php');
    ?>
<?php
}  // En esta parte comprobamos los datos recibidos
else {
    $texto = recoge("texto");
    echo $texto;
    if($_POST['exR']=="46015"){
        if ((cCodPostal($texto) == 0)) {
            $error = true;
            $resultado="El codigo Postal esta mal";
        }
    }
    elseif ($_POST['exR']=="tel"){
        if ((cTel($texto) == 0)) {
            $error = true;
            $resultado="El telefono esta mal";
        }
    }
    elseif ($_POST['exR']=="dir"){
        if ((cDirec($texto) == 0)) {
            $error = true;
            $resultado="La direccion esta mal";
        }
    }
    elseif ($_POST['exR']=="user"){
        if ((cUser($texto) == 0)) {
            $error = true;
            $resultado="El usuario esta mal";
        }
    }
    elseif ($_POST['exR']=="email"){
        if ((cEmail($texto) == 0)) {
            $error = true;
            $resultado="El email esta mal";
        }
    }
    if (!$error) {
        $resultado="Esta correcto";
    }
    header("location:form.php");
}
?>
<?php

pie();
?>
	