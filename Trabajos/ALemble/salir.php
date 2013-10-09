<?php
include('conn.php');
session_start();
$usuario = $_SESSION['username'];
$IDUsuario =$_SESSION['iduser'];
$sql_idusuario = mysql_query("	SELECT *
					FROM  `usuarios` 
					WHERE (Username =  '".$usuario."') AND (ID =  '".$IDUsuario."') ", $conn);
if (mysql_num_rows($sql_idusuario) != 1){ mysql_close($conn);header('Location: index.php');}else{

session_start();//para saber cual es la sesion a destruir
session_unset();//para eliminar las variables de sesion
session_destroy();//con esto destruyes la sesion
header('Location: index.php');

}
?>