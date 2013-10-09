<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 01:38:58
         compiled from ".\templates\loguin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21392521595e2114cd4-39885470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12916286f26cb50a687382be5392eeb2a5abb077' => 
    array (
      0 => '.\\templates\\loguin.tpl',
      1 => 1376861238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21392521595e2114cd4-39885470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521595e2119b83_88457640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521595e2119b83_88457640')) {function content_521595e2119b83_88457640($_smarty_tpl) {?><div id="contenedorloguin">
	<h3>Ingresa con tu Cuenta!</h3>
						<form class="loguin" name="loguin" action="" method="" accept-charset="">
							<ul>
								<li>
									<input type="text" name="usuario" placeholder="Email!" required>
								</li>
								<li>
									<input type="password" name="contrasenia" placeholder="Contrase&ntilde;a"required>
								</li>
								<li>
									<input type="checkbox" name="recordarme">
									Recordarme
								</li>
								<li>
									<input class="botonsubmit" type="submit" value="Entrar">
								</li>
							</ul>
						</form>
</div>
<?php }} ?>