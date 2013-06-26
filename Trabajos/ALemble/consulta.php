<?php
//Consulta - Parametros Posicionales
$sql = "SELECT p.ID, p.IDCategoria, c.nombre, p.IDUsuario, u.alias, p.Fecha, p.Titulo, p.url_imagen, p.descripcion, p.requirimientos, p.descarga, p.puntuacion
		FROM posts p
		JOIN usuarios u ON ( u.ID = p.IDUsuario ) 
		JOIN categorias c ON ( c.ID = p.IDCategoria ) 
		ORDER BY Fecha
		LIMIT 5";
$q = $conn->query($sql);
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

//while($r = $q->fetch()){
//  print ("
// <tbody>
// <tr>
//	<td>$r[nro_fila]</td>
//	<td>$r[ID]</td>
//	<td>$r[IDCategoria]</td>
//	<td>$r[IDUsuario]</td>
//	<td>$r[Fecha]</td>
//	<td>$r[Titulo]</td>
//	<td>$r[url_imagen]</td>
//	<td>$r[descripcion]</td>
//	<td>$r[requirimientos]</td>
//	<td>$r[descarga]</td>
//	<td>$r[puntuacion]</td>
// </tr>
//  </tbody>
//  ");

?>