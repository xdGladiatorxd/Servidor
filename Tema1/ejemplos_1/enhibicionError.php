<?php
/*Con la @ conseguimos que no se muestre el error pero solo hay que utilizarlo 
cuando sea muy complicado eliminar el error con comprobaciones previas */

@$archivo = fopen("noexiste.txt", "r");
?>
