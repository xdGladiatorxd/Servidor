<?php
include ('ferGeneral.php');
cabecera ($_SERVER ['PHP_SELF']); //el archivo actual
echo "Resultado: ". $_GET['resultado']."<br>";
echo "<a href='selfDos.php'>Volver</a>";
pie();
?>