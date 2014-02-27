<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 20:10:52
         compiled from "./templates/alerta_nuevocli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1146049027525490ab28f958-50194625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f73e628b3a3e805e6e8cbe5bffafdb0f022ce7a7' => 
    array (
      0 => './templates/alerta_nuevocli.tpl',
      1 => 1381273841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146049027525490ab28f958-50194625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525490ab372324_15916232',
  'variables' => 
  array (
    'id_cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525490ab372324_15916232')) {function content_525490ab372324_15916232($_smarty_tpl) {?><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 alert alert-success fade in" id="alerta_cli_agregado">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			Cliente agregado exitosamente con la ID: <?php echo $_smarty_tpl->tpl_vars['id_cliente']->value;?>

		</div>
	</div>
</div> 
<?php }} ?>