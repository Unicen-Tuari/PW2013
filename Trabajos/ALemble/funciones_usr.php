<?php
include('conn.php');
session_start();
$usuario = $_SESSION['username'];
$IDUsuario =$_SESSION['iduser'];
$sql_idusuario = mysql_query("	SELECT *
					FROM  `usuarios` 
					WHERE (Username =  '".$usuario."') AND (ID =  '".$IDUsuario."') ", $conn);
if (mysql_num_rows($sql_idusuario) != 1){ mysql_close($conn);header('Location: index.php');}else{
/**************************** FUNCIONES CONSULTAS PUBLICAS **********************************/

function consulta_principal($pagina){

/* Consulta realizada al ingresar a la pagina, muestra los 10 primeros post por fecha*/

include('conn.php');

$limite = 10*$pagina;
$limite ++;
$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE p.valido = 1
		ORDER BY fecha DESC
		LIMIT $limite";
$query = mysql_query($sql, $conn) or die(mysql_error());
if(!$query)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
$limite --;
$punt = 1;
while($punt <= ($limite-10)){
$punt ++;
$consulta = mysql_fetch_assoc($query);
}

$siguiente = 0; 
while(($consulta = mysql_fetch_assoc($query)) AND ($siguiente < 10)) {
$siguiente ++;
$fecha = explode("-", $consulta['Fecha']);
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
if ($consulta['valido'] == 1){
if (($consulta['valido'] == 1) AND (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2))){
$consulta['sinopsis'] = nl2br($consulta['sinopsis'], false);
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[sinopsis]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");} else {
	$consulta['descripcion'] = nl2br($consulta['descripcion'], false);
	print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descripcion</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[descripcion]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");}
}
} 
if (($siguiente == 10) OR ($pagina > 1)){echo"<center><table>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=1'><button class='siguiente'><<<</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."'><button class='siguiente'><</button></a></tr>";}
	if ($pagina > 6) {echo"<tr><a href='index.php?pagina=".($pagina-6)."'><button class='siguiente'>".($pagina-6)."</button></a></tr>";}
	if ($pagina > 5) {echo"<tr><a href='index.php?pagina=".($pagina-5)."'><button class='siguiente'>".($pagina-5)."</button></a></tr>";}
	if ($pagina > 4) {echo"<tr><a href='index.php?pagina=".($pagina-4)."'><button class='siguiente'>".($pagina-4)."</button></a></tr>";}
	if ($pagina > 3) {echo"<tr><a href='index.php?pagina=".($pagina-3)."'><button class='siguiente'>".($pagina-3)."</button></a></tr>";}
	if ($pagina > 2) {echo"<tr><a href='index.php?pagina=".($pagina-2)."'><button class='siguiente'>".($pagina-2)."</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."'><button class='siguiente'>".($pagina-1)."</button></a></tr>";}
	if (($siguiente == 10) OR ($pagina > 1)){echo "<tr><button class='siguiente'>".$pagina."</button></tr>";
	if ($limite < mysql_num_rows($query)){echo "<tr><a href='index.php?pagina=".($pagina+1)."'><button class='siguiente'>".($pagina+1)."</button></a></tr>";
	if (20 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+2)."'><button class='siguiente'>".($pagina+2)."</button></a></tr>";}
	if (30 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+3)."'><button class='siguiente'>".($pagina+3)."</button></a></tr>";}
	if (40 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+4)."'><button class='siguiente'>".($pagina+4)."</button></a></tr>";}
	if (50 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+5)."'><button class='siguiente'>".($pagina+5)."</button></a></tr>";}
	if (60 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+6)."'><button class='siguiente'>".($pagina+6)."</button></a></tr>";}
	echo "<tr><a href='index.php?pagina=".($pagina+1)."'><button class='siguiente'>></button></a></tr>";
	echo "<tr><a href='index.php?pagina=".ceil(mysql_num_rows($query)/10)."'><button class='siguiente'>>>></button></a></tr>";}
if (($siguiente == 10) OR ($pagina > 1)){echo"</table></center>";}
}

mysql_close($conn);

}

function consulta_categoria($pagina,$categoria){

/* Consulta los 10 primeros post ordenados por fecha de determinada categoria*/

include('conn.php');

$limite = 10*$pagina;
$limite ++;
$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE p.IDCategoria = '$categoria' AND p.valido = 1
		ORDER BY Fecha DESC
		LIMIT $limite";
$query_categoria = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_categoria)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
$limite --;
if ($limite > 10){
$punt = 0;
while($punt < ($limite-10)){
$punt ++;
$consulta = mysql_fetch_assoc($query_categoria);
}
}

$siguiente = 0; 
while(($consulta = mysql_fetch_assoc($query_categoria)) AND ($siguiente < 10)){
$siguiente ++;
$fecha = explode("-", $consulta['Fecha']);
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
if ($consulta['valido'] == 1){
if (($categoria == 1) || ($categoria == 2)) {
$consulta['sinopsis'] = nl2br($consulta['sinopsis'], false);
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[sinopsis]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");} else {
	$consulta['descripcion'] = nl2br($consulta['descripcion'], false);
	print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descripcion</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[descripcion]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");}}}

if (($siguiente == 10) OR ($pagina > 1)){echo"<center><table>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=1'&type=C&categoria=$categoria><button class='siguiente'><<<</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&type=C&categoria=$categoria'><button class='siguiente'><</button></a></tr>";}
	if ($pagina > 6) {echo"<tr><a href='index.php?pagina=".($pagina-6)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina-6)."</button></a></tr>";}
	if ($pagina > 5) {echo"<tr><a href='index.php?pagina=".($pagina-5)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina-5)."</button></a></tr>";}
	if ($pagina > 4) {echo"<tr><a href='index.php?pagina=".($pagina-4)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina-4)."</button></a></tr>";}
	if ($pagina > 3) {echo"<tr><a href='index.php?pagina=".($pagina-3)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina-3)."</button></a></tr>";}
	if ($pagina > 2) {echo"<tr><a href='index.php?pagina=".($pagina-2)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina-2)."</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina-1)."</button></a></tr>";}
	if (($siguiente == 10) OR ($pagina > 1)){echo "<tr><button class='siguiente'>".$pagina."</button></tr>";
	if ($limite < mysql_num_rows($query_categoria)){echo "<tr><a href='index.php?pagina=".($pagina+1)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina+1)."</button></a></tr>";
	if (20 < mysql_num_rows($query_categoria)) {echo "<tr><a href='index.php?pagina=".($pagina+2)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina+2)."</button></a></tr>";}
	if (30 < mysql_num_rows($query_categoria)) {echo "<tr><a href='index.php?pagina=".($pagina+3)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina+3)."</button></a></tr>";}
	if (40 < mysql_num_rows($query_categoria)) {echo "<tr><a href='index.php?pagina=".($pagina+4)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina+4)."</button></a></tr>";}
	if (50 < mysql_num_rows($query_categoria)) {echo "<tr><a href='index.php?pagina=".($pagina+5)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina+5)."</button></a></tr>";}
	if (60 < mysql_num_rows($query_categoria)) {echo "<tr><a href='index.php?pagina=".($pagina+6)."&type=C&categoria=$categoria'><button class='siguiente'>".($pagina+6)."</button></a></tr>";}
	echo "<tr><a href='index.php?pagina=".($pagina+1)."&type=C&categoria=$categoria'><button class='siguiente'>></button></a></tr>";
	echo "<tr><a href='index.php?pagina=".ceil(mysql_num_rows($query_categoria)/10)."&type=C&categoria=$categoria'><button class='siguiente'>>>></button></a></tr>";}
if (($siguiente == 10) OR ($pagina > 1)){echo"</table></center>";}
}
mysql_close($conn);

}

function consulta_busqueda($pagina,$busqueda){

/* Devuelve la consulta por una determinada busuqeda, la busqueda se realiza en el titulo*/

include('conn.php');

$limite = 10*$pagina;
$limite ++;
$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE p.titulo like '%$busqueda%' AND p.valido = 1
		ORDER BY Fecha DESC
		LIMIT $limite";
$query_busqueda = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_busqueda)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
$limite --;
if ($limite > 10){
$punt = 1;
while($punt <= ($limite-10)){
$punt ++;
$consulta = mysql_fetch_assoc($query_busqueda);
}
}

$siguiente = 0; 
while(($consulta = mysql_fetch_assoc($query_busqueda)) AND ($siguiente < 10)){
$siguiente ++;
$fecha = explode("-", $consulta['Fecha']);
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
if ($consulta['valido'] == 1){
if (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2)){
$consulta['sinopsis'] = nl2br($consulta['sinopsis'], false);
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[sinopsis]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");} else {
	$consulta['descripcion'] = nl2br($consulta['descripcion'], false);
	print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descripcion</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[descripcion]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");}}}
if (($siguiente == 10) OR ($pagina > 1)){echo"</table></center>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=1&busqueda=$busqueda&type=B'><button class='siguiente'><<<</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&busqueda=$busqueda&type=B'><button class='siguiente'><</button></a></tr>";}
	if ($pagina > 6) {echo"<tr><a href='index.php?pagina=".($pagina-6)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina-6)."</button></a></tr>";}
	if ($pagina > 5) {echo"<tr><a href='index.php?pagina=".($pagina-5)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina-5)."</button></a></tr>";}
	if ($pagina > 4) {echo"<tr><a href='index.php?pagina=".($pagina-4)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina-4)."</button></a></tr>";}
	if ($pagina > 3) {echo"<tr><a href='index.php?pagina=".($pagina-3)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina-3)."</button></a></tr>";}
	if ($pagina > 2) {echo"<tr><a href='index.php?pagina=".($pagina-2)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina-2)."</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina-1)."</button></a></tr>";}
	if (($siguiente == 10) OR ($pagina > 1)){echo "<tr><button class='siguiente'>".$pagina."</button></tr>";
	if ($limite < mysql_num_rows($query_busqueda)){echo "<tr><a href='index.php?pagina=".($pagina+1)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina+1)."</button></a></tr>";
	if (20 < mysql_num_rows($query_busqueda)) {echo "<tr><a href='index.php?pagina=".($pagina+2)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina+2)."</button></a></tr>";}
	if (30 < mysql_num_rows($query_busqueda)) {echo "<tr><a href='index.php?pagina=".($pagina+3)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina+3)."</button></a></tr>";}
	if (40 < mysql_num_rows($query_busqueda)) {echo "<tr><a href='index.php?pagina=".($pagina+4)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina+4)."</button></a></tr>";}
	if (50 < mysql_num_rows($query_busqueda)) {echo "<tr><a href='index.php?pagina=".($pagina+5)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina+5)."</button></a></tr>";}
	if (60 < mysql_num_rows($query_busqueda)) {echo "<tr><a href='index.php?pagina=".($pagina+6)."&busqueda=$busqueda&type=B'><button class='siguiente'>".($pagina+6)."</button></a></tr>";}
	echo "<tr><a href='index.php?pagina=".($pagina+1)."&busqueda=$busqueda&type=B'><button class='siguiente'>></button></a></tr>";
	echo "<tr><a href='index.php?pagina=".ceil(mysql_num_rows($query_busqueda)/10)."'><button class='siguiente'>>>></button></a></tr>";}
if (($siguiente == 10) OR ($pagina > 1)){echo"</table></center>";}
}

mysql_close($conn);

}

function consulta_mes($pagina,$mes,$anio){

/*Muestra los post de un determinado mes*/

include('conn.php');

$limite = 10*$pagina;
$limite ++;
$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE ((month(p.fecha) = '$mes') AND (year(p.fecha) = '$anio') AND (p.valido = 1))
		ORDER BY Fecha DESC
		LIMIT $limite";
$query_mes = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_mes)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
$limite --;
if ($limite > 10){
$punt = 1;
while($punt <= ($limite-10)){
$punt ++;
$consulta = mysql_fetch_assoc($query_mes);
}
}

$siguiente = 0; 
while(($consulta = mysql_fetch_assoc($query_mes)) and ($siguiente < 10)){
$siguiente ++;
$fecha = explode("-", $consulta['Fecha']);
$nom_mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
if ($consulta['valido'] == 1){
if (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2)){
$consulta['sinopsis'] = nl2br($consulta['sinopsis'], false);
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[sinopsis]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");} else {
	$consulta['descripcion'] = nl2br($consulta['descripcion'], false);
	print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descripcion</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[descripcion]
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");}}}

if (($siguiente == 10) OR ($pagina > 1)){echo"<center><table>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=1&type=F&mes=$mes&anio=$anio'><button class='siguiente'><<<</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'><</button></a></tr>";}
	if ($pagina > 6) {echo"<tr><a href='index.php?pagina=".($pagina-6)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina-6)."</button></a></tr>";}
	if ($pagina > 5) {echo"<tr><a href='index.php?pagina=".($pagina-5)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina-5)."</button></a></tr>";}
	if ($pagina > 4) {echo"<tr><a href='index.php?pagina=".($pagina-4)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina-4)."</button></a></tr>";}
	if ($pagina > 3) {echo"<tr><a href='index.php?pagina=".($pagina-3)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina-3)."</button></a></tr>";}
	if ($pagina > 2) {echo"<tr><a href='index.php?pagina=".($pagina-2)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina-2)."</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina-1)."</button></a></tr>";}
	if (($siguiente == 10) OR ($pagina > 1)){echo "<tr><button class='siguiente'>".$pagina."</button></tr>";
	if ($limite < mysql_num_rows($query_mes)){echo "<tr><a href='index.php?pagina=".($pagina+1)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina+1)."</button></a></tr>";
	if (20 < mysql_num_rows($query_mes)) {echo "<tr><a href='index.php?pagina=".($pagina+2)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina+2)."</button></a></tr>";}
	if (30 < mysql_num_rows($query_mes)) {echo "<tr><a href='index.php?pagina=".($pagina+3)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina+3)."</button></a></tr>";}
	if (40 < mysql_num_rows($query_mes)) {echo "<tr><a href='index.php?pagina=".($pagina+4)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina+4)."</button></a></tr>";}
	if (50 < mysql_num_rows($query_mes)) {echo "<tr><a href='index.php?pagina=".($pagina+5)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina+5)."</button></a></tr>";}
	if (60 < mysql_num_rows($query_mes)) {echo "<tr><a href='index.php?pagina=".($pagina+6)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>".($pagina+6)."</button></a></tr>";}
	echo "<tr><a href='index.php?pagina=".($pagina+1)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>></button></a></tr>";
	echo "<tr><a href='index.php?pagina=".ceil(mysql_num_rows($query_mes)/10)."&type=F&mes=$mes&anio=$anio''><button class='siguiente'>>>></button></a></tr>";}
if (($siguiente == 10) OR ($pagina > 1)){echo"</table></center>";}
}

mysql_close($conn);

}

function consulta_comentarios($IDPost,$pagina){

include('conn.php');

$limite = 20*$pagina;
$limite ++;
$sql = "SELECT c.ID, c.IDPost, c.IDUsuario, c.texto, c.fecha, u.Username
		FROM comentarios c
		JOIN usuarios u ON ( u.ID = c.IDUsuario ) 
		WHERE c.IDPost = $IDPost
		ORDER BY Fecha DESC
		LIMIT $limite";
$query_comen = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_comen)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
$limite --;
$siguiente = 0;
print ("<br><div class='legend-comentarios'>Comentarios</div>");  
while(($consulta = mysql_fetch_assoc($query_comen)) AND ($siguiente < $limite)){
$siguiente ++;
$fecha = explode(" ", $consulta['fecha']);
$hora = $fecha[1];
$fecha = explode("-", $fecha[0]);
$nom_mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
print ("
	<div class='datbox-comentarios'>
		<div class='descrip'><!--Description of the post-->
			$consulta[Username] el $dia de $nom_mes del $fecha[0] a las $hora comento: <br>
			$consulta[texto]
		</div>
	</div>");}
if (($siguiente == 20) and ($limite < mysql_num_rows($query_comen))) 
	{
	$pagina ++;
	print ("<a href='index.php?type=P&idpost=$consulta[IDPost]&paginacomen=$pagina'><button class='siguiente'>Mas comentarios</button></a>
	");}

print("
<form class='nuevo-post' name='nuevocomen' id='nuevocomen' method='POST' align='center' action='comentar.php'>
	<input type='hidden' name='idpost' id='idpost' value='$IDPost'/>
	<div class='datbox-post' ><textarea class='texto' name='comentario' id='comentario' font-size:11px; placeholder='Añade un comentario..'></textarea><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 31)) { echo "Debe ingresar un texto entre 5 y 250 carteres.";} if ((isset($_GET['error'])) AND ($_GET['error'] == 32)) { echo "Ya realizo una accion hace menos de 5 min.";} print("
	</div><button type='submit' id='boton-comentar'  class='go-post'>Comentar</button></form>");

}

function reglas(){

/* Muestra las reglas y fucionamiento del sistio*/

print ("
	<div class='post'>
		<div class='datbox-prot-tiulo'>
				<div class='prot-titulo'>Reglas y funcionamiento del sitio</div>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Privilegios</div>
			<div class='descrip'><ul>
			<li>Visitante:<br>
			Solo puede ver los posts, no se le restringe el acceso a las descargas.</li>
			<br><li>Usuario Registrado:<br>
			Puede ver los posts y comentarlos, tambien puede postear nuevo contenido.Hay un plazo de 5 minuntos como mino entre cada accion (comentar, subir un post o editar un post propio).</li>
			<br><li>Administrador:<br>
			Es el encargado de validar los post subidos por los usuarios, puede eliminar posts,
			 comentarios y banear usuarios.</li>
			</ul></div>
		</div>
		<div class='datbox'>
			<div class='legend-funcionamiento'>Funcionamiento</div>
			Un post puede estar validado o no, los post validados se muestran públicamente. Cuando un usuario crea o edita un post este pasa a estar no validado, 
			si cumple con las pocos requisitos que se pide posteriormente es validado por un administrador. Con esto se evitara las trolleadas y el crap, subiendo solo contenido de calidad.
			<div class='descrip'>
			</div>
		</div>
		<div class='datbox'>
			<div class='legend-post'>Reglas</div>
			<div class='descrip'>
			Requirimientos minimos al subir una pelicula o serie:
			<ul>
			<li>Titulo.(Minimo 5 caracteres,maximo 70).</li>
			<li>Imagen.(Enlace URL).</li>
			<li>Sinopsis.(Minimo 100 caracteres, maximo 3000).</li>
			<li>Tres enlaces a descarga.(Se recomienda subir para descarga directa, torrent y subtitulos).</li>
			<li>Se recomienda poner un trailer o video de youtube.(No excluyente).</li>
			</ul>
			Requirimientos minimos al subir una juego:
			<ul>
			<li>Titulo.(Minimo 5 caracteres, maximo 70).</li>
			<li>Imagen.(Enlace URL).</li>
			<li>Descripcion.(Minimo 100 caracteres, maximo 3000).</li>
			<li>Tres enlaces a descarga.(Se recomienda subir para descarga directa, torrent y subtitulos).</li>
			<li>Se recomienda poner un trailer o video de youtube.(No excluyente).</li>
			<li>Requirimientos minimos completos.(Opcion requirimientos minimos otros no obligatoria).</li>
			</ul>
			Causas de baneo:
			<ul>
			<li>Realizar muchos comentarios con contenido agresivo/no amistoso.</li>
			<li>Subir repetidamente el mismo post o solo crap.</li>
			<li>Subir o editar un post con crap puro.</li>
			</ul>
			En caso de que un usuario sea baneado sus post pasa a pertenecer al usuario public.
			</div>
		</div>
	</div>
");
}

function consulta_propios($pagina){

/* Consulta realizada al ingresar a la pagina, muestra los 10 primeros post por fecha*/

if (isset($_SESSION['iduser'])){
$iduser = $_SESSION['iduser'];
include('conn.php');
$limite = 10*$pagina;
$limite ++;
$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE ((p.valido = 1) AND (p.IDUsuario = $iduser))
		ORDER BY fecha DESC
		LIMIT $limite";
$query = mysql_query($sql, $conn) or die(mysql_error());
if(!$query)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
$limite --;
$punt = 1;
while($punt <= ($limite-10)){
$punt ++;
$consulta = mysql_fetch_assoc($query);
}

$siguiente = 0; 
while(($consulta = mysql_fetch_assoc($query)) AND ($siguiente < 10)) {
$siguiente ++;
$fecha = explode("-", $consulta['Fecha']);
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
if ($consulta['valido'] == 1){
if (($consulta['valido'] == 1) AND (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2))){
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");} else {
	print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
			<a href='index.php?idpost=$consulta[ID]&type=P'><button class='go-post'>Ir al post</button></a>
		</div>
	</div>
");}
}
} 
if (($siguiente == 10) OR ($pagina > 1)){echo"<center><table>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=1&type=Propios'><button class='siguiente'><<<</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&type=Propios'><button class='siguiente'><</button></a></tr>";}
	if ($pagina > 6) {echo"<tr><a href='index.php?pagina=".($pagina-6)."&type=Propios'><button class='siguiente'>".($pagina-6)."</button></a></tr>";}
	if ($pagina > 5) {echo"<tr><a href='index.php?pagina=".($pagina-5)."&type=Propios'><button class='siguiente'>".($pagina-5)."</button></a></tr>";}
	if ($pagina > 4) {echo"<tr><a href='index.php?pagina=".($pagina-4)."&type=Propios'><button class='siguiente'>".($pagina-4)."</button></a></tr>";}
	if ($pagina > 3) {echo"<tr><a href='index.php?pagina=".($pagina-3)."&type=Propios'><button class='siguiente'>".($pagina-3)."</button></a></tr>";}
	if ($pagina > 2) {echo"<tr><a href='index.php?pagina=".($pagina-2)."&type=Propios'><button class='siguiente'>".($pagina-2)."</button></a></tr>";}
	if ($pagina > 1) {echo"<tr><a href='index.php?pagina=".($pagina-1)."&type=Propios'><button class='siguiente'>".($pagina-1)."</button></a></tr>";}
	if (($siguiente == 10) OR ($pagina > 1)){echo "<tr><button class='siguiente'>".$pagina."</button></tr>";
	if ($limite < mysql_num_rows($query)){echo "<tr><a href='index.php?pagina=".($pagina+1)."&type=Propios'><button class='siguiente'>".($pagina+1)."</button></a></tr>";
	if (20 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+2)."&type=Propios'><button class='siguiente'>".($pagina+2)."</button></a></tr>";}
	if (30 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+3)."&type=Propios'><button class='siguiente'>".($pagina+3)."</button></a></tr>";}
	if (40 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+4)."&type=Propios'><button class='siguiente'>".($pagina+4)."</button></a></tr>";}
	if (50 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+5)."&type=Propios'><button class='siguiente'>".($pagina+5)."</button></a></tr>";}
	if (60 < mysql_num_rows($query)) {echo "<tr><a href='index.php?pagina=".($pagina+6)."&type=Propios'><button class='siguiente'>".($pagina+6)."</button></a></tr>";}
	echo "<tr><a href='index.php?pagina=".($pagina+1)."'><button class='siguiente'>></button></a></tr>";
	echo "<tr><a href='index.php?pagina=".ceil(mysql_num_rows($query)/10)."'><button class='siguiente'>>>></button></a></tr>";}
if (($siguiente == 10) OR ($pagina > 1)){echo"</table></center>";}
}

mysql_close($conn);
}
}


function consulta_unica($IDPost,$paginacomen){

/* Muestra un post solo, indicado por el id*/
if (isset($_SESSION['iduser'])){
$iduser = $_SESSION['iduser'];
include('conn.php');

$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis,p.trailer, p.min_so,
				p.min_procesador,p.min_memoria,p.min_video,p.min_espacio,p.min_librerias,p.min_otros,p.rec_so,p.rec_procesador,p.rec_memoria,p.rec_video,p.rec_espacio,
				p.rec_librerias,p.rec_otros,p.enlace1,p.urldescarga1,p.enlace2,p.urldescarga2,p.enlace3,p.urldescarga3,p.enlace4,p.urldescarga4,p.enlace5,p.urldescarga5,
				p.enlace6,p.urldescarga6,p.enlace7,p.urldescarga7,p.enlace8,p.urldescarga8,p.enlace9,p.urldescarga9,p.enlace10,p.urldescarga10,
				p.enlace11,p.urldescarga11,p.enlace12,p.urldescarga12,p.enlace13,p.urldescarga13,p.enlace14,p.urldescarga14,p.enlace15,p.urldescarga15,
				p.enlace16,p.urldescarga16,p.enlace17,p.urldescarga17,p.enlace18,p.urldescarga18,p.enlace19,p.urldescarga19,p.enlace20,p.urldescarga20,
				p.enlace21,p.urldescarga21,p.enlace22,p.urldescarga22,p.enlace23,p.urldescarga23,p.enlace24,p.urldescarga24,p.enlace25,p.urldescarga25,
				p.enlace26,p.urldescarga26,p.enlace27,p.urldescarga27,p.enlace28,p.urldescarga28,p.enlace29,p.urldescarga29,p.enlace30,p.urldescarga30,
				p.enlace31,p.urldescarga31,p.enlace32,p.urldescarga32,p.enlace33,p.urldescarga33,p.enlace34,p.urldescarga34,p.enlace35,p.urldescarga35,
				p.enlace36,p.urldescarga36,p.enlace37,p.urldescarga37,p.enlace38,p.urldescarga38,p.enlace39,p.urldescarga39,p.enlace40,p.urldescarga40
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE p.ID = $IDPost AND p.valido = 1";
$query_unico = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_unico)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

$consulta = mysql_fetch_assoc($query_unico);
$fecha = explode("-", $consulta['Fecha']);
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
$IDCategoria = $consulta['IDCategoria'];
if (($consulta['valido'] == 1) AND (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2))) {
$consulta['sinopsis'] = nl2br($consulta['sinopsis'], false);
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>Post #$consulta[ID]	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[sinopsis]</div>
		</div>"); if ($consulta['trailer'] <> NULL){print("
		<div class='datbox'>
			<div class='legend-descripcion'> Trailer</div>
			<div class='descrip'><!--Description of the post-->
			<center><embed width='420' height='315' src='$consulta[trailer]' frameborder='0' type='application/x-shockwave-flash' allowfullscreen></embed></center></div>
		</div>");}print("
			<div class='datbox'>
			<div class='legend-descripcion'> Descarga</div>
			<div class='descrip'><!--Description of the post-->");
			if (($consulta['enlace1'] <> NULL) AND ($consulta['urldescarga1'] <> NULL)){ print("<center><a href = '$consulta[urldescarga1]'> $consulta[enlace1]</center>  </a>");}
			if (($consulta['enlace2'] <> NULL) AND ($consulta['urldescarga2'] <> NULL)){ print("<center><a href = '$consulta[urldescarga2]'> $consulta[enlace2]</center>  </a>");}
			if (($consulta['enlace3'] <> NULL) AND ($consulta['urldescarga3'] <> NULL)){ print("<center><a href = '$consulta[urldescarga3]'> $consulta[enlace3]</center>  </a>");}
			if (($consulta['enlace4'] <> NULL) AND ($consulta['urldescarga4'] <> NULL)){ print("<center><a href = '$consulta[urldescarga4]'> $consulta[enlace4]</center>  </a>");}
			if (($consulta['enlace5'] <> NULL) AND ($consulta['urldescarga5'] <> NULL)){ print("<center><a href = '$consulta[urldescarga5]'> $consulta[enlace5]</center>  </a>");}
			if (($consulta['enlace6'] <> NULL) AND ($consulta['urldescarga6'] <> NULL)){ print("<center><a href = '$consulta[urldescarga6]'> $consulta[enlace6]</center>  </a>");}
			if (($consulta['enlace7'] <> NULL) AND ($consulta['urldescarga7'] <> NULL)){ print("<center><a href = '$consulta[urldescarga7]'> $consulta[enlace7]</center>  </a>");}
			if (($consulta['enlace8'] <> NULL) AND ($consulta['urldescarga8'] <> NULL)){ print("<center><a href = '$consulta[urldescarga8]'> $consulta[enlace8]</center>  </a>");}
			if (($consulta['enlace9'] <> NULL) AND ($consulta['urldescarga9'] <> NULL)){ print("<center><a href = '$consulta[urldescarga9]'> $consulta[enlace9]</center>  </a>");}
			if (($consulta['enlace10']<> NULL) AND ($consulta['urldescarga10']<> NULL)){ print("<center><a href = '$consulta[urldescarga10]'> $consulta[enlace10]</center>  </a>");}
			if (($consulta['enlace11']<> NULL) AND ($consulta['urldescarga11']<> NULL)){ print("<center><a href = '$consulta[urldescarga11]'> $consulta[enlace11]</center>  </a>");}
			if (($consulta['enlace12']<> NULL) AND ($consulta['urldescarga12']<> NULL)){ print("<center><a href = '$consulta[urldescarga12]'> $consulta[enlace12]</center>  </a>");}
			if (($consulta['enlace13']<> NULL) AND ($consulta['urldescarga13']<> NULL)){ print("<center><a href = '$consulta[urldescarga13]'> $consulta[enlace13]</center>  </a>");}
			if (($consulta['enlace14']<> NULL) AND ($consulta['urldescarga14']<> NULL)){ print("<center><a href = '$consulta[urldescarga14]'> $consulta[enlace14]</center>  </a>");}
			if (($consulta['enlace15']<> NULL) AND ($consulta['urldescarga15']<> NULL)){ print("<center><a href = '$consulta[urldescarga15]'> $consulta[enlace15]</center>  </a>");}
			if (($consulta['enlace16']<> NULL) AND ($consulta['urldescarga16']<> NULL)){ print("<center><a href = '$consulta[urldescarga16]'> $consulta[enlace16]</center>  </a>");}
			if (($consulta['enlace17']<> NULL) AND ($consulta['urldescarga17']<> NULL)){ print("<center><a href = '$consulta[urldescarga17]'> $consulta[enlace17]</center>  </a>");}
			if (($consulta['enlace18']<> NULL) AND ($consulta['urldescarga18']<> NULL)){ print("<center><a href = '$consulta[urldescarga18]'> $consulta[enlace18]</center>  </a>");}
			if (($consulta['enlace19']<> NULL) AND ($consulta['urldescarga19']<> NULL)){ print("<center><a href = '$consulta[urldescarga19]'> $consulta[enlace19]</center>  </a>");}
			if (($consulta['enlace20']<> NULL) AND ($consulta['urldescarga20']<> NULL)){ print("<center><a href = '$consulta[urldescarga20]'> $consulta[enlace20]</center>  </a>");}
			if (($consulta['enlace21']<> NULL) AND ($consulta['urldescarga21']<> NULL)){ print("<center><a href = '$consulta[urldescarga21]'> $consulta[enlace21]</center>  </a>");}
			if (($consulta['enlace22']<> NULL) AND ($consulta['urldescarga22']<> NULL)){ print("<center><a href = '$consulta[urldescarga22]'> $consulta[enlace22]</center>  </a>");}
			if (($consulta['enlace23']<> NULL) AND ($consulta['urldescarga23']<> NULL)){ print("<center><a href = '$consulta[urldescarga23]'> $consulta[enlace23]</center>  </a>");}
			if (($consulta['enlace24']<> NULL) AND ($consulta['urldescarga24']<> NULL)){ print("<center><a href = '$consulta[urldescarga24]'> $consulta[enlace24]</center>  </a>");}
			if (($consulta['enlace25']<> NULL) AND ($consulta['urldescarga25']<> NULL)){ print("<center><a href = '$consulta[urldescarga25]'> $consulta[enlace25]</center>  </a>");}
			if (($consulta['enlace26']<> NULL) AND ($consulta['urldescarga26']<> NULL)){ print("<center><a href = '$consulta[urldescarga26]'> $consulta[enlace26]</center>  </a>");}
			if (($consulta['enlace27']<> NULL) AND ($consulta['urldescarga27']<> NULL)){ print("<center><a href = '$consulta[urldescarga27]'> $consulta[enlace27]</center>  </a>");}
			if (($consulta['enlace28']<> NULL) AND ($consulta['urldescarga28']<> NULL)){ print("<center><a href = '$consulta[urldescarga28]'> $consulta[enlace28]</center>  </a>");}
			if (($consulta['enlace29']<> NULL) AND ($consulta['urldescarga29']<> NULL)){ print("<center><a href = '$consulta[urldescarga29]'> $consulta[enlace29]</center>  </a>");}
			if (($consulta['enlace30']<> NULL) AND ($consulta['urldescarga30']<> NULL)){ print("<center><a href = '$consulta[urldescarga30]'> $consulta[enlace30]</center>  </a>");}
			if (($consulta['enlace31']<> NULL) AND ($consulta['urldescarga31']<> NULL)){ print("<center><a href = '$consulta[urldescarga31]'> $consulta[enlace31]</center>  </a>");}
			if (($consulta['enlace32']<> NULL) AND ($consulta['urldescarga32']<> NULL)){ print("<center><a href = '$consulta[urldescarga32]'> $consulta[enlace32]</center>  </a>");}
			if (($consulta['enlace33']<> NULL) AND ($consulta['urldescarga33']<> NULL)){ print("<center><a href = '$consulta[urldescarga33]'> $consulta[enlace33]</center>  </a>");}
			if (($consulta['enlace34']<> NULL) AND ($consulta['urldescarga34']<> NULL)){ print("<center><a href = '$consulta[urldescarga34]'> $consulta[enlace34]</center>  </a>");}
			if (($consulta['enlace35']<> NULL) AND ($consulta['urldescarga35']<> NULL)){ print("<center><a href = '$consulta[urldescarga35]'> $consulta[enlace35]</center>  </a>");}
			if (($consulta['enlace36']<> NULL) AND ($consulta['urldescarga36']<> NULL)){ print("<center><a href = '$consulta[urldescarga36]'> $consulta[enlace36]</center>  </a>");}
			if (($consulta['enlace37']<> NULL) AND ($consulta['urldescarga37']<> NULL)){ print("<center><a href = '$consulta[urldescarga37]'> $consulta[enlace37]</center>  </a>");}
			if (($consulta['enlace38']<> NULL) AND ($consulta['urldescarga38']<> NULL)){ print("<center><a href = '$consulta[urldescarga38]'> $consulta[enlace38]</center>  </a>");}
			if (($consulta['enlace39']<> NULL) AND ($consulta['urldescarga39']<> NULL)){ print("<center><a href = '$consulta[urldescarga39]'> $consulta[enlace39]</center>  </a>");}
			if (($consulta['enlace40']<> NULL) AND ($consulta['urldescarga40']<> NULL)){ print("<center><a href = '$consulta[urldescarga40]'> $consulta[enlace40]</center>  </a>");}
			print("</div>");
			if ($consulta['IDUsuario'] == $iduser){print("
				<form action='index.php' method='POST'>
				<input type='hidden' name='idpost' id='idpost' value=$consulta[ID]>
				<input type='hidden' name='type' id='type' value='Edit'>
				<button type='submit' class='go-post'>Editar</button></a>
				</form>");}
			print("
		</div>
	</div>
");consulta_comentarios($IDPost,$paginacomen); 
} else {
$consulta['descripcion'] = nl2br($consulta['descripcion'], false);
print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'>$consulta[Titulo]</div>
				<div id='post-details'>Post #$consulta[ID]	Posteado En: $consulta[nombre] por $consulta[Username]	</div>
			</div>
		</div>
		<div class='datbox' align='center'><!--Image of the post-->
		<img class='imagen' src=$consulta[url_imagen]>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'>Descripcion</div>
			<div class='descrip'><!--Description of the post-->
			$consulta[descripcion]</div>
		</div>
		<div class='datbox'>
			<div class='legend-requirimientos'>Requirimientos</div>
			<div class='descrip'><!--Description of the post-->
			Requirimientos minimos:
			<ul>
			<li>$consulta[min_so]</li>
			<li>$consulta[min_procesador]</li>
			<li>$consulta[min_memoria]</li>
			<li>$consulta[min_video]</li>
			<li>$consulta[min_espacio]</li>
			<li>$consulta[min_librerias]</li>");
			if ($consulta['min_otros'] <> NULL) { echo "<li>$consulta[min_otros]</li></ul>";}
			else{echo "</ul>";}
			if (($consulta['rec_so'] <> NULL) OR ($consulta['rec_so'] <> NULL) OR ($consulta['rec_procesador'] <> NULL)
			 OR ($consulta['rec_memoria'] <> NULL) OR ($consulta['rec_video'] <> NULL)
			 OR ($consulta['rec_espacio'] <> NULL) OR ($consulta['rec_librerias'] <> NULL) OR ($consulta['rec_otros'] <> NULL)) {echo " Requirimientos recomendados: <ul>";}
			if ($consulta['rec_so'] <> NULL) { echo "<li>$consulta[rec_so]</li>";}
			if ($consulta['rec_procesador'] <> NULL) { echo "<li>$consulta[rec_procesador]</li>";}
			if ($consulta['rec_memoria'] <> NULL) { echo "<li>$consulta[rec_memoria]</li>";}
			if ($consulta['rec_video'] <> NULL) { echo "<li>$consulta[rec_video]</li>";}
			if ($consulta['rec_espacio'] <> NULL) { echo "<li>$consulta[rec_espacio]</li>";}
			if ($consulta['rec_librerias'] <> NULL) { echo "<li>$consulta[rec_librerias]</li>";}
			if ($consulta['rec_otros'] <> NULL) { echo "<li>$consulta[rec_otros]</li>";}
			if (($consulta['rec_so'] <> NULL) OR ($consulta['rec_so'] <> NULL) OR ($consulta['rec_procesador'] <> NULL)
			 OR ($consulta['rec_memoria'] <> NULL) OR ($consulta['rec_video'] <> NULL)
			 OR ($consulta['rec_espacio'] <> NULL) OR ($consulta['rec_librerias'] <> NULL) OR ($consulta['rec_otros'] <> NULL)) {echo "</ul>";}
			print("
			</div>
		</div>"); if ($consulta['trailer'] <> NULL){print("
		<div class='datbox'>
			<div class='legend-descripcion'> Trailer</div>
			<div class='descrip'><!--Description of the post-->
			<center><embed width='420' height='315' src='$consulta[trailer]' frameborder='0' type='application/x-shockwave-flash' allowfullscreen></embed></center></div>
		</div>");}print("
		<div class='datbox'>
			<div class='legend-descripcion'> Descarga</div>
			<div class='descrip'>");
			if (($consulta['enlace1'] <> NULL) AND ($consulta['urldescarga1'] <> NULL)){ print("<center><a href = '$consulta[urldescarga1]'> $consulta[enlace1]</center>  </a>");}
			if (($consulta['enlace2'] <> NULL) AND ($consulta['urldescarga2'] <> NULL)){ print("<center><a href = '$consulta[urldescarga2]'> $consulta[enlace2]</center>  </a>");}
			if (($consulta['enlace3'] <> NULL) AND ($consulta['urldescarga3'] <> NULL)){ print("<center><a href = '$consulta[urldescarga3]'> $consulta[enlace3]</center>  </a>");}
			if (($consulta['enlace4'] <> NULL) AND ($consulta['urldescarga4'] <> NULL)){ print("<center><a href = '$consulta[urldescarga4]'> $consulta[enlace4]</center>  </a>");}
			if (($consulta['enlace5'] <> NULL) AND ($consulta['urldescarga5'] <> NULL)){ print("<center><a href = '$consulta[urldescarga5]'> $consulta[enlace5]</center>  </a>");}
			if (($consulta['enlace6'] <> NULL) AND ($consulta['urldescarga6'] <> NULL)){ print("<center><a href = '$consulta[urldescarga6]'> $consulta[enlace6]</center>  </a>");}
			if (($consulta['enlace7'] <> NULL) AND ($consulta['urldescarga7'] <> NULL)){ print("<center><a href = '$consulta[urldescarga7]'> $consulta[enlace7]</center>  </a>");}
			if (($consulta['enlace8'] <> NULL) AND ($consulta['urldescarga8'] <> NULL)){ print("<center><a href = '$consulta[urldescarga8]'> $consulta[enlace8]</center>  </a>");}
			if (($consulta['enlace9'] <> NULL) AND ($consulta['urldescarga9'] <> NULL)){ print("<center><a href = '$consulta[urldescarga9]'> $consulta[enlace9]</center>  </a>");}
			if (($consulta['enlace10']<> NULL) AND ($consulta['urldescarga10']<> NULL)){ print("<center><a href = '$consulta[urldescarga10]'> $consulta[enlace10]</center>  </a>");}
			if (($consulta['enlace11']<> NULL) AND ($consulta['urldescarga11']<> NULL)){ print("<center><a href = '$consulta[urldescarga11]'> $consulta[enlace11]</center>  </a>");}
			if (($consulta['enlace12']<> NULL) AND ($consulta['urldescarga12']<> NULL)){ print("<center><a href = '$consulta[urldescarga12]'> $consulta[enlace12]</center>  </a>");}
			if (($consulta['enlace13']<> NULL) AND ($consulta['urldescarga13']<> NULL)){ print("<center><a href = '$consulta[urldescarga13]'> $consulta[enlace13]</center>  </a>");}
			if (($consulta['enlace14']<> NULL) AND ($consulta['urldescarga14']<> NULL)){ print("<center><a href = '$consulta[urldescarga14]'> $consulta[enlace14]</center>  </a>");}
			if (($consulta['enlace15']<> NULL) AND ($consulta['urldescarga15']<> NULL)){ print("<center><a href = '$consulta[urldescarga15]'> $consulta[enlace15]</center>  </a>");}
			if (($consulta['enlace16']<> NULL) AND ($consulta['urldescarga16']<> NULL)){ print("<center><a href = '$consulta[urldescarga16]'> $consulta[enlace16]</center>  </a>");}
			if (($consulta['enlace17']<> NULL) AND ($consulta['urldescarga17']<> NULL)){ print("<center><a href = '$consulta[urldescarga17]'> $consulta[enlace17]</center>  </a>");}
			if (($consulta['enlace18']<> NULL) AND ($consulta['urldescarga18']<> NULL)){ print("<center><a href = '$consulta[urldescarga18]'> $consulta[enlace18]</center>  </a>");}
			if (($consulta['enlace19']<> NULL) AND ($consulta['urldescarga19']<> NULL)){ print("<center><a href = '$consulta[urldescarga19]'> $consulta[enlace19]</center>  </a>");}
			if (($consulta['enlace20']<> NULL) AND ($consulta['urldescarga20']<> NULL)){ print("<center><a href = '$consulta[urldescarga20]'> $consulta[enlace20]</center>  </a>");}
			if (($consulta['enlace21']<> NULL) AND ($consulta['urldescarga21']<> NULL)){ print("<center><a href = '$consulta[urldescarga21]'> $consulta[enlace21]</center>  </a>");}
			if (($consulta['enlace22']<> NULL) AND ($consulta['urldescarga22']<> NULL)){ print("<center><a href = '$consulta[urldescarga22]'> $consulta[enlace22]</center>  </a>");}
			if (($consulta['enlace23']<> NULL) AND ($consulta['urldescarga23']<> NULL)){ print("<center><a href = '$consulta[urldescarga23]'> $consulta[enlace23]</center>  </a>");}
			if (($consulta['enlace24']<> NULL) AND ($consulta['urldescarga24']<> NULL)){ print("<center><a href = '$consulta[urldescarga24]'> $consulta[enlace24]</center>  </a>");}
			if (($consulta['enlace25']<> NULL) AND ($consulta['urldescarga25']<> NULL)){ print("<center><a href = '$consulta[urldescarga25]'> $consulta[enlace25]</center>  </a>");}
			if (($consulta['enlace26']<> NULL) AND ($consulta['urldescarga26']<> NULL)){ print("<center><a href = '$consulta[urldescarga26]'> $consulta[enlace26]</center>  </a>");}
			if (($consulta['enlace27']<> NULL) AND ($consulta['urldescarga27']<> NULL)){ print("<center><a href = '$consulta[urldescarga27]'> $consulta[enlace27]</center>  </a>");}
			if (($consulta['enlace28']<> NULL) AND ($consulta['urldescarga28']<> NULL)){ print("<center><a href = '$consulta[urldescarga28]'> $consulta[enlace28]</center>  </a>");}
			if (($consulta['enlace29']<> NULL) AND ($consulta['urldescarga29']<> NULL)){ print("<center><a href = '$consulta[urldescarga29]'> $consulta[enlace29]</center>  </a>");}
			if (($consulta['enlace30']<> NULL) AND ($consulta['urldescarga30']<> NULL)){ print("<center><a href = '$consulta[urldescarga30]'> $consulta[enlace30]</center>  </a>");}
			if (($consulta['enlace31']<> NULL) AND ($consulta['urldescarga31']<> NULL)){ print("<center><a href = '$consulta[urldescarga31]'> $consulta[enlace31]</center>  </a>");}
			if (($consulta['enlace32']<> NULL) AND ($consulta['urldescarga32']<> NULL)){ print("<center><a href = '$consulta[urldescarga32]'> $consulta[enlace32]</center>  </a>");}
			if (($consulta['enlace33']<> NULL) AND ($consulta['urldescarga33']<> NULL)){ print("<center><a href = '$consulta[urldescarga33]'> $consulta[enlace33]</center>  </a>");}
			if (($consulta['enlace34']<> NULL) AND ($consulta['urldescarga34']<> NULL)){ print("<center><a href = '$consulta[urldescarga34]'> $consulta[enlace34]</center>  </a>");}
			if (($consulta['enlace35']<> NULL) AND ($consulta['urldescarga35']<> NULL)){ print("<center><a href = '$consulta[urldescarga35]'> $consulta[enlace35]</center>  </a>");}
			if (($consulta['enlace36']<> NULL) AND ($consulta['urldescarga36']<> NULL)){ print("<center><a href = '$consulta[urldescarga36]'> $consulta[enlace36]</center>  </a>");}
			if (($consulta['enlace37']<> NULL) AND ($consulta['urldescarga37']<> NULL)){ print("<center><a href = '$consulta[urldescarga37]'> $consulta[enlace37]</center>  </a>");}
			if (($consulta['enlace38']<> NULL) AND ($consulta['urldescarga38']<> NULL)){ print("<center><a href = '$consulta[urldescarga38]'> $consulta[enlace38]</center>  </a>");}
			if (($consulta['enlace39']<> NULL) AND ($consulta['urldescarga39']<> NULL)){ print("<center><a href = '$consulta[urldescarga39]'> $consulta[enlace39]</center>  </a>");}
			if (($consulta['enlace40']<> NULL) AND ($consulta['urldescarga40']<> NULL)){ print("<center><a href = '$consulta[urldescarga40]'> $consulta[enlace40]</center>  </a>");}
			print("</div>
		</div>
	</div>
");consulta_comentarios($IDPost,$paginacomen); 
}
mysql_close($conn);
}
}

function consulta_archivos(){

/* Imprime en el index las direcciones para dirigerse a un mes determinado*/

include('conn.php');

$sql = "SELECT month(fecha) as mes, year(fecha) as anio, count(*) as cantidad
		FROM posts
		WHERE valido = 1
		GROUP BY mes;";
$query_archivos = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_archivos)
{
  die("Error al ejecutar una consulta, Mensaje: ". $query_archivos->errorInfo());
}

while($consulta_archivos = mysql_fetch_assoc($query_archivos)){
	$nombre_mes = extmes($consulta_archivos['mes']);
	print ("<a href='index.php?pagina=1&type=F&mes=$consulta_archivos[mes]&anio=$consulta_archivos[anio]'><div class= 'archivos'>$nombre_mes $consulta_archivos[anio] ($consulta_archivos[cantidad]) </div></a> ");}

mysql_close($conn);

}

function consulta_maxcomentarios(){

/* Imprime en el index las direcciones para dirigerse a un mes determinado*/

include('conn.php');

$sql = "SELECT p.ID, p.Titulo, COUNT( * ) AS cantidad
		FROM posts p
		JOIN comentarios c ON ( c.IDPost = p.ID ) 
		WHERE valido =1
		GROUP BY c.IDPost
		ORDER BY cantidad DESC
		LIMIT 10;";
$query_maxcomentarios = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_maxcomentarios)
{
  die("Error al ejecutar una consulta, Mensaje: ". $query_maxcomentarios->errorInfo());
}
echo "<table style='width: 90%; margin-left: auto; margin-right: auto;'> ";
$pos = 0;
while ($consulta_maxcomentarios = mysql_fetch_assoc($query_maxcomentarios)) {
	$pos ++;
	if (strlen($consulta_maxcomentarios['Titulo']) > 29){
		$titulo = substr($consulta_maxcomentarios['Titulo'],0,29)."...";
		print("	
		<tr>
		<td align=left><a href='index.php?idpost=$consulta_maxcomentarios[ID]&type=P'>".$pos."º $titulo</a></td>
		<td text-align='right'><a href='index.php?idpost=$consulta_maxcomentarios[ID]&type=P'>$consulta_maxcomentarios[cantidad]</a></td>
		</tr>
		");}else{
			print("
			<tr>
			<td align=left><a href='index.php?idpost=$consulta_maxcomentarios[ID]&type=P'>".$pos."º $consulta_maxcomentarios[Titulo]</a></td>
			<td text-align='right'><a href='index.php?idpost=$consulta_maxcomentarios[ID]&type=P'>$consulta_maxcomentarios[cantidad]</a></td>
			</tr>
			");
		}
	}
echo "</table>";

mysql_close($conn);

}

function consulta_cantidades(){

/* Imprime en el index las direcciones para dirigerse a un mes determinado*/

include('conn.php');

$sql_posts = "SELECT count(*) as cantidad
		FROM posts
		WHERE valido = 1";
$query_posts = mysql_query($sql_posts, $conn) or die(mysql_error());
if(!$query_posts)
{
  die("Error al ejecutar una consulta, Mensaje: ". $query_archivos->errorInfo());
}
$sql_usuarios = "SELECT count(*) as cantidad
		FROM usuarios
		WHERE ((activado = 1) AND (baneado = 0))";
$query_usuarios = mysql_query($sql_usuarios, $conn) or die(mysql_error());
if(!$query_usuarios)
{
  die("Error al ejecutar una consulta, Mensaje: ". $query_usuarios->errorInfo());
}
$sql_comentarios = "SELECT count(*) as cantidad
		FROM comentarios";
$query_comentarios = mysql_query($sql_comentarios, $conn) or die(mysql_error());
if(!$query_comentarios)
{
  die("Error al ejecutar una consulta, Mensaje: ". $query_comentarios->errorInfo());
}

$consulta_posts = mysql_fetch_assoc($query_posts);
$consulta_usuarios = mysql_fetch_assoc($query_usuarios);
$consulta_comentarios = mysql_fetch_assoc($query_comentarios);
echo "<div class='datbox-aside'><center>";
		print("<div class='estadisticas'>Estadisticas</div>");
		echo $consulta_usuarios['cantidad'].' Usuarios  	    |'.$consulta_posts['cantidad'].'    Post      |'.$consulta_comentarios['cantidad'].'  Comentarios';
echo "</center></div>";
mysql_close($conn);

}

function editar_user($IDPost){

/* Muestra un post solo, indicado por el id*/
if (isset($_SESSION['iduser'])){
$iduser = $_SESSION['iduser'];
include('conn.php');

$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.Username,p.valido, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.sinopsis,p.trailer, p.min_so,
				p.min_procesador,p.min_memoria,p.min_video,p.min_espacio,p.min_librerias,p.min_otros,p.rec_so,p.rec_procesador,p.rec_memoria,p.rec_video,p.rec_espacio,
				p.rec_librerias,p.rec_otros,p.enlace1,p.urldescarga1,p.enlace2,p.urldescarga2,p.enlace3,p.urldescarga3,p.enlace4,p.urldescarga4,p.enlace5,p.urldescarga5,
				p.enlace6,p.urldescarga6,p.enlace7,p.urldescarga7,p.enlace8,p.urldescarga8,p.enlace9,p.urldescarga9,p.enlace10,p.urldescarga10,
				p.enlace11,p.urldescarga11,p.enlace12,p.urldescarga12,p.enlace13,p.urldescarga13,p.enlace14,p.urldescarga14,p.enlace15,p.urldescarga15,
				p.enlace16,p.urldescarga16,p.enlace17,p.urldescarga17,p.enlace18,p.urldescarga18,p.enlace19,p.urldescarga19,p.enlace20,p.urldescarga20,
				p.enlace21,p.urldescarga21,p.enlace22,p.urldescarga22,p.enlace23,p.urldescarga23,p.enlace24,p.urldescarga24,p.enlace25,p.urldescarga25,
				p.enlace26,p.urldescarga26,p.enlace27,p.urldescarga27,p.enlace28,p.urldescarga28,p.enlace29,p.urldescarga29,p.enlace30,p.urldescarga30,
				p.enlace31,p.urldescarga31,p.enlace32,p.urldescarga32,p.enlace33,p.urldescarga33,p.enlace34,p.urldescarga34,p.enlace35,p.urldescarga35,
				p.enlace36,p.urldescarga36,p.enlace37,p.urldescarga37,p.enlace38,p.urldescarga38,p.enlace39,p.urldescarga39,p.enlace40,p.urldescarga40
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria )
		WHERE p.ID = $IDPost ";
$query_unico = mysql_query($sql, $conn) or die(mysql_error());
if(!$query_unico)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

session_start();
$usuario = $_SESSION['username'];
$fecha = explode("-", date("Y-m-d"));
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
$consulta = mysql_fetch_assoc($query_unico);
$IDCategoria = $consulta['IDCategoria'];
if (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2)) {
print("<form class='nuevo-post' name='nuevovid' id='nuevovid' method='POST' align='center'  action='editar.php'>
			<div class='datbox-post' ><div class='legend-post'>Titulo</div><textarea class='renglon' onkeyup='CargarPreviewTitulo(document.nuevovid.titulo)' name='titulo' id='titulo'>".$consulta['Titulo']."</textarea><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 11)) { echo "Debe ingresar un titulo correcto, entre 5 y 70 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-post'>Imagen</div><input type='text'class='renglon'onkeyup='CargarPreviewImagen(this)' name='imagen' id='imagen' value=".$consulta['url_imagen']."><br>"); if ((isset($_GET['error'])) AND (($_GET['error'] == 12) OR ($_GET['error'] == 16))){ echo "Debe ingresar una url de una imagen.";} print("</div>
			<div class='datbox-post' ><div class='legend-descarga'>Sinopsis</div>Minimo 100 caracteres<textarea class='texto' onkeyup='CargarPreviewSinopsis(this)' name='sinopsis' id='sinopsis' >".$consulta['sinopsis']."</textarea><br>"); if ((isset($_GET['error'])) AND (($_GET['error'] == 13) OR ($_GET['error'] == 17))){ echo "Debe ingresar una sinopsis de 100 a 3000 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-post'>Trailer</div>Añadir trailer como: http://www.youtube.com/v/IDVIDEO, por ejemplo http://www.youtube.com/watch?v=bkysjcs5vFU -> http://www.youtube.com/v/bkysjcs5vFU<input type='text' class='renglon' onkeyup='CargarPreviewTrailer(this)' id='trailer' name='trailer' id='trailer' value=".$consulta['trailer']."><br>"); if ((isset($_GET['error'])) AND (($_GET['error'] == 14) OR ($_GET['error'] == 18))){ echo "Debe ingresar un url a un video.";} print("</div>
			<div class='datbox-post'><div class='legend-descarga'>Descarga</div>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 15)) { echo "Debe ingresar al menos 3 enlaces completos";} print("
				<input type='text' class='enlace' name='enlace1' id='enlace1' onkeyup='CargarPreviewDescarga1(this,document.nuevovid.descarga1)' value='$consulta[enlace1]'/><input type='text' class='descarga'onkeyup=' CargarPreviewDescarga1(document.nuevojuego.enlace1,this)' name='descarga1' id='descarga1' value='$consulta[urldescarga1]'/><br>
				<input type='text' class='enlace' name='enlace2' id='enlace2' onkeyup='CargarPreviewDescarga2(this,document.nuevovid.descarga2)' value='$consulta[enlace2]'/><input type='text' class='descarga'onkeyup=' CargarPreviewDescarga2(document.nuevojuego.enlace2,this)' name='descarga2' id='descarga2' value='$consulta[urldescarga2]'/><br>
				<input type='text' class='enlace' name='enlace3' id='enlace3' onkeyup='CargarPreviewDescarga3(this,document.nuevovid.descarga3)' value='$consulta[enlace3]'/><input type='text' class='descarga'onkeyup=' CargarPreviewDescarga3(document.nuevojuego.enlace3,this)' name='descarga3' id='descarga3' value='$consulta[urldescarga3]'/><br>
				<input type='text' class='enlace' name='enlace4' id='enlace4' onkeyup='CargarPreviewDescarga4(this,document.nuevovid.descarga4)' value='$consulta[enlace4]'/><input type='text' class='descarga' name='descarga4' id='descarga4' onkeyup='CargarPreviewDescarga4(document.nuevojuego.enlace4,this)' value='$consulta[urldescarga4]'/><br>
				<input type='text' class='enlace' name='enlace5' id='enlace5' onkeyup='CargarPreviewDescarga5(this,document.nuevovid.descarga5)' value='$consulta[enlace5]'/><input type='text' class='descarga' name='descarga5' id='descarga5' onkeyup='CargarPreviewDescarga5(document.nuevojuego.enlace5,this)' value='$consulta[urldescarga5]'/><br>
				<center><button class='boton-aside' type='button' onclick='masdescargas();'>Abrir/Cerrar mas descargas</button></center>
				<div id='masdescargas'>
				<input type='text' class='enlace' name='enlace6' id='enlace6' onkeyup='CargarPreviewDescarga6(this,document.nuevovid.descarga6)' value='$consulta[enlace6]'/><input type='text' class='descarga' name='descarga6' id='descarga6' onkeyup='CargarPreviewDescarga6(document.nuevojuego.enlace6,this)' value='$consulta[urldescarga6]'/><br>
				<input type='text' class='enlace' name='enlace7' id='enlace7' onkeyup='CargarPreviewDescarga7(this,document.nuevovid.descarga7)' value='$consulta[enlace7]'/><input type='text' class='descarga' name='descarga7' id='descarga7' onkeyup='CargarPreviewDescarga7(document.nuevojuego.enlace7,this)' value='$consulta[urldescarga7]'/><br>
				<input type='text' class='enlace' name='enlace8' id='enlace8' onkeyup='CargarPreviewDescarga8(this,document.nuevovid.descarga8)' value='$consulta[enlace8]'/><input type='text' class='descarga' name='descarga8' id='descarga8' onkeyup='CargarPreviewDescarga8(document.nuevojuego.enlace8,this)' value='$consulta[urldescarga8]'/><br>
				<input type='text' class='enlace' name='enlace9' id='enlace9' onkeyup='CargarPreviewDescarga9(this,document.nuevovid.descarga9)' value='$consulta[enlace9]'/><input type='text' class='descarga' name='descarga9' id='descarga9' onkeyup='CargarPreviewDescarga9(document.nuevojuego.enlace9,this)' value='$consulta[urldescarga9]'/><br>
				<input type='text' class='enlace' name='enlace10' id='enlace10' onkeyup='CargarPreviewDescarga10(this,document.nuevovid.descarga10)'value='$consulta[enlace10]'/><input type='text' class='descarga' name='descarga10' id='descarga10' onkeyup='CargarPreviewDescarga10(document.nuevojuego.enlace10,this)' value='$consulta[urldescarga10]'/><br>
				<input type='text' class='enlace' name='enlace11' id='enlace11' onkeyup='CargarPreviewDescarga11(this,document.nuevovid.descarga11)'value='$consulta[enlace11]'/><input type='text' class='descarga' name='descarga11' id='descarga11' onkeyup='CargarPreviewDescarga11(document.nuevojuego.enlace11,this)' value='$consulta[urldescarga11]'/><br>
				<input type='text' class='enlace' name='enlace12' id='enlace12' onkeyup='CargarPreviewDescarga12(this,document.nuevovid.descarga12)'value='$consulta[enlace12]'/><input type='text' class='descarga' name='descarga12' id='descarga12' onkeyup='CargarPreviewDescarga12(document.nuevojuego.enlace12,this)' value='$consulta[urldescarga12]'/><br>
				<input type='text' class='enlace' name='enlace13' id='enlace13' onkeyup='CargarPreviewDescarga13(this,document.nuevovid.descarga13)'value='$consulta[enlace13]'/><input type='text' class='descarga' name='descarga13' id='descarga13' onkeyup='CargarPreviewDescarga13(document.nuevojuego.enlace13,this)' value='$consulta[urldescarga13]'/><br>
				<input type='text' class='enlace' name='enlace14' id='enlace14' onkeyup='CargarPreviewDescarga14(this,document.nuevovid.descarga14)'value='$consulta[enlace14]'/><input type='text' class='descarga' name='descarga14' id='descarga14' onkeyup='CargarPreviewDescarga14(document.nuevojuego.enlace14,this)' value='$consulta[urldescarga14]'/><br>
				<input type='text' class='enlace' name='enlace15' id='enlace15' onkeyup='CargarPreviewDescarga15(this,document.nuevovid.descarga15)'value='$consulta[enlace15]'/><input type='text' class='descarga' name='descarga15' id='descarga15' onkeyup='CargarPreviewDescarga15(document.nuevojuego.enlace15,this)' value='$consulta[urldescarga15]'/><br>
				<input type='text' class='enlace' name='enlace16' id='enlace16' onkeyup='CargarPreviewDescarga16(this,document.nuevovid.descarga16)'value='$consulta[enlace16]'/><input type='text' class='descarga' name='descarga16' id='descarga16' onkeyup='CargarPreviewDescarga16(document.nuevojuego.enlace16,this)' value='$consulta[urldescarga16]'/><br>
				<input type='text' class='enlace' name='enlace17' id='enlace17' onkeyup='CargarPreviewDescarga17(this,document.nuevovid.descarga17)'value='$consulta[enlace17]'/><input type='text' class='descarga' name='descarga17' id='descarga17' onkeyup='CargarPreviewDescarga17(document.nuevojuego.enlace17,this)' value='$consulta[urldescarga17]'/><br>
				<input type='text' class='enlace' name='enlace18' id='enlace18' onkeyup='CargarPreviewDescarga18(this,document.nuevovid.descarga18)'value='$consulta[enlace18]'/><input type='text' class='descarga' name='descarga18' id='descarga18' onkeyup='CargarPreviewDescarga18(document.nuevojuego.enlace18,this)' value='$consulta[urldescarga18]'/><br>
				<input type='text' class='enlace' name='enlace19' id='enlace19' onkeyup='CargarPreviewDescarga19(this,document.nuevovid.descarga19)'value='$consulta[enlace19]'/><input type='text' class='descarga' name='descarga19' id='descarga19' onkeyup='CargarPreviewDescarga19(document.nuevojuego.enlace19,this)' value='$consulta[urldescarga19]'/><br>
				<input type='text' class='enlace' name='enlace20' id='enlace20' onkeyup='CargarPreviewDescarga20(this,document.nuevovid.descarga20)'value='$consulta[enlace20]'/><input type='text' class='descarga' name='descarga20' id='descarga20' onkeyup='CargarPreviewDescarga20(document.nuevojuego.enlace20,this)' value='$consulta[urldescarga20]'/><br>
				<input type='text' class='enlace' name='enlace21' id='enlace21' onkeyup='CargarPreviewDescarga21(this,document.nuevovid.descarga21)'value='$consulta[enlace21]'/><input type='text' class='descarga' name='descarga21' id='descarga21' onkeyup='CargarPreviewDescarga21(document.nuevojuego.enlace21,this)' value='$consulta[urldescarga21]'/><br>
				<input type='text' class='enlace' name='enlace22' id='enlace22' onkeyup='CargarPreviewDescarga22(this,document.nuevovid.descarga22)'value='$consulta[enlace22]'/><input type='text' class='descarga' name='descarga22' id='descarga22' onkeyup='CargarPreviewDescarga22(document.nuevojuego.enlace22,this)' value='$consulta[urldescarga22]'/><br>
				<input type='text' class='enlace' name='enlace23' id='enlace23' onkeyup='CargarPreviewDescarga23(this,document.nuevovid.descarga23)'value='$consulta[enlace23]'/><input type='text' class='descarga' name='descarga23' id='descarga23' onkeyup='CargarPreviewDescarga23(document.nuevojuego.enlace23,this)' value='$consulta[urldescarga23]'/><br>
				<input type='text' class='enlace' name='enlace24' id='enlace24' onkeyup='CargarPreviewDescarga24(this,document.nuevovid.descarga24)'value='$consulta[enlace24]'/><input type='text' class='descarga' name='descarga24' id='descarga24' onkeyup='CargarPreviewDescarga24(document.nuevojuego.enlace24,this)' value='$consulta[urldescarga24]'/><br>
				<input type='text' class='enlace' name='enlace25' id='enlace25' onkeyup='CargarPreviewDescarga25(this,document.nuevovid.descarga25)'value='$consulta[enlace25]'/><input type='text' class='descarga' name='descarga25' id='descarga25' onkeyup='CargarPreviewDescarga25(document.nuevojuego.enlace25,this)' value='$consulta[urldescarga25]'/><br>
				<input type='text' class='enlace' name='enlace26' id='enlace26' onkeyup='CargarPreviewDescarga26(this,document.nuevovid.descarga26)'value='$consulta[enlace26]'/><input type='text' class='descarga' name='descarga26' id='descarga26' onkeyup='CargarPreviewDescarga26(document.nuevojuego.enlace26,this)' value='$consulta[urldescarga26]'/><br>
				<input type='text' class='enlace' name='enlace27' id='enlace27' onkeyup='CargarPreviewDescarga27(this,document.nuevovid.descarga27)'value='$consulta[enlace27]'/><input type='text' class='descarga' name='descarga27' id='descarga27' onkeyup='CargarPreviewDescarga27(document.nuevojuego.enlace27,this)' value='$consulta[urldescarga27]'/><br>
				<input type='text' class='enlace' name='enlace28' id='enlace28' onkeyup='CargarPreviewDescarga28(this,document.nuevovid.descarga28)'value='$consulta[enlace28]'/><input type='text' class='descarga' name='descarga28' id='descarga28' onkeyup='CargarPreviewDescarga28(document.nuevojuego.enlace28,this)' value='$consulta[urldescarga28]'/><br>
				<input type='text' class='enlace' name='enlace29' id='enlace29' onkeyup='CargarPreviewDescarga29(this,document.nuevovid.descarga29)'value='$consulta[enlace29]'/><input type='text' class='descarga' name='descarga29' id='descarga29' onkeyup='CargarPreviewDescarga29(document.nuevojuego.enlace29,this)' value='$consulta[urldescarga29]'/><br>
				<input type='text' class='enlace' name='enlace30' id='enlace30' onkeyup='CargarPreviewDescarga30(this,document.nuevovid.descarga30)'value='$consulta[enlace30]'/><input type='text' class='descarga' name='descarga30' id='descarga30' onkeyup='CargarPreviewDescarga30(document.nuevojuego.enlace30,this)' value='$consulta[urldescarga30]'/><br>
				<input type='text' class='enlace' name='enlace31' id='enlace31' onkeyup='CargarPreviewDescarga31(this,document.nuevovid.descarga31)'value='$consulta[enlace31]'/><input type='text' class='descarga' name='descarga31' id='descarga31' onkeyup='CargarPreviewDescarga31(document.nuevojuego.enlace31,this)' value='$consulta[urldescarga31]'/><br>
				<input type='text' class='enlace' name='enlace32' id='enlace32' onkeyup='CargarPreviewDescarga32(this,document.nuevovid.descarga32)'value='$consulta[enlace32]'/><input type='text' class='descarga' name='descarga32' id='descarga32' onkeyup='CargarPreviewDescarga32(document.nuevojuego.enlace32,this)' value='$consulta[urldescarga32]'/><br>
				<input type='text' class='enlace' name='enlace33' id='enlace33' onkeyup='CargarPreviewDescarga33(this,document.nuevovid.descarga33)'value='$consulta[enlace33]'/><input type='text' class='descarga' name='descarga33' id='descarga33' onkeyup='CargarPreviewDescarga33(document.nuevojuego.enlace33,this)' value='$consulta[urldescarga33]'/><br>
				<input type='text' class='enlace' name='enlace34' id='enlace34' onkeyup='CargarPreviewDescarga34(this,document.nuevovid.descarga34)'value='$consulta[enlace34]'/><input type='text' class='descarga' name='descarga34' id='descarga34' onkeyup='CargarPreviewDescarga34(document.nuevojuego.enlace34,this)' value='$consulta[urldescarga34]'/><br>
				<input type='text' class='enlace' name='enlace35' id='enlace35' onkeyup='CargarPreviewDescarga35(this,document.nuevovid.descarga35)'value='$consulta[enlace35]'/><input type='text' class='descarga' name='descarga35' id='descarga35' onkeyup='CargarPreviewDescarga35(document.nuevojuego.enlace35,this)' value='$consulta[urldescarga35]'/><br>
				<input type='text' class='enlace' name='enlace36' id='enlace36' onkeyup='CargarPreviewDescarga36(this,document.nuevovid.descarga36)'value='$consulta[enlace36]'/><input type='text' class='descarga' name='descarga36' id='descarga36' onkeyup='CargarPreviewDescarga36(document.nuevojuego.enlace36,this)' value='$consulta[urldescarga36]'/><br>
				<input type='text' class='enlace' name='enlace37' id='enlace37' onkeyup='CargarPreviewDescarga37(this,document.nuevovid.descarga37)'value='$consulta[enlace37]'/><input type='text' class='descarga' name='descarga37' id='descarga37' onkeyup='CargarPreviewDescarga37(document.nuevojuego.enlace37,this)' value='$consulta[urldescarga37]'/><br>
				<input type='text' class='enlace' name='enlace38' id='enlace38' onkeyup='CargarPreviewDescarga38(this,document.nuevovid.descarga38)'value='$consulta[enlace38]'/><input type='text' class='descarga' name='descarga38' id='descarga38' onkeyup='CargarPreviewDescarga38(document.nuevojuego.enlace38,this)' value='$consulta[urldescarga38]'/><br>
				<input type='text' class='enlace' name='enlace39' id='enlace39' onkeyup='CargarPreviewDescarga39(this,document.nuevovid.descarga39)'value='$consulta[enlace39]'/><input type='text' class='descarga' name='descarga39' id='descarga39' onkeyup='CargarPreviewDescarga39(document.nuevojuego.enlace39,this)' value='$consulta[urldescarga39]'/><br>
				<input type='text' class='enlace' name='enlace40' id='enlace40' onkeyup='CargarPreviewDescarga40(this,document.nuevovid.descarga40)'value='$consulta[enlace40]'/><input type='text' class='descarga' name='descarga40' id='descarga40' onkeyup='CargarPreviewDescarga40(document.nuevojuego.enlace40,this)' value='$consulta[urldescarga40]'/><br>
			</div>
			<input type='hidden' name='idpost' id='idpost' value=".$consulta['ID']."/>
			<input type='hidden' name='categoria' id='categoria' value=".$consulta['IDCategoria']."/>
		</form><br>
	<div class='prev'>Previsualizacion</div>
	<div>
		<div class='datbox-title'>
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'><div class='texto-descripcion' id='PreviewSinopsis'></div></div>
				<div id='post-details'>Posteado En: $nombrecat por $usuario	</div>
			</div>
		</div>
		<div class='datbox' align='center'>
		<img class='imagen' id='PreviewImagen' >
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><span id='PreviewSinopsis'></span></div>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Trailer</div>
			<div class='descrip'>
			<center><image id='PreviewTrailer' /></embed></center></div>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descarga</div>
			<div class='descrip' id = 'PreviewDescargas'>
			<center><div id = 'PreviewEnlace1'></div></center>  
			<center><div id = 'PreviewEnlace2'></div></center>  
			<center><div id = 'PreviewEnlace3'></div></center>  
			<center><div id = 'PreviewEnlace4'></div></center>  
			<center><div id = 'PreviewEnlace5'></div></center>  
			<center><div id = 'PreviewEnlace6'></div></center>  
			<center><div id = 'PreviewEnlace7'></div></center>  
			<center><div id = 'PreviewEnlace8'></div></center>  
			<center><div id = 'PreviewEnlace9'></div></center>  
			<center> <div id ='PreviewEnlace10'></div></center> 
			<center> <div id ='PreviewEnlace11'></div></center> 
			<center> <div id ='PreviewEnlace12'></div></center> 
			<center> <div id ='PreviewEnlace13'></div></center> 
			<center> <div id ='PreviewEnlace14'></div></center> 
			<center> <div id ='PreviewEnlace15'></div></center> 
			<center> <div id ='PreviewEnlace16'></div></center> 
			<center> <div id ='PreviewEnlace17'></div></center> 
			<center> <div id ='PreviewEnlace18'></div></center> 
			<center> <div id ='PreviewEnlace19'></div></center> 
			<center> <div id ='PreviewEnlace20'></div></center> 
			<center> <div id ='PreviewEnlace21'></div></center> 
			<center> <div id ='PreviewEnlace22'></div></center> 
			<center> <div id ='PreviewEnlace23'></div></center> 
			<center> <div id ='PreviewEnlace24'></div></center> 
			<center> <div id ='PreviewEnlace25'></div></center> 
			<center> <div id ='PreviewEnlace26'></div></center> 
			<center> <div id ='PreviewEnlace27'></div></center> 
			<center> <div id ='PreviewEnlace28'></div></center> 
			<center> <div id ='PreviewEnlace29'></div></center> 
			<center> <div id ='PreviewEnlace30'></div></center> 
			<center> <div id ='PreviewEnlace31'></div></center> 
			<center> <div id ='PreviewEnlace32'></div></center> 
			<center> <div id ='PreviewEnlace33'></div></center> 
			<center> <div id ='PreviewEnlace34'></div></center> 
			<center> <div id ='PreviewEnlace35'></div></center> 
			<center> <div id ='PreviewEnlace36'></div></center> 
			<center> <div id ='PreviewEnlace37'></div></center> 
			<center> <div id ='PreviewEnlace38'></div></center> 
			<center> <div id ='PreviewEnlace39'></div></center> 
			<center> <div id ='PreviewEnlace40'></div></center> 
			</div>
		</div>
	</div>
	<center>
	<button class='crear-post' onclick='submitvideo();'>Subir Post</button>
	</center>");
print("<script type='text/javascript' src='js/postear.js' /></script>");
echo '<script type="text/javascript">';
echo 'CargarPreviewVideo();';
echo "document.getElementById('masdescargas').style.display = 'none';";
echo '</script>';
} else {
	
print("<form class='nuevo-post' name='nuevojuego' id='nuevojuego' method='POST' align='center'  action='editar.php'>
			<div class='datbox-post' ><div class='legend-post'>Titulo</div><textarea class='renglon' onkeyup='CargarPreviewTitulo(this)' name='titulo' id='titulo'>".$consulta['Titulo']."</textarea><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 20)){ echo "Debe ingresar un titulo correcto, entre 5 y 70 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-post'>Imagen</div><input type='text' class='renglon' name='imagen' id='imagen' onkeyup='CargarPreviewImagen(this)' value=".$consulta['url_imagen']." <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 21)){ echo "Debe ingresar una url de una imagen.";} print("</div>
			<div class='datbox-post' ><div class='legend-descripcion'>Descripcion</div>Minimo 100 carateres<textarea class='texto' name='descripcion' onkeyup='CargarPreviewDescripcion(this)' id='descripcion'>".$consulta['descripcion']." </textarea><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 22)){ echo "Debe ingresar una descripcion de 100 a 3000 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-requirimientos-post'>Requirimientos Minimos</div>
				<input type='text' class='renglon' name='min_so' id='min_so' onkeyup='CargarPreviewMin_so(this)' value='".$consulta['min_so']."' <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 23)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_procesador' id='min_procesador' onkeyup='CargarPreviewMin_procesador(this)' value='".$consulta['min_procesador']."' <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 24)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_memoria' id='min_memoria' onkeyup='CargarPreviewMin_memoria(this)' value='".$consulta['min_memoria']."' <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 25)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_video' id='min_video' onkeyup='CargarPreviewMin_video(this)' value='".$consulta['min_video']."' <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 26)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_espacio' id='min_espacio' onkeyup='CargarPreviewMin_espacio(this)' value='".$consulta['min_espacio']."' <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 27)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_librerias' id='min_librerias' onkeyup='CargarPreviewMin_librerias(this)' value='".$consulta['min_librerias']."' <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 28)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_otros' id='min_otros' onkeyup='CargarPreviewMin_otros(this)' value='".$consulta['min_otros']."' <br>
			</div>
			<div class='datbox-post' ><div class='legend-requirimientos-post'>Requirimientos Recomendados</div>
				<input type='text' class='renglon' name='rec_so' id='rec_so' onkeyup='CargarPreviewRec_so(this)' value='".$consulta['rec_so']."' <br>
				<input type='text' class='renglon' name='rec_procesador' id='rec_procesador' onkeyup='CargarPreviewRec_procesador(this)' value='".$consulta['rec_procesador']."' <br>
				<input type='text' class='renglon' name='rec_memoria' id='rec_memoria' onkeyup='CargarPreviewRec_memoria(this)' value='".$consulta['rec_memoria']."' <br>
				<input type='text' class='renglon' name='rec_video' id='rec_video' onkeyup='CargarPreviewRec_video(this)' value='".$consulta['rec_video']."' <br>
				<input type='text' class='renglon' name='rec_espacio' id='rec_espacio' onkeyup='CargarPreviewRec_espacio(this)' value='".$consulta['rec_espacio']."' <br>
				<input type='text' class='renglon' name='rec_librerias' id='rec_libreria' onkeyup='CargarPreviewRec_librerias(this)' value='".$consulta['rec_librerias']."' <br>
				<input type='text' class='renglon' name='rec_otros' id='rec_otros' onkeyup='CargarPreviewRec_otros(this)' value='".$consulta['rec_otros']."' <br>
			</div>
			<div class='datbox-post' ><div class='legend-post'>Trailer</div>Añadir trailer como: http://www.youtube.com/v/IDVIDEO, por ejemplo http://www.youtube.com/watch?v=bkysjcs5vFU -> http://www.youtube.com/v/bkysjcs5vFU<input type='text' class='renglon' name='trailer' onkeyup='CargarPreviewTrailer(this)' id='trailer' value=".$consulta['trailer']."> <br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 29)){ echo "Debe ingresar un url a un video.";} print("</div>
			<div class='datbox-post'><div class='legend-descarga'>Descarga</div>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 30)) { echo "Debe ingresar al menos 3 enlaces completos";} print("
				<input type='text' class='enlace' name='enlace1' id='enlace1' onkeyup='CargarPreviewDescarga1(this,document.nuevojuego.descarga1)' value='$consulta[enlace1]'/><input type='text' class='descarga' name='descarga1' id='descarga1' onkeyup='CargarPreviewDescarga1(document.nuevojuego.enlace1,this)'  value='$consulta[urldescarga1]'/><br>
				<input type='text' class='enlace' name='enlace2' id='enlace2' onkeyup='CargarPreviewDescarga2(this,document.nuevojuego.descarga2)' value='$consulta[enlace2]'/><input type='text' class='descarga' name='descarga2' id='descarga2' onkeyup='CargarPreviewDescarga2(document.nuevojuego.enlace2,this)'  value='$consulta[urldescarga2]'/><br>
				<input type='text' class='enlace' name='enlace3' id='enlace3' onkeyup='CargarPreviewDescarga3(this,document.nuevojuego.descarga3)' value='$consulta[enlace3]'/><input type='text' class='descarga' name='descarga3' id='descarga3' onkeyup='CargarPreviewDescarga3(document.nuevojuego.enlace3,this)'  value='$consulta[urldescarga3]'/><br>
				<input type='text' class='enlace' name='enlace4' id='enlace4' onkeyup='CargarPreviewDescarga4(this,document.nuevojuego.descarga4)' value='$consulta[enlace4]'/><input type='text' class='descarga' name='descarga4' id='descarga4' onkeyup='CargarPreviewDescarga4(document.nuevojuego.enlace4,this)' value='$consulta[urldescarga4]'/><br>
				<input type='text' class='enlace' name='enlace5' id='enlace5' onkeyup='CargarPreviewDescarga5(this,document.nuevojuego.descarga5)' value='$consulta[enlace5]'/><input type='text' class='descarga' name='descarga5' id='descarga5' onkeyup='CargarPreviewDescarga5(document.nuevojuego.enlace5,this)' value='$consulta[urldescarga5]'/><br>
				<center><button class='boton-aside' type='button' onclick='masdescargas();'>Abrir/Cerrar mas descargas</button></center>
				<div id='masdescargas'>
				<input type='text' class='enlace' name='enlace6' id='enlace6' onkeyup='CargarPreviewDescarga6(this,document.nuevojuego.descarga6)' value='$consulta[enlace6]'/><input type='text' class='descarga' name='descarga6' id='descarga6' onkeyup='CargarPreviewDescarga6(document.nuevojuego.enlace6,this)' value='$consulta[urldescarga6]'/><br>
				<input type='text' class='enlace' name='enlace7' id='enlace7' onkeyup='CargarPreviewDescarga7(this,document.nuevojuego.descarga7)' value='$consulta[enlace7]'/><input type='text' class='descarga' name='descarga7' id='descarga7' onkeyup='CargarPreviewDescarga7(document.nuevojuego.enlace7,this)' value='$consulta[urldescarga7]'/><br>
				<input type='text' class='enlace' name='enlace8' id='enlace8' onkeyup='CargarPreviewDescarga8(this,document.nuevojuego.descarga8)' value='$consulta[enlace8]'/><input type='text' class='descarga' name='descarga8' id='descarga8' onkeyup='CargarPreviewDescarga8(document.nuevojuego.enlace8,this)' value='$consulta[urldescarga8]'/><br>
				<input type='text' class='enlace' name='enlace9' id='enlace9' onkeyup='CargarPreviewDescarga9(this,document.nuevojuego.descarga9)' value='$consulta[enlace9]'/><input type='text' class='descarga' name='descarga9' id='descarga9' onkeyup='CargarPreviewDescarga9(document.nuevojuego.enlace9,this)' value='$consulta[urldescarga9]'/><br>
				<input type='text' class='enlace' name='enlace10' id='enlace10' onkeyup='CargarPreviewDescarga10(this,document.nuevojuego.descarga10)' value='$consulta[enlace10]'/><input type='text' class='descarga' name='descarga10' id='descarga10' onkeyup='CargarPreviewDescarga10(document.nuevojuego.enlace10,this)' value='$consulta[urldescarga10]'/><br>
				<input type='text' class='enlace' name='enlace11' id='enlace11' onkeyup='CargarPreviewDescarga11(this,document.nuevojuego.descarga11)' value='$consulta[enlace11]'/><input type='text' class='descarga' name='descarga11' id='descarga11' onkeyup='CargarPreviewDescarga11(document.nuevojuego.enlace11,this)' value='$consulta[urldescarga11]'/><br>
				<input type='text' class='enlace' name='enlace12' id='enlace12' onkeyup='CargarPreviewDescarga12(this,document.nuevojuego.descarga12)' value='$consulta[enlace12]'/><input type='text' class='descarga' name='descarga12' id='descarga12' onkeyup='CargarPreviewDescarga12(document.nuevojuego.enlace12,this)' value='$consulta[urldescarga12]'/><br>
				<input type='text' class='enlace' name='enlace13' id='enlace13' onkeyup='CargarPreviewDescarga13(this,document.nuevojuego.descarga13)' value='$consulta[enlace13]'/><input type='text' class='descarga' name='descarga13' id='descarga13' onkeyup='CargarPreviewDescarga13(document.nuevojuego.enlace13,this)' value='$consulta[urldescarga13]'/><br>
				<input type='text' class='enlace' name='enlace14' id='enlace14' onkeyup='CargarPreviewDescarga14(this,document.nuevojuego.descarga14)' value='$consulta[enlace14]'/><input type='text' class='descarga' name='descarga14' id='descarga14' onkeyup='CargarPreviewDescarga14(document.nuevojuego.enlace14,this)' value='$consulta[urldescarga14]'/><br>
				<input type='text' class='enlace' name='enlace15' id='enlace15' onkeyup='CargarPreviewDescarga15(this,document.nuevojuego.descarga15)' value='$consulta[enlace15]'/><input type='text' class='descarga' name='descarga15' id='descarga15' onkeyup='CargarPreviewDescarga15(document.nuevojuego.enlace15,this)' value='$consulta[urldescarga15]'/><br>
				<input type='text' class='enlace' name='enlace16' id='enlace16' onkeyup='CargarPreviewDescarga16(this,document.nuevojuego.descarga16)' value='$consulta[enlace16]'/><input type='text' class='descarga' name='descarga16' id='descarga16' onkeyup='CargarPreviewDescarga16(document.nuevojuego.enlace16,this)' value='$consulta[urldescarga16]'/><br>
				<input type='text' class='enlace' name='enlace17' id='enlace17' onkeyup='CargarPreviewDescarga17(this,document.nuevojuego.descarga17)' value='$consulta[enlace17]'/><input type='text' class='descarga' name='descarga17' id='descarga17' onkeyup='CargarPreviewDescarga17(document.nuevojuego.enlace17,this)' value='$consulta[urldescarga17]'/><br>
				<input type='text' class='enlace' name='enlace18' id='enlace18' onkeyup='CargarPreviewDescarga18(this,document.nuevojuego.descarga18)' value='$consulta[enlace18]'/><input type='text' class='descarga' name='descarga18' id='descarga18' onkeyup='CargarPreviewDescarga18(document.nuevojuego.enlace18,this)' value='$consulta[urldescarga18]'/><br>
				<input type='text' class='enlace' name='enlace19' id='enlace19' onkeyup='CargarPreviewDescarga19(this,document.nuevojuego.descarga19)' value='$consulta[enlace19]'/><input type='text' class='descarga' name='descarga19' id='descarga19' onkeyup='CargarPreviewDescarga19(document.nuevojuego.enlace19,this)' value='$consulta[urldescarga19]'/><br>
				<input type='text' class='enlace' name='enlace20' id='enlace20' onkeyup='CargarPreviewDescarga20(this,document.nuevojuego.descarga20)' value='$consulta[enlace20]'/><input type='text' class='descarga' name='descarga20' id='descarga20' onkeyup='CargarPreviewDescarga20(document.nuevojuego.enlace20,this)' value='$consulta[urldescarga20]'/><br>
				<input type='text' class='enlace' name='enlace21' id='enlace21' onkeyup='CargarPreviewDescarga21(this,document.nuevojuego.descarga21)' value='$consulta[enlace21]'/><input type='text' class='descarga' name='descarga21' id='descarga21' onkeyup='CargarPreviewDescarga21(document.nuevojuego.enlace21,this)' value='$consulta[urldescarga21]'/><br>
				<input type='text' class='enlace' name='enlace22' id='enlace22' onkeyup='CargarPreviewDescarga22(this,document.nuevojuego.descarga22)' value='$consulta[enlace22]'/><input type='text' class='descarga' name='descarga22' id='descarga22' onkeyup='CargarPreviewDescarga22(document.nuevojuego.enlace22,this)' value='$consulta[urldescarga22]'/><br>
				<input type='text' class='enlace' name='enlace23' id='enlace23' onkeyup='CargarPreviewDescarga23(this,document.nuevojuego.descarga23)' value='$consulta[enlace23]'/><input type='text' class='descarga' name='descarga23' id='descarga23' onkeyup='CargarPreviewDescarga23(document.nuevojuego.enlace23,this)' value='$consulta[urldescarga23]'/><br>
				<input type='text' class='enlace' name='enlace24' id='enlace24' onkeyup='CargarPreviewDescarga24(this,document.nuevojuego.descarga24)' value='$consulta[enlace24]'/><input type='text' class='descarga' name='descarga24' id='descarga24' onkeyup='CargarPreviewDescarga24(document.nuevojuego.enlace24,this)' value='$consulta[urldescarga24]'/><br>
				<input type='text' class='enlace' name='enlace25' id='enlace25' onkeyup='CargarPreviewDescarga25(this,document.nuevojuego.descarga25)' value='$consulta[enlace25]'/><input type='text' class='descarga' name='descarga25' id='descarga25' onkeyup='CargarPreviewDescarga25(document.nuevojuego.enlace25,this)' value='$consulta[urldescarga25]'/><br>
				<input type='text' class='enlace' name='enlace26' id='enlace26' onkeyup='CargarPreviewDescarga26(this,document.nuevojuego.descarga26)' value='$consulta[enlace26]'/><input type='text' class='descarga' name='descarga26' id='descarga26' onkeyup='CargarPreviewDescarga26(document.nuevojuego.enlace26,this)' value='$consulta[urldescarga26]'/><br>
				<input type='text' class='enlace' name='enlace27' id='enlace27' onkeyup='CargarPreviewDescarga27(this,document.nuevojuego.descarga27)' value='$consulta[enlace27]'/><input type='text' class='descarga' name='descarga27' id='descarga27' onkeyup='CargarPreviewDescarga27(document.nuevojuego.enlace27,this)' value='$consulta[urldescarga27]'/><br>
				<input type='text' class='enlace' name='enlace28' id='enlace28' onkeyup='CargarPreviewDescarga28(this,document.nuevojuego.descarga28)' value='$consulta[enlace28]'/><input type='text' class='descarga' name='descarga28' id='descarga28' onkeyup='CargarPreviewDescarga28(document.nuevojuego.enlace28,this)' value='$consulta[urldescarga28]'/><br>
				<input type='text' class='enlace' name='enlace29' id='enlace29' onkeyup='CargarPreviewDescarga29(this,document.nuevojuego.descarga29)' value='$consulta[enlace29]'/><input type='text' class='descarga' name='descarga29' id='descarga29' onkeyup='CargarPreviewDescarga29(document.nuevojuego.enlace29,this)' value='$consulta[urldescarga29]'/><br>
				<input type='text' class='enlace' name='enlace30' id='enlace30' onkeyup='CargarPreviewDescarga30(this,document.nuevojuego.descarga30)' value='$consulta[enlace30]'/><input type='text' class='descarga' name='descarga30' id='descarga30' onkeyup='CargarPreviewDescarga30(document.nuevojuego.enlace30,this)' value='$consulta[urldescarga30]'/><br>
				<input type='text' class='enlace' name='enlace31' id='enlace31' onkeyup='CargarPreviewDescarga31(this,document.nuevojuego.descarga31)' value='$consulta[enlace31]'/><input type='text' class='descarga' name='descarga31' id='descarga31' onkeyup='CargarPreviewDescarga31(document.nuevojuego.enlace31,this)' value='$consulta[urldescarga31]'/><br>
				<input type='text' class='enlace' name='enlace32' id='enlace32' onkeyup='CargarPreviewDescarga32(this,document.nuevojuego.descarga32)' value='$consulta[enlace32]'/><input type='text' class='descarga' name='descarga32' id='descarga32' onkeyup='CargarPreviewDescarga32(document.nuevojuego.enlace32,this)' value='$consulta[urldescarga32]'/><br>
				<input type='text' class='enlace' name='enlace33' id='enlace33' onkeyup='CargarPreviewDescarga33(this,document.nuevojuego.descarga33)' value='$consulta[enlace33]'/><input type='text' class='descarga' name='descarga33' id='descarga33' onkeyup='CargarPreviewDescarga33(document.nuevojuego.enlace33,this)' value='$consulta[urldescarga33]'/><br>
				<input type='text' class='enlace' name='enlace34' id='enlace34' onkeyup='CargarPreviewDescarga34(this,document.nuevojuego.descarga34)' value='$consulta[enlace34]'/><input type='text' class='descarga' name='descarga34' id='descarga34' onkeyup='CargarPreviewDescarga34(document.nuevojuego.enlace34,this)' value='$consulta[urldescarga34]'/><br>
				<input type='text' class='enlace' name='enlace35' id='enlace35' onkeyup='CargarPreviewDescarga35(this,document.nuevojuego.descarga35)' value='$consulta[enlace35]'/><input type='text' class='descarga' name='descarga35' id='descarga35' onkeyup='CargarPreviewDescarga35(document.nuevojuego.enlace35,this)' value='$consulta[urldescarga35]'/><br>
				<input type='text' class='enlace' name='enlace36' id='enlace36' onkeyup='CargarPreviewDescarga36(this,document.nuevojuego.descarga36)' value='$consulta[enlace36]'/><input type='text' class='descarga' name='descarga36' id='descarga36' onkeyup='CargarPreviewDescarga36(document.nuevojuego.enlace36,this)' value='$consulta[urldescarga36]'/><br>
				<input type='text' class='enlace' name='enlace37' id='enlace37' onkeyup='CargarPreviewDescarga37(this,document.nuevojuego.descarga37)' value='$consulta[enlace37]'/><input type='text' class='descarga' name='descarga37' id='descarga37' onkeyup='CargarPreviewDescarga37(document.nuevojuego.enlace37,this)' value='$consulta[urldescarga37]'/><br>
				<input type='text' class='enlace' name='enlace38' id='enlace38' onkeyup='CargarPreviewDescarga38(this,document.nuevojuego.descarga38)' value='$consulta[enlace38]'/><input type='text' class='descarga' name='descarga38' id='descarga38' onkeyup='CargarPreviewDescarga38(document.nuevojuego.enlace38,this)' value='$consulta[urldescarga38]'/><br>
				<input type='text' class='enlace' name='enlace39' id='enlace39' onkeyup='CargarPreviewDescarga39(this,document.nuevojuego.descarga39)' value='$consulta[enlace39]'/><input type='text' class='descarga' name='descarga39' id='descarga39' onkeyup='CargarPreviewDescarga39(document.nuevojuego.enlace39,this)' value='$consulta[urldescarga39]'/><br>
				<input type='text' class='enlace' name='enlace40' id='enlace40' onkeyup='CargarPreviewDescarga40(this,document.nuevojuego.descarga40)' value='$consulta[enlace40]'/><input type='text' class='descarga' name='descarga40' id='descarga40' onkeyup='CargarPreviewDescarga40(document.nuevojuego.enlace40,this)' value='$consulta[urldescarga40]'/><br>
			</div>
			<input type='hidden' name='idpost' id='idpost' value=".$consulta['ID']."/>
			<input type='hidden' name='categoria' id='categoria' value=".$consulta['IDCategoria']."/>
		</form><br>
		<div class='prev'>Previsualizacion</div>
	<div>
		<div class='datbox-title'>
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'><span id='PreviewTitulo'></span></div>
				<div id='post-details'>Posteado En: $nombrecat por $usuario	</div>
			</div>
		</div>
		<div class='datbox' align='center'>
		<img class='imagen' id='PreviewImagen' >
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descripcion</div>
			<div class='descrip'><div class='texto-descripcion' id='PreviewDescripcion'></div></div>
		</div>
		<div class='datbox'>
			<div class='legend-requirimientos'>Requirimientos</div>
			<div class='descrip'><!--Description of the post-->
			Requirimientos minimos:
			<ul>
			<li><span id='PreviewMin_so'></span></li>
			<li><span id='PreviewMin_procesador'></span></li>
			<li><span id='PreviewMin_memoria'></span></li>
			<li><span id='PreviewMin_video'></span></li>
			<li><span id='PreviewMin_espacio'></span></li>
			<li><span id='PreviewMin_librerias'></span></li>
			<div id='VinetaMin_otros'><li><span id='PreviewMin_otros'></span></li></div>
			</ul>
				<div id='ListaRec'>
					Requirimientos recomendados:
					<ul>
					<div id='VinetaRec_so'><li><span id='PreviewRec_so'></span></li></div>
					<div id='VinetaRec_procesador'><li><span id='PreviewRec_procesador'></span></li></div>
					<div id='VinetaRec_memoria'><li><span id='PreviewRec_memoria'></span></li></div>
					<div id='VinetaRec_video'><li><span id='PreviewRec_video'></span></li></div>
					<div id='VinetaRec_espacio'><li><span id='PreviewRec_espacio'></span></li></div>
					<div id='VinetaRec_librerias'><li><span id='PreviewRec_librerias'></span></li></div>
					<div id='VinetaRec_otros'><li><span id='PreviewRec_otros'></span></li></div>
					<ul>
				</div>
			</div>	
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Trailer</div>
			<div class='descrip'>
			<center><image id='PreviewTrailer' /></embed></center></div>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Descarga</div>
			<div class='descrip' id = 'PreviewDescargas'>
			<center><div id = 'PreviewEnlace1'></div></center>  
			<center><div id = 'PreviewEnlace2'></div></center>  
			<center><div id = 'PreviewEnlace3'></div></center>  
			<center><div id = 'PreviewEnlace4'></div></center>  
			<center><div id = 'PreviewEnlace5'></div></center>  
			<center><div id = 'PreviewEnlace6'></div></center>  
			<center><div id = 'PreviewEnlace7'></div></center>  
			<center><div id = 'PreviewEnlace8'></div></center>  
			<center><div id = 'PreviewEnlace9'></div></center>  
			<center> <div id ='PreviewEnlace10'></div></center> 
			<center> <div id ='PreviewEnlace11'></div></center> 
			<center> <div id ='PreviewEnlace12'></div></center> 
			<center> <div id ='PreviewEnlace13'></div></center> 
			<center> <div id ='PreviewEnlace14'></div></center> 
			<center> <div id ='PreviewEnlace15'></div></center> 
			<center> <div id ='PreviewEnlace16'></div></center> 
			<center> <div id ='PreviewEnlace17'></div></center> 
			<center> <div id ='PreviewEnlace18'></div></center> 
			<center> <div id ='PreviewEnlace19'></div></center> 
			<center> <div id ='PreviewEnlace20'></div></center> 
			<center> <div id ='PreviewEnlace21'></div></center> 
			<center> <div id ='PreviewEnlace22'></div></center> 
			<center> <div id ='PreviewEnlace23'></div></center> 
			<center> <div id ='PreviewEnlace24'></div></center> 
			<center> <div id ='PreviewEnlace25'></div></center> 
			<center> <div id ='PreviewEnlace26'></div></center> 
			<center> <div id ='PreviewEnlace27'></div></center> 
			<center> <div id ='PreviewEnlace28'></div></center> 
			<center> <div id ='PreviewEnlace29'></div></center> 
			<center> <div id ='PreviewEnlace30'></div></center> 
			<center> <div id ='PreviewEnlace31'></div></center> 
			<center> <div id ='PreviewEnlace32'></div></center> 
			<center> <div id ='PreviewEnlace33'></div></center> 
			<center> <div id ='PreviewEnlace34'></div></center> 
			<center> <div id ='PreviewEnlace35'></div></center> 
			<center> <div id ='PreviewEnlace36'></div></center> 
			<center> <div id ='PreviewEnlace37'></div></center> 
			<center> <div id ='PreviewEnlace38'></div></center> 
			<center> <div id ='PreviewEnlace39'></div></center> 
			<center> <div id ='PreviewEnlace40'></div></center> 
			</div>
		</div>
	</div>
	<center>
	<button class='crear-post' onclick='submitjuego();'>Subir Post</button>
	</center>
	");
print("<script type='text/javascript' src='js/postear.js' /></script>");
echo '<script type="text/javascript">';
echo "CargarPreviewJuego();";
echo "document.getElementById('masdescargas').style.display = 'none';";
echo '</script>';
}
mysql_close($conn);
}
}


/*************************************** FUNCIONES CREAR POST ******************************************/

function crear_video($usuario,$categoria){
session_start();
$usuario = $_SESSION['username'];
$fecha = explode("-", date("Y-m-d"));
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
if ($categoria == 1){ $nombrecat = 'Peliculas';}else{$nombrecat = 'Series';}
print("<form class='nuevo-post' name='nuevovid' id='nuevovid' method='POST' align='center' action='postear.php'>
			<div class='datbox-post' ><div class='legend-post'>Titulo</div><input type='text'class='renglon' name='titulo' id='titulo' onkeyup='CargarPreviewTitulo(document.nuevovid.titulo)'  placeholder='...Titulo...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 11)) { echo "Debe ingresar un titulo correcto, entre 5 y 70 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-post'>Imagen</div><input type='text'class='renglon' name='imagen' id='imagen' onkeyup='CargarPreviewImagen(this)'  placeholder='...Url de la imagen...'/><br>"); if ((isset($_GET['error'])) AND (($_GET['error'] == 12) OR ($_GET['error'] == 16))){ echo "Debe ingresar una url de una imagen.";} print("</div>
			<div class='datbox-post' ><div class='legend-descarga'>Sinopsis</div>Minimo 100 caracteres<textarea class='texto' name='sinopsis' id='sinopsis' onkeyup='CargarPreviewSinopsis(this)' font-size:11px; placeholder='...Sinopsis (minimo 100 caracteres)...'></textarea><br>"); if ((isset($_GET['error'])) AND (($_GET['error'] == 13) OR ($_GET['error'] == 17))){ echo "Debe ingresar una sinopsis de 100 a 500 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-post'>Trailer</div>Añadir trailer como: http://www.youtube.com/v/IDVIDEO, por ejemplo http://www.youtube.com/watch?v=bkysjcs5vFU -> http://www.youtube.com/v/bkysjcs5vFU<input type='text' class='renglon' name='trailer' onkeyup='CargarPreviewTrailer(document.nuevovid.trailer)' id='trailer' placeholder='Atencion! Subir video como: http://www.youtube.com/v/ID_VIDEO '/><br>"); if ((isset($_GET['error'])) AND (($_GET['error'] == 14) OR ($_GET['error'] == 18))){ echo "Debe ingresar un url a un video.";} print("</div>
			<div class='datbox-post'><div class='legend-descarga'>Descarga</div>Minimo tres enlaces a descargas completos, recomendado poner uno a descarga directa, otro a torrent y el ultimo a crack o subtitulos."); if ((isset($_GET['error'])) AND ($_GET['error'] == 15)) { echo "Debe ingresar al menos 3 enlaces completos";} print("
				<input type='text' class='enlace' name='enlace1' id='enlace1' onkeyup='CargarPreviewDescarga1(this,document.nuevovid.descarga1)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga1' id='descarga1' onkeyup='CargarPreviewDescarga1(document.nuevovid.enlace1,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace2' id='enlace2' onkeyup='CargarPreviewDescarga2(this,document.nuevovid.descarga2)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga2' id='descarga2' onkeyup='CargarPreviewDescarga2(document.nuevovid.enlace2,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace3' id='enlace3' onkeyup='CargarPreviewDescarga3(this,document.nuevovid.descarga3)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga3' id='descarga3' onkeyup='CargarPreviewDescarga3(document.nuevovid.enlace3,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace4' id='enlace4' onkeyup='CargarPreviewDescarga4(this,document.nuevovid.descarga4)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga4' id='descarga4' onkeyup='CargarPreviewDescarga4(document.nuevovid.enlace4,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace5' id='enlace5' onkeyup='CargarPreviewDescarga5(this,document.nuevovid.descarga5)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga5' id='descarga5' onkeyup='CargarPreviewDescarga5(document.nuevovid.enlace5,this)' placeholder='...URL del enlace...'/><br>
				<center><button class='boton-aside' type='button' onclick='masdescargas();'>Abrir/Cerrar mas descargas</button></center>
				<div id='masdescargas'>
				<input type='text' class='enlace' name='enlace6' id='enlace6' onkeyup='CargarPreviewDescarga6(this,document.nuevovid.descarga6)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga6' id='descarga6' onkeyup='CargarPreviewDescarga6(document.nuevovid.enlace6,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace7' id='enlace7' onkeyup='CargarPreviewDescarga7(this,document.nuevovid.descarga7)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga7' id='descarga7' onkeyup='CargarPreviewDescarga7(document.nuevovid.enlace7,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace8' id='enlace8' onkeyup='CargarPreviewDescarga8(this,document.nuevovid.descarga8)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga8' id='descarga8' onkeyup='CargarPreviewDescarga8(document.nuevovid.enlace8,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace9' id='enlace9' onkeyup='CargarPreviewDescarga9(this,document.nuevovid.descarga9)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga9' id='descarga9' onkeyup='CargarPreviewDescarga9(document.nuevovid.enlace9,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace10' id='enlace10' onkeyup='CargarPreviewDescarga10(this,document.nuevovid.descarga10)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga10' id='descarga10' onkeyup='CargarPreviewDescarga10(document.nuevivid.enlace10,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace11' id='enlace11' onkeyup='CargarPreviewDescarga11(this,document.nuevovid.descarga11)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga11' id='descarga11' onkeyup='CargarPreviewDescarga11(document.nuevivid.enlace11,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace12' id='enlace12' onkeyup='CargarPreviewDescarga12(this,document.nuevovid.descarga12)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga12' id='descarga12' onkeyup='CargarPreviewDescarga12(document.nuevivid.enlace12,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace13' id='enlace13' onkeyup='CargarPreviewDescarga13(this,document.nuevovid.descarga13)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga13' id='descarga13' onkeyup='CargarPreviewDescarga13(document.nuevivid.enlace13,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace14' id='enlace14' onkeyup='CargarPreviewDescarga14(this,document.nuevovid.descarga14)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga14' id='descarga14' onkeyup='CargarPreviewDescarga14(document.nuevivid.enlace14,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace15' id='enlace15' onkeyup='CargarPreviewDescarga15(this,document.nuevovid.descarga15)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga15' id='descarga15' onkeyup='CargarPreviewDescarga15(document.nuevivid.enlace15,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace16' id='enlace16' onkeyup='CargarPreviewDescarga16(this,document.nuevovid.descarga16)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga16' id='descarga16' onkeyup='CargarPreviewDescarga16(document.nuevivid.enlace16,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace17' id='enlace17' onkeyup='CargarPreviewDescarga17(this,document.nuevovid.descarga17)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga17' id='descarga17' onkeyup='CargarPreviewDescarga17(document.nuevivid.enlace17,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace18' id='enlace18' onkeyup='CargarPreviewDescarga18(this,document.nuevovid.descarga18)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga18' id='descarga18' onkeyup='CargarPreviewDescarga18(document.nuevivid.enlace18,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace19' id='enlace19' onkeyup='CargarPreviewDescarga19(this,document.nuevovid.descarga19)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga19' id='descarga19' onkeyup='CargarPreviewDescarga19(document.nuevivid.enlace19,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace20' id='enlace20' onkeyup='CargarPreviewDescarga20(this,document.nuevovid.descarga20)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga20' id='descarga20' onkeyup='CargarPreviewDescarga20(document.nuevivid.enlace20,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace21' id='enlace21' onkeyup='CargarPreviewDescarga21(this,document.nuevovid.descarga21)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga21' id='descarga21' onkeyup='CargarPreviewDescarga21(document.nuevivid.enlace21,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace22' id='enlace22' onkeyup='CargarPreviewDescarga22(this,document.nuevovid.descarga22)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga22' id='descarga22' onkeyup='CargarPreviewDescarga22(document.nuevivid.enlace22,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace23' id='enlace23' onkeyup='CargarPreviewDescarga23(this,document.nuevovid.descarga23)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga23' id='descarga23' onkeyup='CargarPreviewDescarga23(document.nuevivid.enlace23,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace24' id='enlace24' onkeyup='CargarPreviewDescarga24(this,document.nuevovid.descarga24)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga24' id='descarga24' onkeyup='CargarPreviewDescarga24(document.nuevivid.enlace24,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace25' id='enlace25' onkeyup='CargarPreviewDescarga25(this,document.nuevovid.descarga25)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga25' id='descarga25' onkeyup='CargarPreviewDescarga25(document.nuevivid.enlace25,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace26' id='enlace26' onkeyup='CargarPreviewDescarga26(this,document.nuevovid.descarga26)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga26' id='descarga26' onkeyup='CargarPreviewDescarga26(document.nuevivid.enlace26,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace27' id='enlace27' onkeyup='CargarPreviewDescarga27(this,document.nuevovid.descarga27)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga27' id='descarga27' onkeyup='CargarPreviewDescarga27(document.nuevivid.enlace27,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace28' id='enlace28' onkeyup='CargarPreviewDescarga28(this,document.nuevovid.descarga28)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga28' id='descarga28' onkeyup='CargarPreviewDescarga28(document.nuevivid.enlace28,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace29' id='enlace29' onkeyup='CargarPreviewDescarga29(this,document.nuevovid.descarga29)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga29' id='descarga29' onkeyup='CargarPreviewDescarga29(document.nuevivid.enlace29,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace30' id='enlace30' onkeyup='CargarPreviewDescarga30(this,document.nuevovid.descarga30)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga30' id='descarga30' onkeyup='CargarPreviewDescarga30(document.nuevivid.enlace30,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace31' id='enlace31' onkeyup='CargarPreviewDescarga31(this,document.nuevovid.descarga31)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga31' id='descarga31' onkeyup='CargarPreviewDescarga31(document.nuevivid.enlace31,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace32' id='enlace32' onkeyup='CargarPreviewDescarga32(this,document.nuevovid.descarga32)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga32' id='descarga32' onkeyup='CargarPreviewDescarga32(document.nuevivid.enlace32,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace33' id='enlace33' onkeyup='CargarPreviewDescarga33(this,document.nuevovid.descarga33)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga33' id='descarga33' onkeyup='CargarPreviewDescarga33(document.nuevivid.enlace33,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace34' id='enlace34' onkeyup='CargarPreviewDescarga34(this,document.nuevovid.descarga34)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga34' id='descarga34' onkeyup='CargarPreviewDescarga34(document.nuevivid.enlace34,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace35' id='enlace35' onkeyup='CargarPreviewDescarga35(this,document.nuevovid.descarga35)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga35' id='descarga35' onkeyup='CargarPreviewDescarga35(document.nuevivid.enlace35,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace36' id='enlace36' onkeyup='CargarPreviewDescarga36(this,document.nuevovid.descarga36)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga36' id='descarga36' onkeyup='CargarPreviewDescarga36(document.nuevivid.enlace36,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace37' id='enlace37' onkeyup='CargarPreviewDescarga37(this,document.nuevovid.descarga37)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga37' id='descarga37' onkeyup='CargarPreviewDescarga37(document.nuevivid.enlace37,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace38' id='enlace38' onkeyup='CargarPreviewDescarga38(this,document.nuevovid.descarga38)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga38' id='descarga38' onkeyup='CargarPreviewDescarga38(document.nuevivid.enlace38,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace39' id='enlace39' onkeyup='CargarPreviewDescarga39(this,document.nuevovid.descarga39)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga39' id='descarga39' onkeyup='CargarPreviewDescarga39(document.nuevivid.enlace39,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace40' id='enlace40' onkeyup='CargarPreviewDescarga40(this,document.nuevovid.descarga40)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga40' id='descarga40' onkeyup='CargarPreviewDescarga40(document.nuevivid.enlace40,this)' placeholder='...URL del enlace...'/><br>
				</div>
			</div>
			<input type='hidden' name='username' id='username' value='$usuario'/>
			<input type='hidden' name='categoria' id='categoria' value='$categoria'/>
		</form>
		<br>
	<div class='prev'>Previsualizacion</div>
	<div>
		<div class='datbox-title'>
			<div class='title'>
				<div id='dateblock'>$mes<div id='day'>$dia</div></div>
				<div id='post-title'><span id='PreviewTitulo'></span></div>
				<div id='post-details'>Posteado En: $nombrecat por $usuario	</div>
			</div>
		</div>
		<div class='datbox' align='center'>
		<img class='imagen' id='PreviewImagen' >
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Sinopsis</div>
			<div class='descrip'><div class='texto-descripcion' id='PreviewSinopsis'></div></div>
		</div>
		<div class='datbox'>
			<div class='legend-descripcion'> Trailer</div>
			<div class='descrip'>
			<center><image id='PreviewTrailer' /></embed></center></div>
		</div>
		<div class='datbox-descargas'>
			<div class='legend-descripcion'> Descarga</div>
			<div class='descrip' id = 'PreviewDescargas'>
			<center><div id = 'PreviewEnlace1'></div></center>  
			<center><div id = 'PreviewEnlace2'></div></center>  
			<center><div id = 'PreviewEnlace3'></div></center>  
			<center><div id = 'PreviewEnlace4'></div></center>  
			<center><div id = 'PreviewEnlace5'></div></center>  
			<center><div id = 'PreviewEnlace6'></div></center>  
			<center><div id = 'PreviewEnlace7'></div></center>  
			<center><div id = 'PreviewEnlace8'></div></center>  
			<center><div id = 'PreviewEnlace9'></div></center>  
			<center> <div id ='PreviewEnlace10'></div></center> 
			<center> <div id ='PreviewEnlace11'></div></center> 
			<center> <div id ='PreviewEnlace12'></div></center> 
			<center> <div id ='PreviewEnlace13'></div></center> 
			<center> <div id ='PreviewEnlace14'></div></center> 
			<center> <div id ='PreviewEnlace15'></div></center> 
			<center> <div id ='PreviewEnlace16'></div></center> 
			<center> <div id ='PreviewEnlace17'></div></center> 
			<center> <div id ='PreviewEnlace18'></div></center> 
			<center> <div id ='PreviewEnlace19'></div></center> 
			<center> <div id ='PreviewEnlace20'></div></center> 
			<center> <div id ='PreviewEnlace21'></div></center> 
			<center> <div id ='PreviewEnlace22'></div></center> 
			<center> <div id ='PreviewEnlace23'></div></center> 
			<center> <div id ='PreviewEnlace24'></div></center> 
			<center> <div id ='PreviewEnlace25'></div></center> 
			<center> <div id ='PreviewEnlace26'></div></center> 
			<center> <div id ='PreviewEnlace27'></div></center> 
			<center> <div id ='PreviewEnlace28'></div></center> 
			<center> <div id ='PreviewEnlace29'></div></center> 
			<center> <div id ='PreviewEnlace30'></div></center> 
			<center> <div id ='PreviewEnlace31'></div></center> 
			<center> <div id ='PreviewEnlace32'></div></center> 
			<center> <div id ='PreviewEnlace33'></div></center> 
			<center> <div id ='PreviewEnlace34'></div></center> 
			<center> <div id ='PreviewEnlace35'></div></center> 
			<center> <div id ='PreviewEnlace36'></div></center> 
			<center> <div id ='PreviewEnlace37'></div></center> 
			<center> <div id ='PreviewEnlace38'></div></center> 
			<center> <div id ='PreviewEnlace39'></div></center> 
			<center> <div id ='PreviewEnlace40'></div></center> 
			</div>
		</div>
	</div>
	<center>
	<div id='aviso-accion' class='error'></div>
	<button class='crear-post' onclick='submitvideo();'>Subir Post</button>
	</center>");
echo '<script type="text/javascript">';
echo "document.getElementById('masdescargas').style.display = 'none';";
echo '</script>';
}

function crear_juego($usuario,$categoria){
session_start();
$usuario = $_SESSION['username'];
$fecha = explode("-", date("Y-m-d"));
$mes = extmes($fecha[1]);
$dia = explode(" ", $fecha[2]);
$dia = $dia[0];
print("<form class='nuevo-post' name='nuevojuego' id='nuevojuego' method='POST' align='center'  action='postear.php'>
			<div class='datbox-post' ><div class='legend-post'>Titulo</div><input type='text' class='renglon' name='titulo' id='titulo' onkeyup='CargarPreviewTitulo(document.nuevojuego.titulo)' placeholder='...Titulo...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 20)){ echo "Debe ingresar un titulo correcto, entre 5 y 70 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-post'>Imagen</div><input type='text' class='renglon' name='imagen' id='imagen' onkeyup='CargarPreviewImagen(document.nuevojuego.imagen)' placeholder='...Url de la imagen...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 21)){ echo "Debe ingresar una url de una imagen.";} print("</div>
			<div class='datbox-post' ><div class='legend-descripcion'>Descripcion</div>Minimo 100 caracteres<textarea class='texto' name='descripcion' onkeyup='CargarPreviewDescripcion(document.nuevojuego.descripcion)' id='descripcion' placeholder='...Descripcion (minimo 100 caracteres)...'></textarea><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 22)){ echo "Debe ingresar una descripcion de 100 a 3000 caracteres.";} print("</div>
			<div class='datbox-post' ><div class='legend-requirimientos-post'>Requirimientos Minimos</div>Completar todos(ultimo opcional)
				<input type='text' class='renglon' name='min_so' id='min_so' onkeyup='CargarPreviewMin_so(document.nuevojuego.min_so)' placeholder='...Sistema operativo...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 23)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_procesador' id='min_procesador' onkeyup='CargarPreviewMin_procesador(document.nuevojuego.min_procesador)' placeholder='...Procesador...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 24)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_memoria' id='min_memoria' onkeyup='CargarPreviewMin_memoria(document.nuevojuego.min_memoria)' placeholder='...Memoria RAM...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 25)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_video' id='min_video' onkeyup='CargarPreviewMin_video(document.nuevojuego.min_video)' placeholder='...Placa de video...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 26)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_espacio' id='min_espacio' onkeyup='CargarPreviewMin_espacio(document.nuevojuego.min_espacio)' placeholder='...Espacio en disco...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 27)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_librerias' id='min_librerias' onkeyup='CargarPreviewMin_librerias(document.nuevojuego.min_librerias)'placeholder='...Librerias o APIS ( Directx, OpenGl,etc)...'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 28)){ echo "Debe ingresar un requirimiento minimo entre 5 y 100 caracteres.";} print("
				<input type='text' class='renglon' name='min_otros' id='min_otros' onkeyup='CargarPreviewMin_otros(document.nuevojuego.min_otros)' placeholder='...Otro requirimiento...'/><br>
			</div>
			<div class='datbox-post' ><div class='legend-requirimientos-post'>Requirimientos Recomendados</div>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_so(document.nuevojuego.rec_so)' name='rec_so' id='rec_so' placeholder='...Sistema operativo...'/><br>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_procesador(document.nuevojuego.rec_procesador)' name='rec_procesador' id='rec_procesador' placeholder='...Procesador...'/><br>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_memoria(document.nuevojuego.rec_memoria)' name='rec_memoria' id='rec_memoria' placeholder='...Memoria RAM...'/><br>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_video(document.nuevojuego.rec_video)' name='rec_video' id='rec_video' placeholder='...Placa de video...'/><br>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_espacio(document.nuevojuego.rec_espacio)' name='rec_espacio' id='rec_espacio' placeholder='...Espacio en disco...'/><br>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_librerias(document.nuevojuego.rec_librerias)' name='rec_librerias' id='rec_libreria' placeholder='...Librerias o APIS ( Directx, OpenGl,etc)...'/><br>
				<input type='text' class='renglon' onkeyup='CargarPreviewRec_otros(document.nuevojuego.rec_otros)' name='rec_otros' id='rec_otros' placeholder='...Otro requirimiento...'/><br>
			</div>
			<div class='datbox-post' ><div class='legend-post'>Trailer</div>Añadir trailer como: http://www.youtube.com/v/IDVIDEO, por ejemplo http://www.youtube.com/watch?v=bkysjcs5vFU -> http://www.youtube.com/v/bkysjcs5vFU<input type='text' class='renglon' name='trailer' onkeyup='CargarPreviewTrailer(this)' id='trailer' placeholder='Atencion! Subir video como: http://www.youtube.com/v/ID_VIDEO'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 29)){ echo "Debe ingresar un url a un video.";} print("</div>
			<div class='datbox-post'><div class='legend-descarga'>Descarga</div>Minimo tres enlaces a descargas completos, recomendado poner uno a descarga directa, otro a torrent y el ultimo a crack o subtitulos."); if ((isset($_GET['error'])) AND ($_GET['error'] == 30)) { echo "Debe ingresar al menos 3 enlaces completos";} print("
				<input type='text' class='enlace' name='enlace1' id='enlace1' onkeyup='CargarPreviewDescarga1(this,document.nuevojuego.descarga1)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga1' id='descarga1' onkeyup='CargarPreviewDescarga1(document.nuevojuego.enlace1,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace2' id='enlace2' onkeyup='CargarPreviewDescarga2(this,document.nuevojuego.descarga2)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga2' id='descarga2' onkeyup='CargarPreviewDescarga2(document.nuevojuego.enlace2,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace3' id='enlace3' onkeyup='CargarPreviewDescarga3(this,document.nuevojuego.descarga3)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga3' id='descarga3' onkeyup='CargarPreviewDescarga3(document.nuevojuego.enlace3,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace4' id='enlace4' onkeyup='CargarPreviewDescarga4(this,document.nuevojuego.descarga4)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga4' id='descarga4' onkeyup='CargarPreviewDescarga4(document.nuevojuego.enlace4,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace5' id='enlace5' onkeyup='CargarPreviewDescarga5(this,document.nuevojuego.descarga5)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga5' id='descarga5' onkeyup='CargarPreviewDescarga5(document.nuevojuego.enlace5,this)' placeholder='...URL del enlace...'/><br>
				<center><button class='boton-aside' type='button' onclick='masdescargas();'>Abrir/Cerrar mas descargas</button></center>
				<div id='masdescargas'>
				<input type='text' class='enlace' name='enlace6' id='enlace6' onkeyup='CargarPreviewDescarga6(this,document.nuevojuego.descarga6)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga6' id='descarga6' onkeyup='CargarPreviewDescarga6(document.nuevojuego.enlace6,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace7' id='enlace7' onkeyup='CargarPreviewDescarga7(this,document.nuevojuego.descarga7)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga7' id='descarga7' onkeyup='CargarPreviewDescarga7(document.nuevojuego.enlace7,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace8' id='enlace8' onkeyup='CargarPreviewDescarga8(this,document.nuevojuego.descarga8)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga8' id='descarga8' onkeyup='CargarPreviewDescarga8(document.nuevojuego.enlace8,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace9' id='enlace9' onkeyup='CargarPreviewDescarga9(this,document.nuevojuego.descarga9)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga9' id='descarga9' onkeyup='CargarPreviewDescarga9(document.nuevojuego.enlace9,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace10' id='enlace10' onkeyup='CargarPreviewDescarga10(this,document.nuevojuego.descarga10)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga10' id='descarga10' onkeyup='CargarPreviewDescarga10(document.nuevojuego.enlace10,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace11' id='enlace11' onkeyup='CargarPreviewDescarga11(this,document.nuevojuego.descarga11)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga11' id='descarga11' onkeyup='CargarPreviewDescarga11(document.nuevojuego.enlace11,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace12' id='enlace12' onkeyup='CargarPreviewDescarga12(this,document.nuevojuego.descarga12)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga12' id='descarga12' onkeyup='CargarPreviewDescarga12(document.nuevojuego.enlace12,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace13' id='enlace13' onkeyup='CargarPreviewDescarga13(this,document.nuevojuego.descarga13)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga13' id='descarga13' onkeyup='CargarPreviewDescarga13(document.nuevojuego.enlace13,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace14' id='enlace14' onkeyup='CargarPreviewDescarga14(this,document.nuevojuego.descarga14)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga14' id='descarga14' onkeyup='CargarPreviewDescarga14(document.nuevojuego.enlace14,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace15' id='enlace15' onkeyup='CargarPreviewDescarga15(this,document.nuevojuego.descarga15)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga15' id='descarga15' onkeyup='CargarPreviewDescarga15(document.nuevojuego.enlace15,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace16' id='enlace16' onkeyup='CargarPreviewDescarga16(this,document.nuevojuego.descarga16)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga16' id='descarga16' onkeyup='CargarPreviewDescarga16(document.nuevojuego.enlace16,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace17' id='enlace17' onkeyup='CargarPreviewDescarga17(this,document.nuevojuego.descarga17)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga17' id='descarga17' onkeyup='CargarPreviewDescarga17(document.nuevojuego.enlace17,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace18' id='enlace18' onkeyup='CargarPreviewDescarga18(this,document.nuevojuego.descarga18)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga18' id='descarga18' onkeyup='CargarPreviewDescarga18(document.nuevojuego.enlace18,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace19' id='enlace19' onkeyup='CargarPreviewDescarga19(this,document.nuevojuego.descarga19)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga19' id='descarga19' onkeyup='CargarPreviewDescarga19(document.nuevojuego.enlace19,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace20' id='enlace20' onkeyup='CargarPreviewDescarga20(this,document.nuevojuego.descarga20)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga20' id='descarga20' onkeyup='CargarPreviewDescarga20(document.nuevojuego.enlace20,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace21' id='enlace21' onkeyup='CargarPreviewDescarga21(this,document.nuevojuego.descarga21)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga21' id='descarga21' onkeyup='CargarPreviewDescarga21(document.nuevojuego.enlace21,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace22' id='enlace22' onkeyup='CargarPreviewDescarga22(this,document.nuevojuego.descarga22)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga22' id='descarga22' onkeyup='CargarPreviewDescarga22(document.nuevojuego.enlace22,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace23' id='enlace23' onkeyup='CargarPreviewDescarga23(this,document.nuevojuego.descarga23)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga23' id='descarga23' onkeyup='CargarPreviewDescarga23(document.nuevojuego.enlace23,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace24' id='enlace24' onkeyup='CargarPreviewDescarga24(this,document.nuevojuego.descarga24)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga24' id='descarga24' onkeyup='CargarPreviewDescarga24(document.nuevojuego.enlace24,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace25' id='enlace25' onkeyup='CargarPreviewDescarga25(this,document.nuevojuego.descarga25)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga25' id='descarga25' onkeyup='CargarPreviewDescarga25(document.nuevojuego.enlace25,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace26' id='enlace26' onkeyup='CargarPreviewDescarga26(this,document.nuevojuego.descarga26)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga26' id='descarga26' onkeyup='CargarPreviewDescarga26(document.nuevojuego.enlace26,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace27' id='enlace27' onkeyup='CargarPreviewDescarga27(this,document.nuevojuego.descarga27)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga27' id='descarga27' onkeyup='CargarPreviewDescarga27(document.nuevojuego.enlace27,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace28' id='enlace28' onkeyup='CargarPreviewDescarga28(this,document.nuevojuego.descarga28)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga28' id='descarga28' onkeyup='CargarPreviewDescarga28(document.nuevojuego.enlace28,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace29' id='enlace29' onkeyup='CargarPreviewDescarga29(this,document.nuevojuego.descarga29)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga29' id='descarga29' onkeyup='CargarPreviewDescarga29(document.nuevojuego.enlace29,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace30' id='enlace30' onkeyup='CargarPreviewDescarga30(this,document.nuevojuego.descarga30)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga30' id='descarga30' onkeyup='CargarPreviewDescarga30(document.nuevojuego.enlace30,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace31' id='enlace31' onkeyup='CargarPreviewDescarga31(this,document.nuevojuego.descarga31)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga31' id='descarga31' onkeyup='CargarPreviewDescarga31(document.nuevojuego.enlace31,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace32' id='enlace32' onkeyup='CargarPreviewDescarga32(this,document.nuevojuego.descarga32)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga32' id='descarga32' onkeyup='CargarPreviewDescarga32(document.nuevojuego.enlace32,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace33' id='enlace33' onkeyup='CargarPreviewDescarga33(this,document.nuevojuego.descarga33)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga33' id='descarga33' onkeyup='CargarPreviewDescarga33(document.nuevojuego.enlace33,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace34' id='enlace34' onkeyup='CargarPreviewDescarga34(this,document.nuevojuego.descarga34)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga34' id='descarga34' onkeyup='CargarPreviewDescarga34(document.nuevojuego.enlace34,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace35' id='enlace35' onkeyup='CargarPreviewDescarga35(this,document.nuevojuego.descarga35)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga35' id='descarga35' onkeyup='CargarPreviewDescarga35(document.nuevojuego.enlace35,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace36' id='enlace36' onkeyup='CargarPreviewDescarga36(this,document.nuevojuego.descarga36)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga36' id='descarga36' onkeyup='CargarPreviewDescarga36(document.nuevojuego.enlace36,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace37' id='enlace37' onkeyup='CargarPreviewDescarga37(this,document.nuevojuego.descarga37)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga37' id='descarga37' onkeyup='CargarPreviewDescarga37(document.nuevojuego.enlace37,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace38' id='enlace38' onkeyup='CargarPreviewDescarga38(this,document.nuevojuego.descarga38)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga38' id='descarga38' onkeyup='CargarPreviewDescarga38(document.nuevojuego.enlace38,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace39' id='enlace39' onkeyup='CargarPreviewDescarga39(this,document.nuevojuego.descarga39)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga39' id='descarga39' onkeyup='CargarPreviewDescarga39(document.nuevojuego.enlace39,this)' placeholder='...URL del enlace...'/><br>
				<input type='text' class='enlace' name='enlace40' id='enlace40' onkeyup='CargarPreviewDescarga40(this,document.nuevojuego.descarga40)' placeholder='...Nombre de enlace...'/><input type='text' class='descarga' name='descarga40' id='descarga40' onkeyup='CargarPreviewDescarga40(document.nuevojuego.enlace40,this)' placeholder='...URL del enlace...'/><br>
				</div>
			</div>
			<input type='hidden' name='username' id='username' value='$usuario'/>
			<input type='hidden' name='categoria' id='categoria' value='$categoria'/>
		</form>
		<br>
	<div class='prev'>Previsualizacion</div>
		<div>
			<div class='datbox-title'>
				<div class='title'>
					<div id='dateblock'>$mes<div id='day'>$dia</div></div>
					<div id='post-title'><span id='PreviewTitulo'></span></div>
					<div id='post-details'>Posteado En: $nombrecat por $usuario	</div>
				</div>
			</div>
			<div class='datbox' align='center'>
			<img class='imagen' id='PreviewImagen' >
			</div>
			<div class='datbox'>
				<div class='legend-descripcion'> Descripcion</div>
				<div class='descrip'><div class='texto-descripcion' id='PreviewDescripcion'></div></div>
			</div>
				<div class='datbox'>
				<div class='legend-requirimientos'>Requirimientos</div>
				<div class='descrip'><!--Description of the post-->
				Requirimientos minimos:
				<ul>
				<li><span id='PreviewMin_so'></span></li>
				<li><span id='PreviewMin_procesador'></span></li>
				<li><span id='PreviewMin_memoria'></span></li>
				<li><span id='PreviewMin_video'></span></li>
				<li><span id='PreviewMin_espacio'></span></li>
				<li><span id='PreviewMin_librerias'></span></li>
				<div id='VinetaMin_otros'><li><span id='PreviewMin_otros'></span></li></div>
				</ul>
				<div id='ListaRec'>
					Requirimientos recomendados:
					<ul>
					<div id='VinetaRec_so'><li><span id='PreviewRec_so'></span></li></div>
					<div id='VinetaRec_procesador'><li><span id='PreviewRec_procesador'></span></li></div>
					<div id='VinetaRec_memoria'><li><span id='PreviewRec_memoria'></span></li></div>
					<div id='VinetaRec_video'><li><span id='PreviewRec_video'></span></li></div>
					<div id='VinetaRec_espacio'><li><span id='PreviewRec_espacio'></span></li></div>
					<div id='VinetaRec_librerias'><li><span id='PreviewRec_librerias'></span></li></div>
					<div id='VinetaRec_otros'><li><span id='PreviewRec_otros'></span></li></div>
					<ul>
				</div>
				</div>	
			</div>
			<div class='datbox'>
				<div class='legend-descripcion'> Trailer</div>
				<div class='descrip'>
				<center><image id='PreviewTrailer' /></embed></center></div>
			</div>
			<div class='datbox-descargas'>
				<div class='legend-descripcion'> Descarga</div>
				<div class='descrip' id = 'PreviewDescargas'>
				<center><div id = 'PreviewEnlace1'></div></center>  
				<center><div id = 'PreviewEnlace2'></div></center>  
				<center><div id = 'PreviewEnlace3'></div></center>  
				<center><div id = 'PreviewEnlace4'></div></center>  
				<center><div id = 'PreviewEnlace5'></div></center>  
				<center><div id = 'PreviewEnlace6'></div></center>  
				<center><div id = 'PreviewEnlace7'></div></center>  
				<center><div id = 'PreviewEnlace8'></div></center>  
				<center><div id = 'PreviewEnlace9'></div></center>  
				<center> <div id ='PreviewEnlace10'></div></center> 
				<center> <div id ='PreviewEnlace11'></div></center> 
				<center> <div id ='PreviewEnlace12'></div></center> 
				<center> <div id ='PreviewEnlace13'></div></center> 
				<center> <div id ='PreviewEnlace14'></div></center> 
				<center> <div id ='PreviewEnlace15'></div></center> 
				<center> <div id ='PreviewEnlace16'></div></center> 
				<center> <div id ='PreviewEnlace17'></div></center> 
				<center> <div id ='PreviewEnlace18'></div></center> 
				<center> <div id ='PreviewEnlace19'></div></center> 
				<center> <div id ='PreviewEnlace20'></div></center> 
				<center> <div id ='PreviewEnlace21'></div></center> 
				<center> <div id ='PreviewEnlace22'></div></center> 
				<center> <div id ='PreviewEnlace23'></div></center> 
				<center> <div id ='PreviewEnlace24'></div></center> 
				<center> <div id ='PreviewEnlace25'></div></center> 
				<center> <div id ='PreviewEnlace26'></div></center> 
				<center> <div id ='PreviewEnlace27'></div></center> 
				<center> <div id ='PreviewEnlace28'></div></center> 
				<center> <div id ='PreviewEnlace29'></div></center> 
				<center> <div id ='PreviewEnlace30'></div></center> 
				<center> <div id ='PreviewEnlace31'></div></center> 
				<center> <div id ='PreviewEnlace32'></div></center> 
				<center> <div id ='PreviewEnlace33'></div></center> 
				<center> <div id ='PreviewEnlace34'></div></center> 
				<center> <div id ='PreviewEnlace35'></div></center> 
				<center> <div id ='PreviewEnlace36'></div></center> 
				<center> <div id ='PreviewEnlace37'></div></center> 
				<center> <div id ='PreviewEnlace38'></div></center> 
				<center> <div id ='PreviewEnlace39'></div></center> 
				<center> <div id ='PreviewEnlace40'></div></center> 
				</div>
			</div>
	</div>
	<center>
	<button onclick='submitjuego();' class='crear-post'>Subir Post</button>
	</center>");
echo '<script type="text/javascript">';
echo 'CargarPrimeraPreviewRec();';
echo "document.getElementById('masdescargas').style.display = 'none';";
echo '</script>';
}

/*************************************** FUNCIONES VARIAS ********************************************/

function comprobar_cadena($cadena){ 
   //compruebo que el tamaño del string sea válido. 
   if (strlen($cadena)<5 || strlen($cadena)>20){ 
      echo $cadena . " no es válido<br>"; 
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
   for ($i=0; $i<strlen($cadena); $i++){ 
      if (strpos($permitidos, substr($cadena,$i,1))===false){ 
         return false; 
      } 
   }  
   return true; 
} 

function extmes($mes){
	switch ($mes) {
		case '01':
			return('Enero');
			break;
		case '02':
			return('Febrero');
			break;
		case '03':
			return('Marzo');
			break;
		case '04':
			return('Abril');
			break;
		case '05':
			return('Mayo');
			break;
		case '06':
			return('Junio');
			break;
		case '07':
			return('Julio');
			break;
		case '08':
			return('Agosto');
			break;
		case '09':
			return('Septiembre');
			break;
		case '10':
			return('Octubre');
			break;
		case '11':
			return('Novienbre');
			break;
		case '12':
			return('Diciembre');
			break;

	}
}

}
?>