<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 02:22:33
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:645052533be2c65a63-22821353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1381191076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645052533be2c65a63-22821353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52533be2ea3e68_74772019',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52533be2ea3e68_74772019')) {function content_52533be2ea3e68_74772019($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


 		<div class="container">
				<div class="nombre_producto">
					<h2>Contacto</h2>
					
					<p>Direccion | Localidad | Correo | Telefono</p>

				</div>
				<div class="left">
					<fieldset>
						<legend>QUI&Eacute;NES SOMOS?</legend>
					<p class="descripcion"> id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

					</fieldset>
				</div>
				<div class="right">
					<fieldset>
						<legend>CONSULTA</legend>
							<form id="formcontacto">
								Correo:<br><input type="text" id="correo" autofocus><br><br>
								Consulta:<br><textarea type="text" id="consulta" rows="4" cols="50"></textarea><br><br>
								<input type="submit" value="Enviar Consulta">
							</form>
					</fieldset>
				</div>
				</div>
			</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>