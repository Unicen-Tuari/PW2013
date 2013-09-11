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

//Consulta
$sql = "SELECT * FROM cliente WHERE dni = $dni";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}


//Si todo salió bien imprimo todos los registros.

while($r = $q->fetch()){
  print('<h3 class="mi_sesion">'.$r['nombre'].'&nbsp;'.$r['apellido'].'</h3>'.'<h3 class="mi_sesion">Dni:</h3>'.'<p class="mi_sesion">'.$r['dni'].'</p>'.'<h3 class="mi_sesion">Tel&eacute;fono:</h3>'.'<p class="mi_sesion">'.$r['telefono'].'</p>'.'<h3 class="mi_sesion">E-mail:</h3>'.'<p class="mi_sesion">'.$r['e_mail'].'</p>'.'<h3 class="mi_sesion">Direcci&oacute;n:</h3>'.'<p class="mi_sesion">'.$r['direccion'].'&nbsp;'.'</p>'.'<h3 class="mi_sesion">Localidad:</h3>'.'<p class="mi_sesion">'.$r['localidad'].'</p>'.'<p class="mi_sesion">.........................................................</p>');
}

}
else{
	print('<form method="post" action="sesion.php"><input  type="text" name="dni" placeholder="*DNI" pattern="[\d]{7,8}" title="Formato: 7 a 8 Digitos" required><br><br><input  type="password" name="password" placeholder="*Contraseña" pattern="[\w-.]+" ><br><br><input  type="submit" value="ACEPTAR"></form>');
}

?>