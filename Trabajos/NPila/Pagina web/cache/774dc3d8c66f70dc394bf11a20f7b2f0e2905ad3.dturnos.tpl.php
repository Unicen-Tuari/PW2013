<?php /*%%SmartyHeaderCode:2100401496523b8d9d94aa75-43617416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774dc3d8c66f70dc394bf11a20f7b2f0e2905ad3' => 
    array (
      0 => './templates/dturnos.tpl',
      1 => 1379634613,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2100401496523b8d9d94aa75-43617416',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523b8e5e899f73_81939391',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523b8e5e899f73_81939391')) {function content_523b8e5e899f73_81939391($_smarty_tpl) {?><!DOCTYPE html>
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
							<div class="post"> 
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<legend class="title a"><br><br>								
									<form id="" method="post">
										Nombre y Apellido:
										<input type="text" id="nombre_apellido" name="nombre_apellido" placeholder="Nombre y Apellido" size="30">
										<br><br>
										Turnos para el dia: 									
										<input type="text" id="fecha" name="fecha" placeholder="DD/MM/YYYY" size="10">
										Especialidad:					
										<select name="especialidad" style="margin:0 5px 0 0">
											<option value="kinesiologia">Kinesiologia</option>
											<option value="nutricion">Nutricion</option>
										</select><br><br><br>
										<input type="submit" value="Dar Turno">
									</form>
								</legend>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
							</div>
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Dar Turnos</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
								</ul>
							</nav>
							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>