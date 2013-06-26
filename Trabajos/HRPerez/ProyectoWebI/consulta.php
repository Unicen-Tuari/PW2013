<html>

<?php

$host   = "localhost";
$db = "tecper";
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
$sql = "INSERT INTO comentario (Nombre,Apellido,E-mail,Asunto,Mensaje) 
VALUES ('$_POST[Nombre]','$_POST[Apellido]','$_POST[Email]','$_POST[Asunto]','$_POST[Mensaje]')";

$q = $conn->query($sql);
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
?>

</table>
  </div>
</body>
</html>
