<?php

include('conn.php');
session_start();
$usuario = $_SESSION['username'];
$IDUsuario =$_SESSION['iduser'];
$sql_idusuario = mysql_query("	SELECT *
					FROM  `usuarios` 
					WHERE (Username =  '".$usuario."') AND (ID =  '".$IDUsuario."') ", $conn);
if (mysql_num_rows($sql_idusuario) != 1){ mysql_close($conn);header('Location: index.php');}else{

/**************************** INCREMENTO ID COMENTARIO **********************************/

$sql_idcomen = "SELECT MAX(ID) as ID
		FROM comentarios";
$max_id = mysql_query($sql_idcomen, $conn) or die(mysql_error());
if(!$max_id)
{
  die("No se ha podido conectar con la base de datos". $conn->errorInfo());
}
$consulta = mysql_fetch_assoc($max_id);
$ID = $consulta['ID'];
$ID ++;

/****************************** COMPROBACION DE ACCION **********************************/

$IDPost = $_POST['idpost'];

$sql_accion = ("SELECT TIMESTAMPDIFF(MINUTE , u.ultima_accion, NOW( ) )  AS dif
				FROM usuarios u
				WHERE ID = '".$IDUsuario."'");

$query = mysql_query($sql_accion, $conn);
$tiempo = mysql_fetch_assoc($query);
$min = $tiempo['dif'];
if ($min == NULL){ $min = 6;}
if ($usuario == 'Blackjak'){ $min = 6;};
if ($min < 5){
	header('Location: index.php?idpost='.$IDPost.'&type=P&error=32');
}else{


/******************************** INSERTAR COMENTARIO **********************************/

foreach($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            } 

$Fecha = date("Y-m-d");
$texto = $_POST['comentario'];
$nuevocomen = "INSERT INTO comentarios (ID,IDPost,IDUsuario,fecha,Texto)";
$nuevocomen.= "VALUES ('".$ID."','".$IDPost."','".$IDUsuario."',NOW(),'".$texto."')";

$result = mysql_query($nuevocomen, $conn) or die(mysql_error());

$query = mysql_query("  UPDATE usuarios U
						SET U.ultima_accion = NOW()
						WHERE U.ID = $IDUsuario;", $conn);
header('Location: index.php?idpost='.$IDPost.'&type=P');
}
mysql_close($conn);
}

?>