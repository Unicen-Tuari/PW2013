<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 15:19:39
         compiled from "templates\administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238225254065e79c150-79366625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba1682616ac373877e5931de328425c57f9ac71' => 
    array (
      0 => 'templates\\administrador.tpl',
      1 => 1381238377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238225254065e79c150-79366625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5254065eb45a34_37947960',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254065eb45a34_37947960')) {function content_5254065eb45a34_37947960($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


		<div class="portada">
				<fieldset>
					<legend>INFORMACI&Oacute;N</legend>
									
					<<?php ?>?php
						include ('./consultas/rellena_informacion.php');
					?<?php ?>>
					
				</fieldset>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>