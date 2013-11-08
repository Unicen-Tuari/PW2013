<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 03:07:01
         compiled from "./templates/resconsultaturnos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404691915523b3e17283be7-72528555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33cff5bb8fda336a9356b7e3a264831464b91e9c' => 
    array (
      0 => './templates/resconsultaturnos.tpl',
      1 => 1383791136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404691915523b3e17283be7-72528555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523b3e172e3949_92012375',
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523b3e172e3949_92012375')) {function content_523b3e172e3949_92012375($_smarty_tpl) {?><div class="post"><h2 class="title" id="fechacons"></h2> <br><br>
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
						<td><input type="button" name="borrar_turn" value="Borrar" onClick="borrarTurno(<?php echo $_smarty_tpl->tpl_vars['dato']->value['Id_turno'];?>
);"></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>		
</div></legend></div>

<?php }} ?>