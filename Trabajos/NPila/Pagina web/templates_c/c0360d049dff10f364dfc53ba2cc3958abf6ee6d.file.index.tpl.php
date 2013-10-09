<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 19:24:20
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:812558188523bc34c7c8541-22360312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1381184342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '812558188523bc34c7c8541-22360312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523bc34cd4bec9_34235199',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523bc34cd4bec9_34235199')) {function content_523bc34cd4bec9_34235199($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!---->
						</div>
						<div id="sidebar">
						<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Sistema de gestion </a></h1>
							</div>
							<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
						<!-- FIN BARRA LATERAL -->
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>