<?php
//Configuración
$host 	= "localhost";
$db	= "otro";
$user	= "root";
$pass	= "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}
if (isset($_POST['dni'])){
$dni= $_POST['dni'];
$pass=$_POST['password'];

//Consulta
$sql = "SELECT * FROM publicacion WHERE dni = $dni AND (SELECT password FROM cliente WHERE password = $pass)";
//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}


//Si todo salió bien imprimo todos los registros.

while($r = $q->fetch()){
  print('<h3 class="mi_sesion">Publicaci&oacute;n:</h3>'.'<p class="mi_sesion">'.$r['nombre_public'].'</p>'.'<h3 class="mi_sesion">Subcategor&iacute;a:</h3>'.'<p class="mi_sesion">'.$r['nombre_subcat'].'</p>'.'<h3 class="mi_sesion">Descripci&oacute;n:</h3>'.'<p class="mi_sesion">'.$r['descripcion'].'</p>'.'<h3 class="mi_sesion">Fecha de publicaci&oacute;n:</h3>'.'<p class="mi_sesion">'.$r['fecha'].'</p>'.'<p class="mi_sesion">.........................................................</p>');
}

}
else{
	print('<form method="post" action="sesion.php"><input  type="text" name="dni" placeholder="*DNI" pattern="[\d]{7,8}" title="Formato: 7 a 8 Digitos" required><br><br><input  type="password" name="password" placeholder="*Contraseña" pattern="[\w-.]+" ><br><br><input  type="submit" value="ACEPTAR"></form>');
}



?>
