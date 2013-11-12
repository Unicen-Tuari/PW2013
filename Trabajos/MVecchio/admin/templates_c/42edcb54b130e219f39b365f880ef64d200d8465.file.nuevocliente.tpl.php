<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 06:08:56
         compiled from ".\templates\nuevocliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83205281b7e8263177-50997588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42edcb54b130e219f39b365f880ef64d200d8465' => 
    array (
      0 => '.\\templates\\nuevocliente.tpl',
      1 => 1384232906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83205281b7e8263177-50997588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281b7e8312e22_80942368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281b7e8312e22_80942368')) {function content_5281b7e8312e22_80942368($_smarty_tpl) {?><form class="formulario" method="post" action="">
	<ul>
	    <li>
    		<h2>Tus datos:</h2>
		</li>
		<input type="text" id="id_cliente" name="id_cliente" hidden value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id_cliente'];?>
"/>
		<li>
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
"/>
		</li>
		<li>
			<label for="apellido">Apellido:</label>
			<input type="text" id="apellido" name="apellido"  required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['apellido'];?>
"/>
		</li>
		<li>
			<label for="direccion">Direccion:</label>
			<input type="text" id="direccion" name="direccion"  required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['direccion'];?>
"/>
		</li>
		<li>
			<label for="telefono">Telefono:</label>
			<input type="text" id="telefono"  name="telefono" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['telefono'];?>
"/>
		</li>
		<li>
			<label for="provincia">Provincia:</label>
			<input type="text" id="provincia" name="provincia" required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['provincia'];?>
" />
		</li>
		<li>
			<label for="localidad">Localidad:</label>
			<input type="text" id="localidad" name="localidad"  required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['localidad'];?>
"/>
		</li>
		<li>
			<label for="email">Email:</label>
			<input type="text" id="email"name="email"  required value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
"/>
		</li>
		<li>
			<label for="razonsocial">Razon Social:</label>
			<input type="text" id="razon_social" name="razon_social"  value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['razon_social'];?>
"/>
		</li>
		<li>
			<label for="web">Web:</label>
			<input type="text" id="web" name="web" placeholder="Direccion Web" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['web'];?>
"/>
		</li>
		 <li>
	       <button id="confirmeditdatos" class="btn btn-primary" type="button" onClick="guardarDatos();">Confirmar</button>
	       <button id="canceleditdatos" class="btn btn-primary" type="button" onClick="getPage('articulo','inicio.php'); return false">Cancelar</button>
	    </li>
	</ul>
</form>	<?php }} ?>