<?php /*%%SmartyHeaderCode:1985021293522f3c7e538ad0-23821502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf6ebd7c8cc8b07a79f49597e0feed65b9b4157' => 
    array (
      0 => './templates/ahistclinica.tpl',
      1 => 1379650099,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1985021293522f3c7e538ad0-23821502',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523bca5b407357_03807160',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523bca5b407357_03807160')) {function content_523bca5b407357_03807160($_smarty_tpl) {?><!DOCTYPE html>
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
							<div class="post">
								<h2 class="title">Ingrese el nombre del paciente </h2>
							</div>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
								</form>
							</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Actualizar historia clinica</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="ipacientes.php">Ingresar paciente</a></li>
									<li><a href="infopaciente.php">Consultar Paciente</a></li>
									<li><a href="ainfopaciente.php">Actualizar informacion del paciente</a></li>
									<li><a href="bpacientes.php">Borrar paciente</a></li>
								</ul>
							</div>
							<!-- FIN BARRA LATERAL -->
						</nav>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>