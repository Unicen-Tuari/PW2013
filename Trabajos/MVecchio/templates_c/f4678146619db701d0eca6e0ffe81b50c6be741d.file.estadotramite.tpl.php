<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 20:42:35
         compiled from ".\templates\estadotramite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25236527aa0dbd824a4-08097694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4678146619db701d0eca6e0ffe81b50c6be741d' => 
    array (
      0 => '.\\templates\\estadotramite.tpl',
      1 => 1383853322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25236527aa0dbd824a4-08097694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527aa0dbe03345_97747348',
  'variables' => 
  array (
    'tramites' => 0,
    'tramite' => 0,
    'reparacion' => 0,
    'clase' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527aa0dbe03345_97747348')) {function content_527aa0dbe03345_97747348($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tramites']->value)){?>
<!--//Muestro tabla con todos los tramites del cliente que esta logueado!-->
	<table class="table table-responsive">
		<thead>
			<tr class="">
				<th class="text-center">Nombre</th>
				<th class="text-center">Fecha Inicio</th>
				<th class="text-center">id Automotor</th>
				<th class="text-center">Marca</th>
				<th class="text-center">Modelo</th>
				<th class="text-center">Estado</th>
				<th class="text-center">Precio</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['tramite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tramite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tramites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tramite']->key => $_smarty_tpl->tpl_vars['tramite']->value){
$_smarty_tpl->tpl_vars['tramite']->_loop = true;
?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tramite']->value['estado'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="Finalizado"){?>
					<?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("success", true, 0);?>
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['reparacion']->value['estado'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="Proceso"){?>
					<?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("active", true, 0);?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("warning", true, 0);?>
				<?php }}?>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['clase']->value;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['fecha_inicio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['id_automotor'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['marca'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['modelo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['estado'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['tramite']->value['valor'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>	
	<h4>Aun no tenes ning&uacute;n tr&aacute;mite con nosotros</h4>		
<?php }?> 
	
	<?php }} ?>