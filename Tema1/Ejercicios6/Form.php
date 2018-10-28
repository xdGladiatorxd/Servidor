<?php if (! isset($resultado))($resultado="");?>
<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	Texto: <input TYPE="text" NAME="texto"><br>
<input type="radio" value="codPostal" name="exR">Codigo Postal<br>
<input type="radio" value="tel" name="exR">Telefono<br>
<input type="radio" value="dir" name="exR">Direccion<br>
<input type="radio" value="user" name="exR">Usuario<br>
<input type="radio" value="email" name="exR">Email<br>
<input type="radio" value="otro" checked name="exR">Otro: <input TYPE="text" NAME="texto"><br>
<input TYPE="submit" name="bAceptar" VALUE="aceptar"><br>
Resultado: <input TYPE="text" NAME="resultado" <?php if($resultado!=""){echo "VALUE='echo $resultado;'";}?>>
</form>