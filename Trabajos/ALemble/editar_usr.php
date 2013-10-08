<?php

include('conn.php');
session_start();
$usuario = $_SESSION['username'];
$IDUsuario =$_SESSION['iduser'];
$sql_idusuario = mysql_query("	SELECT *
					FROM  `usuarios` 
					WHERE (Username =  '".$usuario."') AND (ID =  '".$IDUsuario."') ", $conn);
if (mysql_num_rows($sql_idusuario) != 1){ mysql_close($conn);header('Location: index.php');}else{

/*****************************************verificaciones*************************************************/

if (isset($_POST['titulo'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['titulo']);
	$titulo = $_POST['titulo'];
}if (isset($_POST['imagen'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['imagen']);
	$imagen = $_POST['imagen'];
}else{
	$imagen = NULL;
}

if (isset($_POST['enlace1'])){
	$enlace1 = $_POST['enlace1'];
}else{
	$enlace1 = NULL;
}

if (isset($_POST['descarga1'])){
	$descarga1 = $_POST['descarga1'];
} else{
	$descarga1 = NULL;
}
if (isset($_POST['enlace2'])){
	$enlace2 = $_POST['enlace2'];
}else{
	$enlace2 = NULL;
}

if (isset($_POST['descarga2'])){
	$descarga2 = $_POST['descarga2'];
} else{
	$descarga2 = NULL;
}


if (isset($_POST['enlace3'])){
	$enlace3 = $_POST['enlace3'];
} else{
	$enlace3 = NULL;
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
	$descarga17 = $_POST['descarga17'];
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
if (isset($_POST['trailer'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['trailer']);
	$trailer = $_POST['trailer'];
}else{
	$trailer = NULL;
}

$IDCategoria = $_POST['categoria'];
$IDPost = $_POST['idpost'];

if (($IDCategoria == 1) OR ($IDCategoria == 2)){

if (isset($_POST['sinopsis'])){
	$sinopsis = nl2br($_POST['sinopsis'],false);  
}else{
	$sinopsis = NULL;
}

if (isset($_POST['descripcion'])){
	$descripcion = nl2br($_POST['descripcion'],false); 
}else{
	$descripcion = NULL;
}


/**********************************************inseciones**********************************************/

$update = "UPDATE posts p SET Titulo='$titulo', url_imagen='$imagen',
Sinopsis='$sinopsis',Trailer= '$trailer',valido= 0,
enlace1= '$_POST[enlace1]',urldescarga1= '$_POST[descarga1]',
enlace2= '$_POST[enlace2]',urldescarga2= '$_POST[descarga2]',
enlace3= '$_POST[enlace3]',urldescarga3= '$_POST[descarga3]',
enlace4= '$_POST[enlace4]',urldescarga4= '$_POST[descarga4]',
enlace5= '$_POST[enlace5]',urldescarga5= '$_POST[descarga5]',
enlace6= '$_POST[enlace6]',urldescarga6= '$_POST[descarga6]',
enlace7= '$_POST[enlace7]',urldescarga7= '$_POST[descarga7]',
enlace8= '$_POST[enlace8]',urldescarga8= '$_POST[descarga8]',
enlace9= '$_POST[enlace9]',urldescarga9= '$_POST[descarga9]',
enlace10= '$_POST[enlace10]',urldescarga10= '$_POST[descarga10]',
enlace11= '$_POST[enlace11]',urldescarga11= '$_POST[descarga11]',
enlace12= '$_POST[enlace12]',urldescarga12= '$_POST[descarga12]',
enlace13= '$_POST[enlace13]',urldescarga13= '$_POST[descarga13]',
enlace14= '$_POST[enlace14]',urldescarga14= '$_POST[descarga14]',
enlace15= '$_POST[enlace15]',urldescarga15= '$_POST[descarga15]',
enlace16= '$_POST[enlace16]',urldescarga16= '$_POST[descarga16]',
enlace17= '$_POST[enlace17]',urldescarga17= '$_POST[descarga17]',
enlace18= '$_POST[enlace18]',urldescarga18= '$_POST[descarga18]',
enlace19= '$_POST[enlace19]',urldescarga19= '$_POST[descarga19]',
enlace20= '$_POST[enlace20]',urldescarga20= '$_POST[descarga20]',
enlace21= '$_POST[enlace21]',urldescarga21= '$_POST[descarga21]',
enlace22= '$_POST[enlace22]',urldescarga22= '$_POST[descarga22]',
enlace23= '$_POST[enlace23]',urldescarga23= '$_POST[descarga23]',
enlace24= '$_POST[enlace24]',urldescarga24= '$_POST[descarga24]',
enlace25= '$_POST[enlace25]',urldescarga25= '$_POST[descarga25]',
enlace26= '$_POST[enlace26]',urldescarga26= '$_POST[descarga26]',
enlace27= '$_POST[enlace27]',urldescarga27= '$_POST[descarga27]',
enlace28= '$_POST[enlace28]',urldescarga28= '$_POST[descarga28]',
enlace29= '$_POST[enlace29]',urldescarga29= '$_POST[descarga29]',
enlace30= '$_POST[enlace30]',urldescarga30= '$_POST[descarga30]',
enlace31= '$_POST[enlace31]',urldescarga31= '$_POST[descarga31]',
enlace32= '$_POST[enlace32]',urldescarga32= '$_POST[descarga32]',
enlace33= '$_POST[enlace33]',urldescarga33= '$_POST[descarga33]',
enlace34= '$_POST[enlace34]',urldescarga34= '$_POST[descarga34]',
enlace35= '$_POST[enlace35]',urldescarga35= '$_POST[descarga35]',
enlace36= '$_POST[enlace36]',urldescarga36= '$_POST[descarga36]',
enlace37= '$_POST[enlace37]',urldescarga37= '$_POST[descarga37]',
enlace38= '$_POST[enlace38]',urldescarga38= '$_POST[descarga39]',
enlace39= '$_POST[enlace39]',urldescarga39= '$_POST[descarga39]',
enlace40= '$_POST[enlace40]',urldescarga40= '$_POST[descarga40]'
WHERE p.ID = '$IDPost' ";
$result = mysql_query($update, $conn) or die(mysql_error());

mysql_close($conn);

header('Location: index.php');

}else{

if (isset($_POST['descripcion'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['descripcion']);
	$descripcion = $_POST['descripcion'];
}else{
	$descripcion = NULL;
}if (isset($_POST['min_so'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_so']);
	$min_so = $_POST['min_so'];
}else{
	$min_so = NULL;
}if (isset($_POST['min_procesador'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_procesador']);
	$min_procesador = $_POST['min_procesador'];
}else{
	$min_procesador = NULL;
}if (isset($_POST['min_memoria'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_memoria']);
	$min_memoria = $_POST['min_memoria'];
}else{
	$min_memoria = NULL;
}if (isset($_POST['min_video'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_video']);
	$min_video = $_POST['min_video'];
}else{
	$min_video = NULL;
}if (isset($_POST['min_espacio'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_espacio']);
	$min_espacio = $_POST['min_espacio'];
}else{
	$min_espacio = NULL;
}if (isset($_POST['min_librerias'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_librerias']);
	$min_librerias = $_POST['min_librerias'];
}else{
	$min_librerias = NULL;
}if (isset($_POST['min_otros'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['min_otros']);
	$min_otros = $_POST['min_otros'];
}else{
	$min_otros = NULL;
}if (isset($_POST['rec_so'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_so']);
	$rec_so = $_POST['rec_so'];
}else{
	$rec_so = NULL;
}if (isset($_POST['rec_procesador'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_procesador']);
	$rec_procesador = $_POST['rec_procesador'];
}else{
	$rec_procesador = NULL;
}if (isset($_POST['rec_memoria'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_memoria']);
	$rec_memoria = $_POST['rec_memoria'];
}else{
	$rec_memoria = NULL;
}if (isset($_POST['rec_video'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_video']);
	$rec_video = $_POST['rec_video'];
}else{
	$rec_video = NULL;
}if (isset($_POST['rec_espacio'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_espacio']);
	$rec_espacio = $_POST['rec_espacio'];
}else{
	$rec_espacio = NULL;
}if (isset($_POST['rec_librerias'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_librerias']);
	$rec_librerias = $_POST['rec_librerias'];
}else{
	$rec_librerias = NULL;
}if (isset($_POST['rec_otros'])){
	preg_replace("[^A-Za-zñÑáéíóúÁÉÍÓÚ@.:,;?¿!¡/*&%$#|\'']", "", $_POST['rec_otros']);
	$rec_otros = $_POST['rec_otros'];
}else{
	$rec_otros = NULL;
}

/**********************************************inseciones**********************************************/

foreach($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            } 

$update = "UPDATE posts p SET Titulo='$titulo', url_imagen='$imagen', Descripcion='$descripcion',
min_so='$min_so', min_procesador='$min_procesador', min_memoria='$min_memoria', 
min_video='$min_video', min_espacio=' $min_espacio', 
min_librerias= '$min_librerias', min_otros= '$min_otros',
rec_so= '$rec_so',
rec_procesador= '$rec_procesador',
rec_memoria= '$rec_memoria',
rec_video= '$rec_video',
rec_espacio= '$rec_espacio',
rec_librerias= '$rec_librerias',
rec_otros= '$rec_otros',
Trailer= '$trailer',
valido= 0,
enlace1= '$_POST[enlace1]',urldescarga1= '$_POST[descarga1]',
enlace2= '$_POST[enlace2]',urldescarga2= '$_POST[descarga2]',
enlace3= '$_POST[enlace3]',urldescarga3= '$_POST[descarga3]',
enlace4= '$_POST[enlace4]',urldescarga4= '$_POST[descarga4]',
enlace5= '$_POST[enlace5]',urldescarga5= '$_POST[descarga5]',
enlace6= '$_POST[enlace6]',urldescarga6= '$_POST[descarga6]',
enlace7= '$_POST[enlace7]',urldescarga7= '$_POST[descarga7]',
enlace8= '$_POST[enlace8]',urldescarga8= '$_POST[descarga8]',
enlace9= '$_POST[enlace9]',urldescarga9= '$_POST[descarga9]',
enlace10= '$_POST[enlace10]',urldescarga10= '$_POST[descarga10]',
enlace11= '$_POST[enlace11]',urldescarga11= '$_POST[descarga11]',
enlace12= '$_POST[enlace12]',urldescarga12= '$_POST[descarga12]',
enlace13= '$_POST[enlace13]',urldescarga13= '$_POST[descarga13]',
enlace14= '$_POST[enlace14]',urldescarga14= '$_POST[descarga14]',
enlace15= '$_POST[enlace15]',urldescarga15= '$_POST[descarga15]',
enlace16= '$_POST[enlace16]',urldescarga16= '$_POST[descarga16]',
enlace17= '$_POST[enlace17]',urldescarga17= '$_POST[descarga17]',
enlace18= '$_POST[enlace18]',urldescarga18= '$_POST[descarga19]',
enlace19= '$_POST[enlace19]',urldescarga19= '$_POST[descarga19]',
enlace20= '$_POST[enlace20]',urldescarga20= '$_POST[descarga20]',
enlace21= '$_POST[enlace21]',urldescarga21= '$_POST[descarga21]',
enlace22= '$_POST[enlace22]',urldescarga22= '$_POST[descarga22]',
enlace23= '$_POST[enlace23]',urldescarga23= '$_POST[descarga23]',
enlace24= '$_POST[enlace24]',urldescarga24= '$_POST[descarga24]',
enlace25= '$_POST[enlace25]',urldescarga25= '$_POST[descarga25]',
enlace26= '$_POST[enlace26]',urldescarga26= '$_POST[descarga26]',
enlace27= '$_POST[enlace27]',urldescarga27= '$_POST[descarga27]',
enlace28= '$_POST[enlace28]',urldescarga28= '$_POST[descarga28]',
enlace29= '$_POST[enlace29]',urldescarga29= '$_POST[descarga29]',
enlace30= '$_POST[enlace30]',urldescarga10= '$_POST[descarga30]',
enlace31= '$_POST[enlace31]',urldescarga31= '$_POST[descarga31]',
enlace32= '$_POST[enlace32]',urldescarga32= '$_POST[descarga32]',
enlace33= '$_POST[enlace33]',urldescarga33= '$_POST[descarga33]',
enlace34= '$_POST[enlace34]',urldescarga34= '$_POST[descarga34]',
enlace35= '$_POST[enlace35]',urldescarga35= '$_POST[descarga35]',
enlace36= '$_POST[enlace36]',urldescarga36= '$_POST[descarga36]',
enlace37= '$_POST[enlace37]',urldescarga37= '$_POST[descarga37]',
enlace38= '$_POST[enlace38]',urldescarga38= '$_POST[descarga39]',
enlace39= '$_POST[enlace39]',urldescarga39= '$_POST[descarga39]',
enlace10= '$_POST[enlace10]',urldescarga10= '$_POST[descarga10]',
enlace40= '$_POST[enlace40]',urldescarga40= '$_POST[descarga40]'
WHERE p.ID = '$IDPost' ";
$result = mysql_query($update, $conn) or die(mysql_error());

$date = date('Y-m-d H:i:s');
$iduser = $_SESSION['iduser'];
$query = mysql_query("  UPDATE usuarios U
						SET U.ultima_accion = NOW()
						WHERE U.ID = $iduser;", $conn);

mysql_close($conn);

header('Location: index.php');

}
}

?>