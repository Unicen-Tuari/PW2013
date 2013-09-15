<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 12:36:30
         compiled from "./templates/ahistclinica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1985021293522f3c7e538ad0-23821502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf6ebd7c8cc8b07a79f49597e0feed65b9b4157' => 
    array (
      0 => './templates/ahistclinica.tpl',
      1 => 1378827380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1985021293522f3c7e538ad0-23821502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522f3c7e8c87f6_42869762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522f3c7e8c87f6_42869762')) {function content_522f3c7e8c87f6_42869762($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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