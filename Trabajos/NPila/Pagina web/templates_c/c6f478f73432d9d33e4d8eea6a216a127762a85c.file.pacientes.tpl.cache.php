<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 16:27:09
         compiled from "./templates/pacientes.tpl" */ ?>
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
  ),
  'nocache_hash' => '17580157185206ca095e8410-43758197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5206ca09633c60_68853737',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5206ca09633c60_68853737')) {function content_5206ca09633c60_68853737($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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