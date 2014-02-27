<?php

include('conn.php');

$username = $_POST['usernamelogin'];
$password = $_POST['passwordlogin'];
$sql = "SELECT ID, username, activado, baneado
		FROM usuarios
		WHERE ((username = '$username') AND (password = '$password')) ";
$query_login = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_login)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

if (mysql_num_rows($query_login) == 0) {
	mysql_close($conn);
    header('Location: index.php?error=9');
    } else{
$consulta = mysql_fetch_assoc($query_login);
if ($consulta['activado'] == 0) {
	header('Location: index.php?error=36');
}else if ($consulta['baneado'] == 1) {
	header('Location: index.php?error=37');
} else{
mysql_close($conn);
session_start();
$_SESSION['username']  = $consulta['username'];
$_SESSION['iduser']  = $consulta['ID'];
header('Location: index.php');
}
}
?>