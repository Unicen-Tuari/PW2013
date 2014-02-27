<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 12:36:16
         compiled from "./templates/consulta_turnos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123293902952824af040f729-05243347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad37883b9e4288780107079a6ddcd41c08b67f8c' => 
    array (
      0 => './templates/consulta_turnos.tpl',
      1 => 1384206776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123293902952824af040f729-05243347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52824af06629e3_46732663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52824af06629e3_46732663')) {function content_52824af06629e3_46732663($_smarty_tpl) {?><div class="post"><h2 class="title" id="fechacons"></h2> <br><br>
	<link href="styles/styletabla.css" rel="stylesheet" type="text/css" media="screen" />
	<legend class="title a"><div class="page">
		<table>		
			<thead> 
				<tr>
					<th>Nombre y Apellido</th> <th>Hora</th> <th>Especialidad</th> <th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Nombre_Apellido'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Hora'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Nom_especialidad'];?>
</td>
						<td><input type="button" name="borrar_turn" value="Borrar" onclick="borrarTurno(<?php echo $_smarty_tpl->tpl_vars['dato']->value['Id_turno'];?>
);"></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>		
</div></legend></div>

<?php }} ?>