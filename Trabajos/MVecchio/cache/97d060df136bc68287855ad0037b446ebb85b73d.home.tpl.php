<?php /*%%SmartyHeaderCode:101652530453ca8588-11000580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1381177734,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1381090546,
      2 => 'file',
    ),
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1381177699,
      2 => 'file',
    ),
    '12916286f26cb50a687382be5392eeb2a5abb077' => 
    array (
      0 => '.\\templates\\loguin.tpl',
      1 => 1376861238,
      2 => 'file',
    ),
    'e808cbf278d4d1523925f06132e3587962f89c8c' => 
    array (
      0 => '.\\templates\\publis.tpl',
      1 => 1381172220,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1377145584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101652530453ca8588-11000580',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52533eb58302b6_54027431',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52533eb58302b6_54027431')) {function content_52533eb58302b6_54027431($_smarty_tpl) {?>	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gestoria del Automotor CN</title>

		<meta name="Autor" content="Vecchio Matias" />
		<meta name="keywords" lang="es" content="autos, transferencias, gestoria, carlos nievas, automotor, formulario 08, duplicados, olavarria" />
		<meta name="description" lang="es" content="Tramites del Automotor Carlos Nievas. Velocidad, la mejor atenci&oacute;n y el mejor servicio!" />

		<link rel="stylesheet" href="styles/estilo.css">
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/mostrarpagina.js"></script>
		<script type="text/javascript" 	src="js/jquery.smint.js"></script>

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
					<li><a href="home.php">Inicio</a></li>
					<li>Servicios
						<ul class="submenu">
							<li><a href="estadotransferencia.php" onClick="getPage('articulo','estadotransferencia.php'); return false">Estado de Transferencias</a></li>
							<li><a href="publicarautomotor.php" onClick="getPage('articulo','publicarautomotor.php'); return false">Publicar Automotor</a></li>
						</ul>
					</li>
					<li><a href="clientes.php" onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
					<li><a href="links.php" onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
					<li>Cuenta
						<ul class="submenu">
							<li><a href="editardatos.php" onClick="getPage('articulo','editardatos.php'); return false">Editar Datos</a></li>
							<li><a href="agregarautomotor.php" onClick="getPage('articulo','agregarautomotor.php'); return false">Agregar Automotor</a></li>
						</ul>
					</li>
					<li><a href="contacto.php" onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
				</ul>
			</nav>				
	
			<div class="target"  id="contenedorcentral">
				<article  id="articulo" >
					<div id="inicio">
						<h1>Gestoria del Automotor Carlos Nievas<h1>
							<ul id="datos">
								<li>Direccion</li>
								<li>Telefono</li>
								<li>Olavarria</li>
							</ul>
						<div class="cajita">
							<p>Comprar y vender un automotor es sencillo, pero suele ser complejo cuando cometemos el error de no ocuparnos previamente de la consulta registral de dominio (automotor) antes de la operaci&oacute;n, es aqu&iacute; en donde puede contar con nosotros para guiarlo en un resultado claro y &oacute;ptimo, para que su decisi&oacute;n sea la correcta al momento de invertir.-</p>
						</div>
						<div class="cajita">
							<h3>Ya sos Cliente???<h3><br>
							<p>Entonces hace uso de nuestra web!!:</p><br> 
							<ul>
								<li>Verific&aacute; el estado de tus Tr&aacute;mites.</li>
								<li>Informate de todos los Servicios que te brindamos como cliente!</li>
								<li>Pasa por nuestra seccion Venta de Automotores y public&aacute; automotores GRATIS!!</li>
							</ul>
						</div>
						<div class="cajita">
							<h3>No sos Cliente???<h3><br>
							<p>Consultanos mediante la secci&oacute;n Contacto!</p>
						</div>
					</div>					
				</article>
				<aside id="contenedorlateral">
						<div id="contenedorloguin">
	<h3>Ingresa con tu Cuenta!</h3>
						<form class="loguin" name="loguin" action="" method="" accept-charset="">
							<ul>
								<li>
									<input type="text" name="usuario" placeholder="Email!" required>
								</li>
								<li>
									<input type="password" name="contrasenia" placeholder="Contrase&ntilde;a"required>
								</li>
								<li>
									<input type="checkbox" name="recordarme">
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
		</div>		
</body>
	<footer>
		Copyright 2013 Vecchio Matias Designs
		<br>vecchiomatiasdesigns@gmail.com
		<br>
	</footer>
</html>
	
<?php }} ?>