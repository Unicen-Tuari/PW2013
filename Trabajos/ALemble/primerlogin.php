<?php

include('conn.php');

$username = $_POST['usernamelogin'];
$password = $_POST['password'];
$codactivacion = $_POST['codactivacion'];

$sql = "SELECT ID
		FROM usuarios 
		WHERE (username = '$username') AND (password = '$password') AND (codactivacion = '$codactivacion') ";
$query_login = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_login)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

if (mysql_num_rows($query_login) == 1) {
$sql = "UPDATE usuarios 
		SET activado=1
		WHERE codactivacion='$codactivacion'";
mysql_query($sql,$conn);
$consulta = mysql_fetch_assoc($query_login);
mysql_close($conn);
session_start();
$_SESSION['username']  = $username;
$_SESSION['iduser']  = $consulta['ID'];
header('Location: index.php');
    } else{
mysql_close($conn);
    header('Location: activacion.php?id='.$codactivacion.'&verif=bad');
}
?>