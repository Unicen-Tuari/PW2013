<?php /* Smarty version Smarty-3.1.14, created on 2013-10-20 12:31:10
         compiled from "./templates/alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12547546495263e99998dc23-35307196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4f8cafc616bd0935f2f898523f2f4519150461' => 
    array (
      0 => './templates/alerta.tpl',
      1 => 1382283000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12547546495263e99998dc23-35307196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5263e999a89a19_47559107',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5263e999a89a19_47559107')) {function content_5263e999a89a19_47559107($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-12 alert alert-success fade in margenb" id="alerta">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

		</div>
	</div>
</div> 
<?php }} ?>