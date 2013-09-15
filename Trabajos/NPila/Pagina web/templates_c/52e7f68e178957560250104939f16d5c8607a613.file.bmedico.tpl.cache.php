<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 11:55:12
         compiled from "./templates/bmedico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:969555200522f32d0420817-26922323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e7f68e178957560250104939f16d5c8607a613' => 
    array (
      0 => './templates/bmedico.tpl',
      1 => 1378824821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '969555200522f32d0420817-26922323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522f32d045a570_90362501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522f32d045a570_90362501')) {function content_522f32d045a570_90362501($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<div class="post">
								<h2 class="title">Ingrese el nombre del medico </h2>
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
								<h1><a>Borrar medico</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="amedicos.php">Agregar medico</a></li>
									<li><a href="#">Borrar medico</a></li>
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