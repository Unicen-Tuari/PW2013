<?php /*%%SmartyHeaderCode:15185524de4e20593e4-21777143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0d4de25bbc586611d89a18d52123aae9e79d21' => 
    array (
      0 => 'editardatos.tpl',
      1 => 1380836555,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1377145490,
      2 => 'file',
    ),
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1377144697,
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
      1 => 1376861107,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1377145584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15185524de4e20593e4-21777143',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524de4e219d414_02757678',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524de4e219d414_02757678')) {function content_524de4e219d414_02757678($_smarty_tpl) {?>	<!DOCTYPE html>
<html>
	<head>
		<title>Gestoria del Automotor CN</title>

		<meta name="Autor" content="Vecchio Matias" />
		<meta name="keywords" lang="es" content="autos, transferencias, gestoria, carlos nievas, automotor, formulario 08, duplicados, olavarria" />
		<meta name="description" lang="es" content="Tramites del Automotor Carlos Nievas. Velocidad, la mejor atenci&oacute;n y el mejor servicio!" />

		<link rel="stylesheet" href="styles/estilo.css">
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		
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
					<li class="selected"><a href="inicio.php">Inicio</a></li>
					<li>Servicios
						<ul class="submenu">
							<li><a href="estadotransferencia.php">Estado de Transferencias</a></li>
							<li><a href="publicarautomotor.php">Publicar Automotor</a></li>
						</ul>
					</li>
					<li><a href="clientes.php">Clientes Amigos</a></li>
					<li><a href="links.php">Links de Inter&eacute;s</a></li>
					<li>Cuenta
						<ul class="submenu">
							<li><a href="editardatos.php">Editar Datos</a></li>
							<li><a href="agregarautomotor.php">Agregar Automotor</a></li>
						</ul>
					</li>
					<li><a href="contacto.php">Contacto</a></li>
				</ul>
			</nav>				
	
			<div id="contenedorcentral">
				<article id="articulo" >
				
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