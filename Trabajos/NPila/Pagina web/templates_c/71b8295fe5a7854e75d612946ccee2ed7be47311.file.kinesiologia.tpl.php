<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 15:56:25
         compiled from "./templates/kinesiologia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74350308252091d56b8bc53-05071332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b8295fe5a7854e75d612946ccee2ed7be47311' => 
    array (
      0 => './templates/kinesiologia.tpl',
      1 => 1379530578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74350308252091d56b8bc53-05071332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52091d56c0f3f7_15859191',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52091d56c0f3f7_15859191')) {function content_52091d56c0f3f7_15859191($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<div class="post"><h2 class="title">Ingrese el nombre del paciente </h2></div>
								<div id="search" >
									<form id="cons_datos" method="post" action="">
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
								<h1><a>Kinesiologia</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="kinesiologia.php">Consultar Otro</a></li>
									<li><a href="turnosk.php">Turnos</a></li>
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
		<script text="text/javascript" src="scripts/compruebaform.js"></script>
	</body>
</html>
<?php }} ?>