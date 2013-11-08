<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 20:57:40
         compiled from "./templates/medicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:829906411523f9550ee7121-33394691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b769c294f3c74cefcbc96274978b15ae5d2195f6' => 
    array (
      0 => './templates/medicos.tpl',
      1 => 1382486103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '829906411523f9550ee7121-33394691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523f9550f36650_59954424',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f9550f36650_59954424')) {function content_523f9550f36650_59954424($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<div class="post"><h2 class="title">Ingrese el nombre del medico </h2></div>
								<div id="search" >
									<form id="cons_medico" method="post" action="">
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
								<h1><a>Informacion del Medico</a></h1>
							</div>
							<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>