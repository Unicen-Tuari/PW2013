<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 06:27:07
         compiled from "./templates/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19627130455281b5d1a583d7-41230402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ddb70c7564c38239add3a213818e1d84b39bba' => 
    array (
      0 => './templates/cart.tpl',
      1 => 1384248425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19627130455281b5d1a583d7-41230402',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281b5d1a934d9_83413575',
  'variables' => 
  array (
    'productos' => 0,
    'prod' => 0,
    'total' => 0,
    'usuario_mail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281b5d1a934d9_83413575')) {function content_5281b5d1a934d9_83413575($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <div class="productos_container">
 	<div class="f_index_productos">

 		<div class="panel panel-default">
		  
		  	<div class="panel-heading">
		  		<a href="/cart"><span class="glyphicon glyphicon-refresh"></span></a> Carrito de Compras
		  	</div>

	  		<table class="table table-striped">
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th class="cart_icon"></th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value){
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
				<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['prod']->value['producto_nombre'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['prod']->value['precio'];?>
</th>
					<th class="cart_icon"><a href="/cart/erase/<?php echo $_smarty_tpl->tpl_vars['prod']->value['producto_id'];?>
"><span class="glyphicon glyphicon-remove login-close"></span></a></th>
				</tr>
				<?php } ?>
				<tr >
					<th class="cart_total">Total</th>
					<th class="cart_total">$<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</th>
					<th class="cart_icon">
						<?php if ($_smarty_tpl->tpl_vars['usuario_mail']->value==-1){?>
							
							<div id="tooltip1" title="Debe iniciar sesión para proceder con la compra.">
								<button type="button" class="btn  btn-primary" disabled="disabled">Checkout</button>
							</div>
						<?php }else{ ?>
							<a href="/cart/checkout"><button type="button" class="btn  btn-primary">Checkout</button></a>
						<?php }?>
					</th>
				</tr>
	  		</table>


		</div>

 	</div>
 </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>