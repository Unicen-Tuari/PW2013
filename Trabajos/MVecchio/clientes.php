<?php
//Configuración
$host 	= "localhost";
$db	= "gestoriaautomotor";
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

//Consulta
$sql = "SELECT url_imagen,web FROM cliente";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Gestoria del Automotor CN</title>
		<link rel="stylesheet" href="styles/estilo.css">
		<script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>

		<script type="text/javascript" 	src="./js/jquery.smint.js"></script>

		<script type="text/javascript">
			
		$(document).ready( function() {
		    $('.menu').smint({
		    	'scrollSpeed' : 1000
		    });
		});

		</script>
	</head>
	<body>
		<div id="contenedorgeneral">
			<header id="encabezado">
				<img alt="Logo CN" src="imagenes/cn.jpg">
			</header>
			<nav>
				<ul class="menu">
					<li><a href="inicio.html">Inicio</a></li>
					<li><a href="servicios.html">Servicios</a>
						<ul class="submenu">
							<li><a href="estadotransferencia.html">Estado de Transferencias</a></li>
							<li><a href="publicarautomotor.html">Publicar Automotor</a></li>
						</ul>
					</li>
					<li class="selected"><a href="clientes.php">Clientes Amigos</a></li>
					<li><a href="links.html">Links de Inter&eacute;s</a></li>
					<li><a href="cuenta.html">Cuenta</a>
						<ul class="submenu">
							<li><a href="editardatos.html">Editar Datos</a></li>
							<li><a href="agregarautomotor.html">Agregar Automotor</a></li>
						</ul>
					</li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>	
			<div id="contenedorcentral">
				<article id="articulo" >
					<?php
					//Imprimo fotos de clientes "amigos" de a 3 por fila.
						$cont=0;
						while($r = $q->fetch()){
  							while (cont<2 and $r){
  								echo('<a id="linkamigo" href="//'.$r[web].'" target="_blank"><img alt="Imagen Amigo" src="'.$r[url_imagen].'"></a>');
  								$r= $q->fetch();
  								$cont++;
  							}
						}
					?>		
				</article>
			</div>
			<aside id="contenedorlateral">
				<div id="contenedorloguin">
					<h3>Ingresa con tu Cuenta!</h3>
					<form class="loguin" name="loguin" action="" method="" accept-charset="">
						<ul>
							<li>
								<input id="input" type="text" name="usuario" placeholder="Email!" required>
							</li>
							<li>
								<input id="input" type="password" name="contrasenia" placeholder="Contrase&ntilde;a"required>
							</li>
							<li>
								<input id="input" type="checkbox" name="recordarme" id="recordarme">
								Recordarme
							</li>
							<li>
								<input class="botonsubmit" type="submit" value="Entrar">
							</li>
						</ul>
					</form>

				</div>
				<div id="contenedorpublis">
					<a href="http://www.arba.gov.ar/" target="_blank"><img alt="Logo Arba" src="imagenes/LogodeArbaHOME.gif"></a>
					<a href="http://www.dnrpa.gov.ar/" target="_blank"><img alt="Logo Registro Automotor" src="imagenes/LogoRegistro.bmp"></a>
				</div>
			</aside>
		</div>
	</body>
	<footer>
		Copyright
	</footer>
</html>