<?php /* Smarty version Smarty-3.1.14, created on 2013-09-20 01:09:01
         compiled from "./templates/bpacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13267116215206cc66456c42-12443018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31b9bfe39fa2cc7201c8875a8d7db05724b51d2' => 
    array (
      0 => './templates/bpacientes.tpl',
      1 => 1379650074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13267116215206cc66456c42-12443018',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5206cc664a4896_58953110',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5206cc664a4896_58953110')) {function content_5206cc664a4896_58953110($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
								<h1><a>Borrar Pacientes</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="ipacientes.php">Ingresar paciente</a></li>
									<li><a href="infopaciente.php">Consultar Paciente</a></li>
									<li><a href="ainfopaciente.php">Actualizar informacion del paciente</a></li>
									<li><a href="ahistclinica.php">Actualizar historia clinica</a></li>
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