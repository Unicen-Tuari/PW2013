<?php /* Smarty version Smarty-3.1.14, created on 2013-10-17 20:24:27
         compiled from "./templates/nuevareparacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212575065252534d3ba16377-72304522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47172af44450fd6a14c291836d47138c218aa97c' => 
    array (
      0 => './templates/nuevareparacion.tpl',
      1 => 1382052229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212575065252534d3ba16377-72304522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52534d3ba185a8_86722655',
  'variables' => 
  array (
    'clientes' => 0,
    'cliente' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52534d3ba185a8_86722655')) {function content_52534d3ba185a8_86722655($_smarty_tpl) {?><br>
<div class="container">
	<form class="text-left" method="POST" action="" id="form_nuevarep">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Cliente</span>
			<select class="form-control input-sm detallemodal" name="cliente" required autofocus>
				<?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value){
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value['apellido'];?>
</option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group col-lg-12 input-group">
		<span class="input-group-addon input-sm detallemodal">Articulo</span>
			<input class="form-control input-sm" type="text" name="articulo" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Marca</span>
			<input class="form-control input-sm" type="text" name="marca">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Modelo</span>
			<input class="form-control input-sm" type="text" name="modelo">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Nro. Serie</span>
			<input class="form-control input-sm" type="text" name="serie">
		</div> 
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Problema</span>
			<textarea class="form-control input-sm" name="problema" required></textarea>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Notas</span>
			<textarea class="form-control input-sm" name="notas"></textarea>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Estado</span>
			<select class="form-control input-sm detallemodal" name="estado" required>
				<?php  $_smarty_tpl->tpl_vars['estado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['estado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['estado']->key => $_smarty_tpl->tpl_vars['estado']->value){
$_smarty_tpl->tpl_vars['estado']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value['nombre_estado'];?>
</option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" name="precio">
		</div> 
		<div class="form-group col-lg-12">
			<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
			<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
		</div>
	</form>
</div>
<?php }} ?>