    <form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"
    METHOD="post">
    Texto: <input TYPE="text" name="texto"><br>
    <input type="radio" value="codPostal" checked name="exR">Codigo Postal<br>
    <input type="radio" value="tel" name="exR">Telefono<br>
    <input type="radio" value="dir" name="exR">Direccion<br>
    <input type="radio" value="user" name="exR">Usuario<br>
    <input type="radio" value="email" name="exR">Email<br>
    <input type="radio" value="otro" name="exR">Otro: <input TYPE="text" name="texto2"><br>
    <input TYPE="submit" name="bAceptar" VALUE="Aceptar"><br>
</form>