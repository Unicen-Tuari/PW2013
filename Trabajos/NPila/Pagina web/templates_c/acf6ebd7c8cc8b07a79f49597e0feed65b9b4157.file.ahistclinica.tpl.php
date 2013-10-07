<?php /* Smarty version Smarty-3.1.14, created on 2013-09-25 19:56:37
         compiled from "./templates/ahistclinica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518102802523bcd678cf057-99933556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf6ebd7c8cc8b07a79f49597e0feed65b9b4157' => 
    array (
      0 => './templates/ahistclinica.tpl',
      1 => 1380149775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518102802523bcd678cf057-99933556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523bcd6790a011_49356499',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523bcd6790a011_49356499')) {function content_523bcd6790a011_49356499($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
							<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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