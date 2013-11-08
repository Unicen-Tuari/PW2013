<?php /*%%SmartyHeaderCode:60977440052069034ee5b94-46035552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1379532674,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60977440052069034ee5b94-46035552',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523b8ecf3bc5e4_69567878',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523b8ecf3bc5e4_69567878')) {function content_523b8ecf3bc5e4_69567878($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Sistema de gestion</title>
		<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
						<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Sistema de gestion </a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="pacientes.php">Pacientes</a></li>
									<li><a href="turnos.php">Turnos</a></li>
									<li><a href="medicos.php">Medicos</a></li>
								</ul>
							</nav>
						</div>
						<!-- FIN BARRA LATERAL -->
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>