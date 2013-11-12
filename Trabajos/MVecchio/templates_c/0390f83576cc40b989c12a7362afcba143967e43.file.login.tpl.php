<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 04:21:27
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9717526adf43b0bdc1-18997138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1383880424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9717526adf43b0bdc1-18997138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526adf43b0fc41_90916303',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526adf43b0fc41_90916303')) {function content_526adf43b0fc41_90916303($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
	<h4>Bienvenido <p class="text-success"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</p></h4><br>
    <button id="logout" type="submit" class="btn btn-primary">Salir</button>
<?php }else{ ?>	
	<h4>Ingresa con tu Cuenta!</h4>
		<form id="formlogin" name="formlogin" method="post">
			<input id="email" type="text" name="email" placeholder="Email!" required>
			<input id="pass" type="password" name="pass" placeholder="Contrase&ntilde;a"required>
			    <h4 id="error" class="alert alert-danger" style="display: none;"></h4>
			 
			<div class="checkbox">
		        <label>
		          <input id="check"type="checkbox"> Recordarme
		        </label>
		      </div>
		    <button id="signin"type="submit" class="btn btn-primary">Entrar</button>
		</form>
<?php }?> 
<?php }} ?>