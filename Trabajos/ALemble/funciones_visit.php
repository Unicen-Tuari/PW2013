<?php

/**************************** FUNCIONES CONSULTAS PUBLICAS **********************************/

function consulta_principal($pagina){

/* Consulta realizada al ingresar a la pagina, muestra los 5 primeros post por fecha*/

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
			<button class='go-post'><a href='index.php?idpost=$consulta[ID]&type=P'>Ir al post</a></button>
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
			<button class='go-post'><a href='index.php?idpost=$consulta[ID]&type=P'>Ir al post</a></button>
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

/* Consulta los 5 primeros post ordenados por fecha de determinada categoria*/

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
");} else{
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
");} else{
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

/* Muestra los post de un determinado mes*/

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
				<div id='dateblock'>$nom_mes<div id='day'>$dia</div></div>
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
");} else{
	$consulta['descripcion'] = nl2br($consulta['descripcion'], false);
	print ("
	<div class='post'>
		<div class='datbox-title'><!--Box with date and title-->
			<div class='title'>
				<div id='dateblock'>$nom_mes<div id='day'>$dia</div></div>
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

function consulta_unica($IDPost){

/* Muestra un post solo, indicado por el id*/

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
if ($consulta['valido'] == 1) {
if (($consulta['IDCategoria'] == 1) || ($consulta['IDCategoria'] == 2)) {
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
			print("</div>
		</div>
	</div>
");
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
");
}
}

mysql_close($conn);

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

?>