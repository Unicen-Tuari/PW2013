<?php /* Smarty version Smarty-3.1.14, created on 2013-10-01 21:12:24
         compiled from "./templates/nuevocliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872924535524b62b2925173-73720829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c215e80d9ee58d0961d3850583230a401cf7043' => 
    array (
      0 => './templates/nuevocliente.tpl',
      1 => 1380672740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872924535524b62b2925173-73720829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524b62b29f30b7_61520144',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524b62b29f30b7_61520144')) {function content_524b62b29f30b7_61520144($_smarty_tpl) {?><br>
<div class="container">
	<form class="form-horizontal text-left" method="POST" action="">
			<div class="form-group col-lg-12 input-group">
				<span class="input-group-addon input-sm detallemodal">ID</span>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-lg-12 input-group">
				<span class="input-group-addon input-sm detallemodal">Nombre</span>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Apellido</span>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-lg-12 input-group">
				<span class="input-group-addon input-sm detallemodal">Dirección</span>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-lg-12 input-group">
				<span class="input-group-addon input-sm detallemodal">Telefono</span>
				<input class="form-control" type="text">
			</div>
			<div class="form-group col-lg-12 input-group">
				<span class="input-group-addon input-sm detallemodal">Mail</span>
				<input class="form-control" type="text">
			</div> 
			<div class="form-group col-lg-12">
				<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
				<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
	</form>
</div>
<?php }} ?>