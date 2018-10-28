<?php
function sinTildes($cadena){
    $tilde=array("á", "é", "i", "ó", "ú", "Á", "É", "Í", "Ó", "Ú");
    $sintilde=array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    for ($i = 0; $i < count($tilde); $i++) {
        $cadena=str_replace($tilde[$i], $sintilde[$i], $cadena);
    }
    return $cadena;
}
function sinEspacios($cadena){
    $cadena = trim(preg_replace('/ +/', ' ', $cadena));
    return $cadena;
}
function compCaseEsp($cadena1, $cadena2){
    $tilde=array("á", "é", "i", "ó", "ú", "Á", "É", "Í", "Ó", "Ú");
    $sintilde=array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    for ($i = 0; $i < count($tilde); $i++) {
        $cadena1=str_replace($tilde[$i], $sintilde[$i], $cadena1);
        $cadena2=str_replace($tilde[$i], $sintilde[$i], $cadena2);
    }
    $cadena1 = trim(preg_replace('/ +/', ' ', $cadena1));
    $cadena2 = trim(preg_replace('/ +/', ' ', $cadena2));
    $r=strcasecmp($cadena1,$cadena2);
    return $r;
}
?>