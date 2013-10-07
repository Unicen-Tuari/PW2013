<?php /*%%SmartyHeaderCode:17580157185206ca095e8410-43758197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f478f73432d9d33e4d8eea6a216a127762a85c' => 
    array (
      0 => './templates/pacientes.tpl',
      1 => 1379532213,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17580157185206ca095e8410-43758197',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523bc4925eefc4_24534101',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523bc4925eefc4_24534101')) {function content_523bc4925eefc4_24534101($_smarty_tpl) {?><!DOCTYPE html>
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
								<h1><a>Pacientes</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="ipacientes.php">Ingresar Paciente</a></li>
									<li><a href="infopaciente.php">Consultar Paciente</a></li>
									<li><a href="ainfopaciente.php">Actualizar Informacion del Paciente</a></li>
									<li><a href="ahistclinica.php">Actualizar Historia Clinica</a></li>
									<li><a href="bpacientes.php">Borrar Paciente</a></li>
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