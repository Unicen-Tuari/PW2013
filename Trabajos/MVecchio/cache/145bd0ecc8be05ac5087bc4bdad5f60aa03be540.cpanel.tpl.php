<?php /*%%SmartyHeaderCode:2536852534f51e3cdc8-55416729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145bd0ecc8be05ac5087bc4bdad5f60aa03be540' => 
    array (
      0 => '.\\templates\\cpanel.tpl',
      1 => 1381201734,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1381203811,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1377145584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2536852534f51e3cdc8-55416729',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253936cdce9d8_89397602',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253936cdce9d8_89397602')) {function content_5253936cdce9d8_89397602($_smarty_tpl) {?>	<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gestoria del Automotor CN</title>

		<meta name="Autor" content="Vecchio Matias" />
		<meta name="keywords" lang="es" content="autos, transferencias, gestoria, carlos nievas, automotor, formulario 08, duplicados, olavarria" />
		<meta name="description" lang="es" content="Tramites del Automotor Carlos Nievas. Velocidad, la mejor atenci&oacute;n y el mejor servicio!" />

		<link rel="stylesheet" href="styles/estilo.css">
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
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
					<li>Administrar Cliente
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','nuevocliente.php'); return false">Nuevo Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Clientes</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Cliente</a></li>
						</ul>
					</li>
					<li>Administrar Tr&aacute;mite
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Tr&aacutemite</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Actualizar Estado</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Tr&aacutemites</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Tr&aacutemite</a></li>
						</ul>
					</li>
					<li>Administrar Vehiculo
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Vehiculos</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Vehiculo</a></li>
						</ul>
					</li>
					<li>Estadisticas
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Por Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Por Vehiculo</a></li>
						</ul>
					</li>
					<li><a href="" onClick=";">Salir</a></li>					
				</ul>
			</nav>
			<div class="target"  id="contenedorcentral">
				<article  id="articuloadmin" >
				</article>
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