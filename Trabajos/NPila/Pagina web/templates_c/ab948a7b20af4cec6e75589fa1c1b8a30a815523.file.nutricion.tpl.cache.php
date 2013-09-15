<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 19:44:42
         compiled from "./templates/nutricion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20476656575206ca14df98a8-86693580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab948a7b20af4cec6e75589fa1c1b8a30a815523' => 
    array (
      0 => './templates/nutricion.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20476656575206ca14df98a8-86693580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5206ca14e45547_70915601',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5206ca14e45547_70915601')) {function content_5206ca14e45547_70915601($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
							<!-- FIN DE CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Nutricion</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="turnosn.php">Turnos</a></li>
								</ul>
							</div>
						</nav>
						<!-- FIN BARRA LATERAL -->
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>