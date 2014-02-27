<!DOCTYPE html>
<html lang="es-Es">

<?php

require_once 'smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->assign('Archivos', 'Archivos');

error_reporting(0);
if (isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
	if ($pagina < 1){$pagina = 1;}
} else{
	$pagina = 1;
}
if (isset($_POST['type'])){
	$type= $_POST['type'];
}else{
	if(isset($_GET['type'])){
		$type = $_GET['type'];
		} else{
			$type = 'I';
	}
}

session_start();

if (isset($_SESSION['username'])){
	$usuario = $_SESSION['username'];
	if ($usuario == 'Blackjak'){
		include('funciones_admin.php');
	}else{
		include('funciones_usr.php');
	}
} else{
	include('funciones_visit.php');
}

date_default_timezone_set('America/Argentina/Buenos_Aires');

require_once('recaptcha/recaptchalib.php');
$captcha_publickey = "6LeGQeQSAAAAAGdM2uFeBv2LBaIDqUbC039TkD80";
$captcha_privatekey = "6LeGQeQSAAAAABxqzS1ngW9pxCjiJrpdSxOvnHri";
$error_captcha=null;
	
$smarty->display('header.tpl');

?>
<div id="contenido">
<body>
	<header>
		<a href='index.php?type=I&pagina=1'><image src="styles/images/header.gif"/></a>
	</header>
		<?php
		if (isset($_GET['error'])) {
			if (($_GET['error'] == 33) OR ($_GET['error'] == 34) OR ($_GET['error'] == 35)){
				print("<div class='datbox-error'> Posteaste hace menos de 5 minutos, no puedes postear tan seguido. </div>");
			}else if ($_GET['error'] == 32) {
				print("<div class='datbox-error'> Comentaste hace menos de 5 minutos, no puedes comentar tan seguido. </div>");
			} else {
				print("<div class='datbox-error'> Ha habido un error </div>");}
		}
		?>
		
		<nav><!--Search box-->
			<table>
			<tr><a href='index.php?pagina=1&type=C&categoria=1'><button class="search-button-movie">Peliculas</button></a></tr>
			<tr><a href='index.php?pagina=1&type=C&categoria=2'><button class="search-button-serie">Series</button></a></tr>
			<tr><a href='index.php?pagina=1&type=C&categoria=3'><button class="search-button-game">Juegos</button></a></tr>
			</table>
		</nav>
		<aside><!--Aside bar of the web-->
				<?php
				if ((isset($_SESSION['username'])) AND ($_SESSION['username'] == 'Blackjak')) {
				consulta_cantidades();}
				if (!isset($usuario)){
				print ("
					<div class='datbox-aside'>	
						<div class='form-title'>Login</div>
						<form class='formulario' name='login' id='login' method='POST' onsubmit='return comprobar_login()' action='login.php'>
							<input type='text' name='usernamelogin' id='usernamelogin' onBlur='verifica(document.login.usernamelogin,5,20)' placeholder='Username'/><br>
							<input type='password' name='passwordlogin' id='passwordlogin' onBlur='verifica(document.login.passwordlogin,5,20)' placeholder='Contraseña'/>");if ((isset($_GET['error'])) AND ($_GET['error'] == 9)){ print("<div class='error'>Login incorrecto</div>");}
																								if ((isset($_GET['error'])) AND ($_GET['error'] == 36)){ print("<div class='error'>Cuenta no activada, revisa tu mail</div>");}
																								if ((isset($_GET['error'])) AND ($_GET['error'] == 37)){ print("<div class='error'>Cuenta baneada, para mas informacion escribe a broms.web@gmail.com</div>");} print("<br>
							<button type='submit' class='boton-aside'>Ingresar</button><br>
							<a href='recordar.php'> No recuerdo mi contraseña </a> <br>
							<a href='cambiar.php'> Cambiar contraseña </a>
						</form>
					</div>
					<center><a href='index.php?type=Protocolo'><button type='button'class='boton-reglas'>Reglas y Funcionamiento</a></button><center>
					<div class='datbox-aside'>
						<div class='form-title'>REGISTRATE!</div>
						<form class='formulario' name='registro' id='registro' method='POST' onsubmit='return comprobar_registro()' action='registrar.php'>
							<input type='text'name='nombre' id='nombre' onBlur='verifica(document.registro.nombre,5,20)' placeholder='Nombre (5-20)'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 1)) { print("<div class='error'>De 5 a 20 letras,nuemros o guiones.</div>");} print("
							<input type='text' name='username' id='username' onBlur='comprobar_usr(document.registro.username)' placeholder='Username (5-20)' autocomplete='off'/>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 2)){ print("<div class='error'>De 5 a 20 letras,numeros o guiones.</div>");} if ((isset($_GET['error'])) AND ($_GET['error'] == 7)){ print("<div class='error'>El nombre de usuario ya existe</div>");} print("<br><div id='dispo' name='dispo'></div>
							<input type='password' name='password' id='password' onBlur='verifica(document.registro.password,5,20)' placeholder='Contraseña (5-20)'/>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 3)){ print("<div class='error'>De 5 a 20 letras,numeros o guiones.</div>");} print("<br>
							<input type='password' name='passwordc' id='passwordc' onBlur='verifica(document.registro.passwordc,5,20)' placeholder='Confirmar contraseña'/>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 4)){ print("<div class='error'>Las contraseñas deben ser iguales.</div>");} print("<br>
							<input type='text' name='email' id='email' onBlur='verifica(document.registro.email,3,30)' placeholder='Mail'/><br>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 5)){ print("<div class='error'><br>Ingrese email valido</div>");} if ((isset($_GET['error'])) AND ($_GET['error'] == 8)){ print("<div class='error'><br>El email ya existe</div>");}if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'bad')){ print("<div class='error'><br>A habido un problema con el mail</div>");} print("
							Soy mayor de 18<input type='radio' name='mayoredad' id='mayoredad'>"); if ((isset($_GET['error'])) AND ($_GET['error'] == 6)){ print("<div class='error'>Debe ser mayor de edad.</div>");} print("<br>
							"); echo recaptcha_get_html($captcha_publickey, $error_captcha);
							if ((isset($_GET['error'])) AND ($_GET['error'] == 10)){ print("<div class='error'>Captcha incorrecto</div>");}
							if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'ok')){ print("<div class='error'>Registro realizado, activa tu cuenta mediante el mail que se te envio.</div>");} print("
							<button type='submit' class='boton-aside' name='boton'>Registrarse</button>
						</form>
					</div>
				");} else{
					print ("
					<div class='datbox-aside'>
						<div class='form-title'>Online</div>
						<div class='form-title'>Usuario: $usuario</div><br>
						<form class='formulario' name='post' id='post' method='GET' action='index.php'>	
							<input type='hidden' name='type' id='type' value='NuevoP'/>
							<button type='submit' class='boton-aside'>Postear Pelicula</button>
						</form>
						<form class='formulario' name='post' id='post' method='GET' action='index.php'>
							<input type='hidden' name='type' id='type' value='NuevoS'/>
							<button type='submit' class='boton-aside'>Postear Serie</button>
						</form>
						<form class='formulario' name='post' id='post' method='GET' action='index.php'>
							<input type='hidden' name='type' id='type' value='NuevoJ'/>
							<button type='submit' class='boton-aside'>Postear Juego</button>
						</form>
					</div>
					<center><a href='index.php?type=Protocolo'><button type='button'class='boton-reglas'>Reglas y Funcionamiento</a></button><center>
					<form action='salir.php' align='center'>
					<a href='index.php?type=Propios' ><button type='button' class='boton-salir'>Mis Posts</button></a>
					<button type='submit' class='boton-salir'>Cerrar sesion</button>
					</form>");}
				if ((isset($_SESSION['username'])) AND ($_SESSION['username'] == 'Blackjak')) {
				print ("
					<div class='datbox-aside'>
						<form class='formulario' method='POST' action='index.php'>
							<input type='hidden' name='admin' id='admin' value='consulta'/>
							<button type='submit' class='boton-aside'>Administrar</button>
						</form>
						<form class='formulario' method='POST' action='banear.php'>
							<input type='text' name='iduser' id='iduser' placeholder='Id de usuario a banear'/><br>
							<button type='submit' class='boton-aside'>Banear Usuario</button>
						</form>
						<form class='formulario' action='eliminar.php' method='POST'>
							<input type='text' name=idpost id=idpost placeholder='ID del post a eliminar'>
							<button type='submit' class='boton-aside'>Eliminar Post</button>	
						</form>
					</div>
				");}

			$smarty->display('buscadores.tpl');

			?>

			<div class='datbox-aside'>
				<div class='form-title'>Mas comentados</div>
				<?php
				consulta_maxcomentarios();
				?>
			</div>
			
			<div class='datbox-aside'>
				<div class="form-title">Archivos</div>
				<?php
				consulta_archivos();
				?>
			</div>
			<?php

			$smarty->display('seguir.tpl');
			$smarty->display('recomendar.tpl');
			$smarty->display('programas.tpl');

			?>
			
		</aside>

		<div class='content'>

		<?php
		if (isset($_SESSION['username'])){
				$usuario = $_SESSION['username'];
				if ($usuario == 'Blackjak'){
					if (isset($_POST['admin'])){
						if ($_POST['admin'] == 'consulta'){$type='Consulta';}
						if ($_POST['admin'] == 'edit'){$type = 'Edit';}
						}
					switch ($type) {
						//Acciones Admin
						case 'I':
							consulta_principal($pagina);
							break;
						case 'Consulta':
							consulta_principal_admin();
						break;
						case 'Edit':
							editar_admin($_POST['idpost']);
						break;
						case 'B':
							if (isset($_GET['busqueda'])){
							consulta_busqueda($pagina,$_GET['busqueda']);}
							break;
						case 'F':
							if ((isset($_GET['mes'])) AND ((isset($_GET['anio'])))) {
							consulta_mes($pagina,$_GET['mes'],$_GET['anio']);}
							break;
						case 'C':
							if (isset($_GET['categoria'])) {
							consulta_categoria($pagina,$_GET['categoria']);}
							break;
						case 'Propios':
							consulta_propios($pagina);
							break;
						case 'Protocolo':
							reglas();
							break;
						case 'P':
							if(!isset($_GET['paginacomen'])) {
									$paginacomen = 1;} else{$paginacomen = $_GET['paginacomen'];}
							if(isset($_GET['idpost'])) {
							consulta_unica($_GET['idpost'],$paginacomen);}
							break;
						case 'NuevoP':
							if (!isset($_SESSION['username'])){
							print("<div class='form-title>Tienes que estar logeado para subir posts</div>");
								}else{
								print("<script type='text/javascript' src='js/postear.js' /></script>");
								crear_video($usuario,1);}
							break;
						case 'NuevoS':
							if (!isset($_SESSION['username'])){
							print("<div class='form-title>Tienes que estar logeado para subir posts</div>");
								}else{
								print("<script type='text/javascript' src='js/postear.js' /></script>");
								crear_video($usuario,2);}
							break;
						case 'NuevoJ':
							if (!isset($_SESSION['username'])){
							print("<div class='form-title>Tienes que estar logeado para subir posts</div>");
								}else{
								print("<script type='text/javascript' src='js/postear.js' /></script>");
								crear_juego($usuario,3);}
							break;
					} 
				}else{
					switch ($type) {
						//Acciones Usuario
						case 'I':
							consulta_principal($pagina);
							break;
						case 'B':
							if (isset($_GET['busqueda'])){
							consulta_busqueda($pagina,$_GET['busqueda']);}else{consulta_principal(1);}
							break;
						case 'F':
							if ((isset($_GET['mes'])) AND ((isset($_GET['anio'])))) {
							consulta_mes($pagina,$_GET['mes'],$_GET['anio']);}else{consulta_principal(1);}
							break;
						case 'C':
							if (isset($_GET['categoria'])){
							consulta_categoria($pagina,$_GET['categoria']);}else{consulta_principal(1);}
							break;
						case 'Edit':
							if (isset($_POST['idpost'])){
							editar_user($_POST['idpost']);}else{consulta_principal(1);}
							break;
						case 'Propios':
							consulta_propios($pagina);
							break;
						case 'Protocolo':
							reglas();
							break;
						case 'P':
							if(!isset($_GET['paginacomen'])){
									$paginacomen = 1;} else {$paginacomen = $_GET['paginacomen'];}
							if(isset($_GET['idpost'])){
							consulta_unica($_GET['idpost'],$paginacomen);}else{consulta_principal(1);}
							break;
						case 'NuevoP':
							if (!isset($_SESSION['username'])){
							print("<div class='form-title>Tienes que estar logeado para subir posts</div>");
								}else{
								print("<script type='text/javascript' src='js/postear.js' /></script>");
								crear_video($usuario,1);}
							break;
						case 'NuevoS':
							if (!isset($_SESSION['username'])){
							print("<div class='form-title>Tienes que estar logeado para subir posts</div>");
								}else{
								print("<script type='text/javascript' src='js/postear.js' /></script>");
								crear_video($usuario,2);}
							break;
						case 'NuevoJ':
							if (!isset($_SESSION['username'])){
							print("<div class='form-title>Tienes que estar logeado para subir posts</div>");
								}else{
								print("<script type='text/javascript' src='js/postear.js' /></script>");
								crear_juego($usuario,3);}
							break;
					} 
				}
			} else{
				switch ($type) {
					//Acciones visitante
						case 'I':
							consulta_principal($pagina);
							break;
						case 'B':
							if (isset($_GET['busqueda'])){
							consulta_busqueda($pagina,$_GET['busqueda']);}else{consulta_principal(1);}
							break;
						case 'F':
							if ((isset($_GET['mes'])) AND ((isset($_GET['anio'])))) {
							consulta_mes($pagina,$_GET['mes'],$_GET['anio']);}else{consulta_principal(1);}
							break;
						case 'C':
							if (isset($_GET['categoria'])){
							consulta_categoria($pagina,$_GET['categoria']);}else{consulta_principal(1);}
							break;
						case 'P':
							if(isset($_GET['idpost'])){
							consulta_unica($_GET['idpost']);}else{consulta_principal(1);}
							break;
						case 'Protocolo':
							reglas();
							break;
						case 'NuevoP':
							print("<div class='form-title'>Tienes que estar logeado para subir posts</div>");
							break;
						case 'NuevoS':
							print("<div class='form-title'>Tienes que estar logeado para subir posts</div>");
							break;
						case 'NuevoJ':
							print("<div class='form-title'>Tienes que estar logeado para subir posts</div>");
							break;
					}
				}?>
		</div>
	
		<footer>
		<button type="button" id="goto-heaven" value="IR AL CIELO" onclick="scrollTo(0)">Ir al cielo</button><br>
		<div id="footer-text">		
		© Broms Web 2013 |<a href='creador.php' class= 'texto-aside'>Creador de Broms Web</a>
		</div>
		</footer>
	</body>
</div>
</html>