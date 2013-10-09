<?php
include('conn.php');
session_start();
$IDUsuario =$_SESSION['iduser'];
if($IDUsuario) {
$IDUsuario = $_POST['iduser'];
$sql_accion = ("SELECT TIMESTAMPDIFF( MINUTE , u.ultima_accion, NOW( ) ) AS dif
				FROM usuarios u
				WHERE u.ID =".$IDUsuario."");

$query = mysql_query($sql_accion, $conn);
$tiempo = mysql_fetch_assoc($query);
$min = $tiempo['dif'];
if ($_SESSION['username'] == 'Blackjak'){ $min = 6;};
if ($min == NULL){ $min = 6;};
if ($min < 5){
	echo 'false';	
} else{
	echo 'true';}
}
mysql_close($conn);

?>