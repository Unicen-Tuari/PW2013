<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 00:57:50
         compiled from "./templates/resconsultapacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629068621527983fe968870-16681068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '267723fe403f1a878dd3f1d8021254fa1ef06340' => 
    array (
      0 => './templates/resconsultapacientes.tpl',
      1 => 1384228119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629068621527983fe968870-16681068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527983fe9f79e5_49585568',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527983fe9f79e5_49585568')) {function content_527983fe9f79e5_49585568($_smarty_tpl) {?><div class="post"><h2 class="title">Informacion del paciente</h2> <br><br>
	<legend class="title a"><div class="page">
		Nombre y apellido: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nombre_Apellido'];?>
 <br>
		D.N.I: <?php echo $_smarty_tpl->tpl_vars['datos']->value['DNI'];?>
 <br>
		Direccion: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Calle'];?>
 &nbsp &nbsp Nº: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Numero'];?>
 &nbsp &nbsp Localidad: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Localidad'];?>
 <br>
		Telefono: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Telefono'];?>
 &nbsp &nbsp Movil: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Movil'];?>
 <br>
		Correo electronico: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Mail'];?>
 <br>
		Fecha de nacimiento: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Fecha_nac'];?>
 <br>
		Obra Social: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Obr_soc'];?>
 &nbsp &nbsp Numero de afiliado: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_afiliado'];?>
 <br><br>
		<input type="button" name="borrar" value="Borrar" onclick="borrarPaciente(<?php echo $_smarty_tpl->tpl_vars['datos']->value['DNI'];?>
);">
		<input type="button" name="historia" value="Historia Clinica" onclick="historia('hist_clin')">
		<div id="hist_clin" style="display:none;"><br>
			<form id="act_hist" method="post" action="">
				<textarea rows="5" cols="400"></textarea><br><br>
				<input type="submit" value="Guardar">
			</form>
		</div>
</div></legend></div>
<?php }} ?>