<html>

<?php

$host   = "localhost";
$db = "webcca";
$user = "root";
$pass = "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
  die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

//Consulta
$sql = "SELECT ubicacion
from archivo
where ('$_POST[Categoria]'= cat_nom) and ('$_POST[Fecha]'= fecha)";

$q = $conn->query($sql);
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}


while($r = $q->fetch()){
  print ("
    <a href='destino.html' target='_blank'><img src='$r[ubicacion]' alt='resultado' /></a>
    ");
}
?>

</table>
  </div>
</body>
</html>
