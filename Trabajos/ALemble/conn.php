<?php
//Configuración
$host 	= "mysql.nixiweb.com";
$db	= "u969435197_broms";
$user	= "u969435197_admin";
$pass	= "bender36217598";
//Conexión
$conn = mysql_connect($host, $user, $pass);
mysql_select_db($db,$conn);
?>