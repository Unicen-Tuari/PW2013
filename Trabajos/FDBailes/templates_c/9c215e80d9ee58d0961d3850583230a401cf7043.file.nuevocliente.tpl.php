<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 14:54:08
         compiled from "./templates/nuevocliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4064619745251a3c03c30e6-90671691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c215e80d9ee58d0961d3850583230a401cf7043' => 
    array (
      0 => './templates/nuevocliente.tpl',
      1 => 1380846516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4064619745251a3c03c30e6-90671691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'next_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5251a3c04844b9_26990270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5251a3c04844b9_26990270')) {function content_5251a3c04844b9_26990270($_smarty_tpl) {?><br>
<div class="container">
	<form class="form-horizontal text-left" method="POST" action="" id="form_nuevocli">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['next_id']->value['Auto_increment'];?>
" disabled>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control" type="text" name="nombre" required autofocus>
		</div>
		<div class="form-group col-lg-12 input-group">
		<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control" type="text" name="apellido" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control" type="text" name="direccion" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control" type="tel" name="telefono" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control" type="email" name="mail">
		</div> 
		<div class="form-group col-lg-12">
			<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
			<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
		</div>
	</form>
</div>
<?php }} ?>