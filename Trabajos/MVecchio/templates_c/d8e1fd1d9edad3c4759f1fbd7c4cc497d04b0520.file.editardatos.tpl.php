<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 05:26:40
         compiled from ".\templates\editardatos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4759526ace76585b46-80939852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e1fd1d9edad3c4759f1fbd7c4cc497d04b0520' => 
    array (
      0 => '.\\templates\\editardatos.tpl',
      1 => 1384230353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4759526ace76585b46-80939852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ace765eb468_63432661',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ace765eb468_63432661')) {function content_526ace765eb468_63432661($_smarty_tpl) {?><!--//Muestro tabla con todos los datos del cliente que esta logueado!-->
	<form class="text-center" id="formcontacto" method="post" action="">
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