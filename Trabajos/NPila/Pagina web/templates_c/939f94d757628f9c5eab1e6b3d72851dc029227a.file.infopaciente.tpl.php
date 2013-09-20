<?php /* Smarty version Smarty-3.1.14, created on 2013-09-19 14:15:21
         compiled from "./templates/infopaciente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4672163085239fe96f39ee1-09818283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939f94d757628f9c5eab1e6b3d72851dc029227a' => 
    array (
      0 => './templates/infopaciente.tpl',
      1 => 1379541112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4672163085239fe96f39ee1-09818283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5239fe971d8c48_04076660',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239fe971d8c48_04076660')) {function content_5239fe971d8c48_04076660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<div class="post"><h2 class="title">Ingrese el nombre del paciente </h2></div>
								<div id="search" >
									<form id="cons_pacientes" method="post" action="">
									<div>
										<input type="text" name="search-text" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
									</form>
								</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Informacion del Paciente</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="pacientes.php">Pacientes</a></li>
									<li><a href="infopaciente.php">Consultar Otro</a></li>
								</ul>
							</nav> 
							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
		<script text="text/javascript" src="scripts/jquery-1.10.0.min.js"></script>
		<script text="text/javascript" src="scripts/ajax.js"></script>
	</body>
</html>
<?php }} ?>