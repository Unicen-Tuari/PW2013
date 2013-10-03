<?php /*%%SmartyHeaderCode:459251153522e8072a437c4-89984724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aadcbed7df58de422fee12db929c597984209c8' => 
    array (
      0 => './templates/amedicos.tpl',
      1 => 1380647646,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1380074906,
      2 => 'file',
    ),
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1380647764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459251153522e8072a437c4-89984724',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524b0489dc5c38_52696284',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524b0489dc5c38_52696284')) {function content_524b0489dc5c38_52696284($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Sistema de gestion</title>
		<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="styles/stylemenu.css" rel="stylesheet" type="text/css" media="screen" />
	</head>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<div class="post">
							<h2 class="title">Ingrese los datos del medico </h2><br><br>
							<form name="ingresopaciente" onsubmit="return validacionip()">
								<legend class="title a">
								<div class="page"> 
									<input type="text" id="nombre"  placeholder="Nombre y Apellido" size="25">				
									<select id="especialidad" style="margin:0 5px 0 0">
									<option>Especialidad</option>
									<option value="kinesiologia">Kinesiologia</option>
									<option value="nutricion">Nutricion</option></select><br><br>
									<input type="text" id="calle"  placeholder="Calle">
									<input type="numeric" id="num" placeholder="Nº" size="4">
									<input type="text" id="localidad" placeholder="Localidad" size="15"><br><br>
									<input type="tel" id="tel"  placeholder="Telefono" size="13">
									<input type="email" id="mail"  placeholder="E-mail" size="20"><br><br>
									<input type="submit" value="Cargar Medico">
								</select><br><br>
							</div>
						</legend>
					</form>
					</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Agregar medico</a></h1>
							</div>
							<div id="menu">
	<ul class="nav">
		<li >
			<a  href="index.php">Inicio</a>
		</li>
		<li >
			<a>Pacientes</a>
			<ul>
				<li class="submen"><a href="ipacientes.php">Ingresar Paciente</a></li>
				<li class="submen"><a href="infopaciente.php">Consultar Paciente</a></li>
				<li class="submen"><a href="ainfopaciente.php">Actualizar Paciente</a></li>
				<li class="submen"><a href="ahistclinica.php">Actualizar Historial</a></li>
				<li class="submen"><a href="bpacientes.php">Borrar Paciente</a></li>
			</ul>
		</li>
		<li>
			<a>Turnos</a>
			<ul>
				<li class="submen"><a href="turnos.php">Consultar Turnos</a></li>
				<li class="submen"><a href="dturnos.php">Dar Turnos</a></li>
			</ul>
		</li>
		<li >
			<a>Medicos</a>
			<ul>
				<li class="submen"><a href="#">Consultar Medico</a></li>
				<li class="submen"><a href="amedicos.php">Ingresar Medico</a></li>
			</ul>
		</li>
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