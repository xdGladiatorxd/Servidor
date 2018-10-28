<?php
function cabecera($titulo="ejercicio7.php"){
    return "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <title>".$titulo."</title>
    </head>
    ";
}
function cabeceraConCSS($src, $titulo="ejercicio7.php"){
    return "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <title>".$titulo."</title>
    <link rel='stylesheet' href='" . $src ."'/>
    </head>
    ";
}
echo cabecera("titulo");
echo cabeceraConCSS("src","titulo");