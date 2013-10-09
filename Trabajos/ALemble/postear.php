<?php

/*****************************************consulta id usuario********************************************/
include('conn.php');
session_start();
$usuario = $_SESSION['username'];
$IDUsuario =$_SESSION['iduser'];
$sql_idusuario = mysql_query("	SELECT *
					FROM  `usuarios` 
					WHERE (Username =  '".$usuario."') AND (ID =  '".$IDUsuario."') ", $conn);
if (mysql_num_rows($sql_idusuario) != 1){ mysql_close($conn);header('Location: index.php');}else{

$IDCategoria = $_POST['categoria'];

$sql_accion = ("SELECT TIMESTAMPDIFF( MINUTE , u.ultima_accion, NOW( ) ) AS dif
				FROM usuarios u
				WHERE u.ID =".$IDUsuario."");

$query = mysql_query($sql_accion, $conn);
$tiempo = mysql_fetch_assoc($query);
$min = $tiempo['dif'];
if ($_SESSION['username'] == 'Blackjak'){ $min = 6;};
if ($min == NULL){ $min = 6;};
if ($min < 5){
	if ($IDCategoria == 1){header('Location: index.php?error=33',FALSE);}
	if ($IDCategoria == 2){header('Location: index.php?error=34',FALSE);}
	if ($IDCategoria == 3){header('Location: index.php?error=35',FALSE);}
} else{

/*****************************************consulta id post********************************************/

$sql_idpost = "SELECT MAX(ID) as ID
		FROM posts";

$max_id = mysql_query($sql_idpost, $conn) or die(mysql_error());
if(!$max_id)
{
  die("No se ha podido conectar con la base de datos". $conn->errorInfo());
}
$consulta = mysql_fetch_assoc($max_id);
$IDPost = $consulta['ID'];
$IDPost ++;

/*****************************************verificaciones*************************************************/

foreach($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            } 

$Fecha = date("Y-m-d");
if (isset($_POST['titulo'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['titulo']);
}if (isset($_POST['imagen'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['imagen']);
}if (isset($_POST['sinopsis'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['sinopsis']);
}if (isset($_POST['descripcion'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['descripcion']);
}if (isset($_POST['min_so'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_so']);
}if (isset($_POST['min_procesador'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_procesador']);
}if (isset($_POST['min_memoria'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_memoria']);
}if (isset($_POST['min_video'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_video']);
}if (isset($_POST['min_espacio'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_espacio']);
}if (isset($_POST['min_librerias'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_librerias']);
}if (isset($_POST['min_otros'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_otros']);
}if (isset($_POST['rec_so'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_so']);
}if (isset($_POST['rec_procesador'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_procesador']);
}if (isset($_POST['rec_memoria'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_memoria']);
}if (isset($_POST['rec_video'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_video']);
}if (isset($_POST['rec_espacio'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_espacio']);
}if (isset($_POST['rec_librerias'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_librerias']);
}if (isset($_POST['rec_otros'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_otros']);
}if (isset($_POST['trailer'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['trailer']);
}

if (isset($_POST['enlace1'])){
	$enlace1 = $_POST['enlace1'];
}

if (isset($_POST['descarga1'])){
	$descarga1 = $_POST['descarga1'];
} else{
	$descarga1 = NULL;
}

if (isset($_POST['enlace2'])){
	$enlace2 = $_POST['enlace2'];
}

if (isset($_POST['descarga2'])){
	$descarga2 = $_POST['descarga2'];
} else{
	$descarga2 = NULL;
}


if (isset($_POST['enlace3'])){
	$enlace3 = $_POST['enlace3'];
}

if (isset($_POST['descarga3'])){
	$descarga3 = $_POST['descarga3'];
} else{
	$descarga3 = NULL;
}


if (isset($_POST['enlace4'])){
	$enlace4 = $_POST['enlace4'];
} else{
	$enlace4 = NULL;
}

if (isset($_POST['descarga4'])){
	$descarga4 = $_POST['descarga4'];
} else{
	$descarga4 = NULL;
}


if (isset($_POST['enlace5'])){
	$enlace5 = $_POST['enlace5'];
} else{
	$enlace5 = NULL;
}

if (isset($_POST['descarga5'])){
	$descarga5 = $_POST['descarga5'];
} else{
	$descarga5 = NULL;
}


if (isset($_POST['enlace6'])){
	$enlace6 = $_POST['enlace6'];

} else{
	$enlace6 = NULL;
}

if (isset($_POST['descarga6'])){
	$descarga6 = $_POST['descarga6'];
} else{
	$descarga6 = NULL;
}


if (isset($_POST['enlace7'])){
	$enlace7 = $_POST['enlace7'];

} else{
	$enlace7 = NULL;
}

if (isset($_POST['descarga7'])){
	$descarga7 = $_POST['descarga7'];
} else{
	$descarga7 = NULL;
}


if (isset($_POST['enlace8'])){
	$enlace8 = $_POST['enlace8'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace8);
} else{
	$enlace8 = NULL;
}

if (isset($_POST['descarga8'])){
	$descarga8 = $_POST['descarga8'];
} else{
	$descarga8 = NULL;
}


if (isset($_POST['enlace9'])){
	$enlace9 = $_POST['enlace9'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace9);
} else{
	$enlace9 = NULL;
}

if (isset($_POST['descarga9'])){
	$descarga9 = $_POST['descarga9'];
} else{
	$descarga9 = NULL;
}


if (isset($_POST['enlace10'])){
	$enlace10 = $_POST['enlace10'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace10);
} else{
	$enlace10 = NULL;
}

if (isset($_POST['descarga10'])){
	$descarga10 = $_POST['descarga10'];
} else{
	$descarga10 = NULL;
}


if (isset($_POST['enlace11'])){
	$enlace11 = $_POST['enlace11'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace11);
} else{
	$enlace11 = NULL;
}

if (isset($_POST['descarga11'])){
	$descarga11 = $_POST['descarga11'];
} else{
	$descarga11 = NULL;
}


if (isset($_POST['enlace12'])){
	$enlace12 = $_POST['enlace12'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace12);
} else{
	$enlace12 = NULL;
}

if (isset($_POST['descarga12'])){
	$descarga12 = $_POST['descarga12'];
} else{
	$descarga12 = NULL;
}


if (isset($_POST['enlace13'])){
	$enlace13 = $_POST['enlace13'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace13);
} else{
	$enlace13 = NULL;
}

if (isset($_POST['descarga13'])){
	$descarga13 = $_POST['descarga13'];
} else{
	$descarga13 = NULL;
}


if (isset($_POST['enlace14'])){
	$enlace14 = $_POST['enlace14'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace14);
} else{
	$enlace14 = NULL;
}

if (isset($_POST['descarga14'])){
	$descarga14 = $_POST['descarga14'];
} else{
	$descarga14 = NULL;
}


if (isset($_POST['enlace15'])){
	$enlace15 = $_POST['enlace15'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace15);
} else{
	$enlace15 = NULL;
}

if (isset($_POST['descarga15'])){
	$descarga15 = $_POST['descarga15'];
} else{
	$descarga15 = NULL;
}


if (isset($_POST['enlace16'])){
	$enlace16 = $_POST['enlace16'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace16);
} else{
	$enlace16 = NULL;
}

if (isset($_POST['descarga16'])){
	$descarga16 = $_POST['descarga16'];
} else{
	$descarga16 = NULL;
}


if (isset($_POST['enlace17'])){
	$enlace17 = $_POST['enlace17'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace17);
} else{
	$enlace17 = NULL;
}

if (isset($_POST['descarga17'])){
	$descarga17 = $_POST['descarg17a'];
} else{
	$descarga17 = NULL;
}


if (isset($_POST['enlace18'])){
	$enlace18 = $_POST['enlace18'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace18);
} else{
	$enlace18 = NULL;
}

if (isset($_POST['descarga18'])){
	$descarga18 = $_POST['descarga18'];
} else{
	$descarga18 = NULL;
}


if (isset($_POST['enlace19'])){
	$enlace19 = $_POST['enlace19'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace19);
} else{
	$enlace19 = NULL;
}

if (isset($_POST['descarga19'])){
	$descarga19 = $_POST['descarga19'];
} else{
	$descarga19 = NULL;
}


if (isset($_POST['enlace20'])){
	$enlace20 = $_POST['enlace20'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace20);
} else{
	$enlace20 = NULL;
}

if (isset($_POST['descarga20'])){
	$descarga20 = $_POST['descarga20'];
} else{
	$descarga20 = NULL;
}


if (isset($_POST['enlace21'])){
	$enlace21 = $_POST['enlace21'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace21);
} else{
	$enlace21 = NULL;
}

if (isset($_POST['descarga21'])){
	$descarga21 = $_POST['descarga21'];
} else{
	$descarga21 = NULL;
}


if (isset($_POST['enlace22'])){
	$enlace22 = $_POST['enlace22'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace22);
} else{
	$enlace22 = NULL;
}

if (isset($_POST['descarga22'])){
	$descarga22 = $_POST['descarga22'];
} else{
	$descarga22 = NULL;
}


if (isset($_POST['enlace23'])){
	$enlace23 = $_POST['enlace23'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace23);
} else{
	$enlace23 = NULL;
}

if (isset($_POST['descarga23'])){
	$descarga23 = $_POST['descarga23'];
} else{
	$descarga23 = NULL;
}


if (isset($_POST['enlace24'])){
	$enlace24 = $_POST['enlace24'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace24);
} else{
	$enlace24 = NULL;
}

if (isset($_POST['descarga24'])){
	$descarga24 = $_POST['descarga24'];
} else{
	$descarga24 = NULL;
}


if (isset($_POST['enlace25'])){
	$enlace25 = $_POST['enlace25'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace25);
} else{
	$enlace25 = NULL;
}

if (isset($_POST['descarga25'])){
	$descarga25 = $_POST['descarga25'];
} else{
	$descarga25 = NULL;
}


if (isset($_POST['enlace26'])){
	$enlace26 = $_POST['enlace26'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace26);
} else{
	$enlace26 = NULL;
}

if (isset($_POST['descarga26'])){
	$descarga26 = $_POST['descarga26'];
} else{
	$descarga26 = NULL;
}


if (isset($_POST['enlace27'])){
	$enlace27 = $_POST['enlace27'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace27);
} else{
	$enlace27 = NULL;
}

if (isset($_POST['descarga27'])){
	$descarga27 = $_POST['descarga27'];
} else{
	$descarga27 = NULL;
}


if (isset($_POST['enlace28'])){
	$enlace28 = $_POST['enlace28'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace28);
} else{
	$enlace28 = NULL;
}

if (isset($_POST['descarga28'])){
	$descarga28 = $_POST['descarga28'];
} else{
	$descarga28 = NULL;
}


if (isset($_POST['enlace29'])){
	$enlace29 = $_POST['enlace29'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace29);
} else{
	$enlace29 = NULL;
}

if (isset($_POST['descarga29'])){
	$descarga29 = $_POST['descarga29'];
} else{
	$descarga29 = NULL;
}


if (isset($_POST['enlace30'])){
	$enlace30 = $_POST['enlace30'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace30);
} else{
	$enlace30 = NULL;
}

if (isset($_POST['descarga30'])){
	$descarga30 = $_POST['descarga30'];
} else{
	$descarga30 = NULL;
}


if (isset($_POST['enlace31'])){
	$enlace31 = $_POST['enlace31'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace31);
} else{
	$enlace31 = NULL;
}

if (isset($_POST['descarga31'])){
	$descarga31 = $_POST['descarga31'];
} else{
	$descarga31 = NULL;
}


if (isset($_POST['enlace32'])){
	$enlace32 = $_POST['enlace32'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace32);
} else{
	$enlace32 = NULL;
}

if (isset($_POST['descarga32'])){
	$descarga32 = $_POST['descarga32'];
} else{
	$descarga32 = NULL;
}


if (isset($_POST['enlace33'])){
	$enlace33 = $_POST['enlace33'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace33);
} else{
	$enlace33 = NULL;
}

if (isset($_POST['descarga33'])){
	$descarga33 = $_POST['descarga33'];
} else{
	$descarga33 = NULL;
}


if (isset($_POST['enlace34'])){
	$enlace34 = $_POST['enlace34'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace34);
} else{
	$enlace34 = NULL;
}

if (isset($_POST['descarga34'])){
	$descarga34 = $_POST['descarga34'];
} else{
	$descarga34 = NULL;
}


if (isset($_POST['enlace35'])){
	$enlace35 = $_POST['enlace35'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace35);
} else{
	$enlace35 = NULL;
}

if (isset($_POST['descarga35'])){
	$descarga35 = $_POST['descarga35'];
} else{
	$descarga35 = NULL;
}


if (isset($_POST['enlace36'])){
	$enlace36 = $_POST['enlace36'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace36);
} else{
	$enlace36 = NULL;
}

if (isset($_POST['descarga36'])){
	$descarga36 = $_POST['descarga36'];
} else{
	$descarga36 = NULL;
}


if (isset($_POST['enlace37'])){
	$enlace37 = $_POST['enlace37'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace37);
} else{
	$enlace37 = NULL;
}

if (isset($_POST['descarga37'])){
	$descarga37 = $_POST['descarga37'];
} else{
	$descarga37 = NULL;
}


if (isset($_POST['enlace38'])){
	$enlace38 = $_POST['enlace38'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace38);
} else{
	$enlace38 = NULL;
}

if (isset($_POST['descarga38'])){
	$descarga38 = $_POST['descarga38'];
} else{
	$descarga38 = NULL;
}


if (isset($_POST['enlace39'])){
	$enlace39 = $_POST['enlace39'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace39);
} else{
	$enlace39 = NULL;
}

if (isset($_POST['descarga39'])){
	$descarga39 = $_POST['descarga39'];
} else{
	$descarga39 = NULL;
}


if (isset($_POST['enlace40'])){
	$enlace40 = $_POST['enlace40'];
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $enlace40);
} else{
	$enlace40 = NULL;
}

if (isset($_POST['descarga40'])){
	$descarga40 = $_POST['descarga40'];
} else{
	$descarga40 = NULL;
}

if (isset($_POST['sinopsis'])){
	$_POST['sinopsis'] = nl2br($_POST['sinopsis'],false);
}

if (isset($_POST['descripcion'])){	
	$_POST['descripcion'] = nl2br($_POST['descripcion'],false);
}

/**********************************************inseciones**********************************************/

function comprobar_cadena($cadena,$min,$max){ 
   //compruebo que el tamaño del string sea válido.
   $cadena = nl2br($cadena,false);
   if ((strlen($cadena)<$min) || (strlen($cadena)>$max)){  
      return false; 
   }   
   return true; 
}

if ($IDCategoria == 1){
	if ((strlen($_POST['titulo'])<5) || (strlen($_POST['titulo'])>70)){
			$error = true;
            header('Location: index.php?type=NuevoP&error=11');
        }else if (!comprobar_cadena($_POST['imagen'],10,1000)){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=12');
        }else if (!comprobar_cadena($_POST['sinopsis'],100,3000)) {
        	$error = true;
            header('Location: index.php?type=NuevoP&error=13');
        }
        else if ($_POST['enlace1'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=15');
        }
        else if ($_POST['descarga1'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=15');
        }
        else if ($_POST['enlace2'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=15');
        }
        else if ($_POST['descarga2'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=15');
        }
        else if ($_POST['enlace3'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=15');
        }
        else if ($_POST['descarga3'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoP&error=15');
        }
}

if ($IDCategoria == 2){
	if (!comprobar_cadena($_POST['titulo'],5,70)){
			$error = true;
            header('Location: index.php?type=NuevoS&error=11');
        }else if (!comprobar_cadena($_POST['imagen'],10,1000)){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=12');
        }else if (!comprobar_cadena($_POST['sinopsis'],100,3000)) {
        	$error = true;
            header('Location: index.php?type=NuevoS&error=13');
        }
        else if ($_POST['enlace1'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=15');
        }
        else if ($_POST['descarga1'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=15');
        }
        else if ($_POST['enlace2'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=15');
        }
        else if ($_POST['descarga2'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=15');
        }
        else if ($_POST['enlace3'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=15');
        }
        else if ($_POST['descarga3'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoS&error=15');
        }
}

if ($IDCategoria == 3){
	if (!comprobar_cadena($_POST['titulo'],5,70)){
			$error = true;
            header('Location: index.php?type=NuevoJ&error=20');
        }else if (!comprobar_cadena($_POST['imagen'],10,1000)){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=21');
        }else if (!comprobar_cadena($_POST['descripcion'],50,3000)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=22');
        }else if (!comprobar_cadena($_POST['min_so'],5,100)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=23');
        }else if (!comprobar_cadena($_POST['min_procesador'],5,100)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=24');
        }else if (!comprobar_cadena($_POST['min_memoria'],5,100)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=25');
        }else if (!comprobar_cadena($_POST['min_video'],5,100)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=26');
        }else if (!comprobar_cadena($_POST['min_espacio'],5,100)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=27');
        }else if (!comprobar_cadena($_POST['min_librerias'],5,100)) {
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=28');
        }else if ($_POST['enlace1'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=30');
        }else if ($_POST['descarga1'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=30');
        }else if ($_POST['enlace2'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=30');
        }else if ($_POST['descarga2'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=30');
        }else if ($_POST['enlace3'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=30');
        }else if ($_POST['descarga3'] == NULL){
        	$error = true;
            header('Location: index.php?type=NuevoJ&error=30');
        }

}

if ($error == false){

	foreach($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            } 

$insert = "INSERT INTO posts   (ID,IDCategoria,IDUsuario,Fecha,Titulo,
								url_imagen,Descripcion,Sinopsis,min_so,min_procesador,min_memoria,min_video,min_espacio,min_librerias,
								min_otros,rec_so,rec_procesador,rec_memoria,rec_video,rec_espacio,rec_librerias,rec_otros, Trailer,
								enlace1,urldescarga1,enlace2,urldescarga2,enlace3,urldescarga3,enlace4,urldescarga4,enlace5,urldescarga5,
								enlace6,urldescarga6,enlace7,urldescarga7,enlace8,urldescarga8,enlace9,urldescarga9,enlace10,urldescarga10,
								enlace11,urldescarga11,enlace12,urldescarga12,enlace13,urldescarga13,enlace14,urldescarga14,enlace15,urldescarga15,
								enlace16,urldescarga16,enlace17,urldescarga17,enlace18,urldescarga18,enlace19,urldescarga19,enlace20,urldescarga20,
								enlace21,urldescarga21,enlace22,urldescarga22,enlace23,urldescarga23,enlace24,urldescarga24,enlace25,urldescarga25,
								enlace26,urldescarga26,enlace27,urldescarga27,enlace28,urldescarga28,enlace29,urldescarga29,enlace30,urldescarga30,
								enlace31,urldescarga31,enlace32,urldescarga32,enlace33,urldescarga33,enlace34,urldescarga34,enlace35,urldescarga35,
								enlace36,urldescarga36,enlace37,urldescarga37,enlace38,urldescarga38,enlace39,urldescarga39,enlace40,urldescarga40) ";
$insert.= "VALUES (	'".$IDPost."','".$IDCategoria."','".$IDUsuario."',NOW(),'".$_POST['titulo']."','".$_POST['imagen']."',
					'".$_POST['descripcion']."','".$_POST['sinopsis']."','".$_POST['min_so']."','".$_POST['min_procesador']."','".$_POST['min_memoria']."',
					'".$_POST['min_video']."','".$_POST['min_espacio']."','".$_POST['min_librerias']."','".$_POST['min_otros']."','".$rec_so."',
					'".$rec_procesador."','".$rec_memoria."','".$rec_video."','".$rec_espacio."','".$rec_librerias."',
					'".$rec_otros."','".$_POST['trailer']."','".$_POST['enlace1']."','".$_POST['descarga1']."','".$_POST['enlace2']."',
					'".$_POST['descarga2']."','".$_POST['enlace3']."','".$_POST['descarga3']."','".$_POST['enlace4']."','".$_POST['descarga4']."',
					'".$_POST['enlace5']."','".$_POST['descarga5']."','".$enlace6."','".$descarga6."','".$enlace7."','".$descarga7."',
					'".$enlace8."','".$descarga8."','".$enlace9."','".$descarga9."','".$enlace10."','".$descarga10."',
					'".$enlace11."','".$descarga11."','".$enlace12."','".$descarga12."','".$enlace13."','".$descarga13."',
					'".$enlace14."','".$descarga14."','".$enlace15."','".$descarga15."','".$enlace16."','".$descarga16."',
					'".$enlace17."','".$descarga17."','".$enlace18."','".$descarga18."','".$enlace19."','".$descarga19."',
					'".$enlace20."','".$descarga20."','".$enlace21."','".$descarga21."','".$enlace22."','".$descarga22."',
					'".$enlace23."','".$descarga23."','".$enlace24."','".$descarga24."','".$enlace25."','".$descarga25."',
					'".$enlace26."','".$descarga26."','".$enlace27."','".$descarga27."','".$enlace28."','".$descarga28."',
					'".$enlace29."','".$descarga29."','".$enlace30."','".$descarga30."','".$enlace31."','".$descarga31."',
					'".$enlace32."','".$descarga32."','".$enlace33."','".$descarga33."','".$enlace34."','".$descarga34."',
					'".$enlace35."','".$descarga35."','".$enlace36."','".$descarga36."','".$enlace37."','".$descarga37."',
					'".$enlace38."','".$descarga38."','".$enlace39."','".$descarga39."','".$enlace40."','".$descarga40."') ";
$result = mysql_query($insert, $conn) or die(mysql_error());

$query = mysql_query("  UPDATE usuarios U
						SET U.ultima_accion = NOW()
						WHERE U.ID = $IDUsuario;", $conn);

mysql_close($conn);

$query_nombre = mysql_query("	SELECT Nombre,Mail
						FROM usuarios
						WHERE ID = $IDUsuario", $conn);
$consulta = mysql_fetch_assoc($query_nombre);
$nombre = $consulta['Nombre'];
$correo = $consulta['Mail'];

require("PHPMailer/class.phpmailer.php");
require("PHPMailer/class.smtp.php");
   
//Especificamos los datos y configuración del servidor
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
   
//Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
$mail->Username = "broms.web@gmail.com";
$mail->Password = "bender36217598";
   
//Agregamos la información que el correo requiere
$mail->From = "broms.web@gmail.com";
$mail->FromName = "Augusto, Creador de Brom's";
$mail->Subject = "Aviso de posteo realizado.";
$mail->AltBody = "";
$mail->MsgHTML("
Tu post con el titulo: ".$titulo.". Ha ingresado a nuestra base de datos correctamente y a ingresado al estado de validacion.
Si cumple con los pocos requisitos que se piden sera validado sin ningun problema.<br>  
<br>
Muchas gracias por compartir contenido en Brom's!<br>
<br> 
Suerte y continua realizando estos aportes!.<br>
<br>
Augusto, Username (Blackjak)");
$mail->AddAddress($correo, $nombre);
$mail->IsHTML(true);
	
$mail->Send();

header('Location: index.php');
}
}
}
?>