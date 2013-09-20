<?php /*%%SmartyHeaderCode:459251153522e8072a437c4-89984724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aadcbed7df58de422fee12db929c597984209c8' => 
    array (
      0 => './templates/amedicos.tpl',
      1 => 1378824855,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459251153522e8072a437c4-89984724',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523b8f052264e5_38301562',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523b8f052264e5_38301562')) {function content_523b8f052264e5_38301562($_smarty_tpl) {?><!DOCTYPE html>
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
							<h2 class="title">Ingrese los datos del medico </h2><br> <br>
							<form name="ingresopaciente" onsubmit="return validacionip()">
								<legend class="title a">
								<div class="page"> 
									<input type="text" id="nombre"  placeholder="Nombre y Apellido" size="25">				
									<select id="especialidad" style="margin:0 5px 0 0">
									<option>Especialidad</option>
									<option value="kinesiologia">Kinesiologia</option>
									<option value="nutricion">Nutricion</option>
								</select><br><br>
							</div>
						</legend>
					</form>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Agregar medico</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="amedicos.php">Agregar medico</a></li>
									<li><a href="bmedico.php">Borrar medico</a></li>
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