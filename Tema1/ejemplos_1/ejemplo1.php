<!-- Ejemplo 1. En este ejemplo podemos ver una página 
muy sencilla. Tiene tres bloques de código: 
al comienzo la cabecera HTML, después un fragmento en PHP y finalmente el cierre de la página 
otra vez en HTML.-->

<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hola Mundo</title>
</head>
<body>
	<p> 
	<?php
echo "<strong>Hola Mundo </strong><br>";
echo "Qué tal estáis?";
// Comentario en php
// Comentario en php
/*
  Comentario dos
  Líneas
 */
?> 
    </p>
</body>
</html>
