<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 01:15:19
         compiled from "./templates/informacion_paciente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7672050375281ab578414d3-76366068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a0f11bd0c88dc9737ff6caea1dbb63c86c9a39' => 
    array (
      0 => './templates/informacion_paciente.tpl',
      1 => 1381184351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7672050375281ab578414d3-76366068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281ab578f8132_78484385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281ab578f8132_78484385')) {function content_5281ab578f8132_78484385($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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