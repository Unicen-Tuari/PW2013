<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 15:11:24
         compiled from "./templates/consulta_pacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93708544052824ac8366d63-13916792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5062acdb58f2210d7ed78860d917ee68670f398f' => 
    array (
      0 => './templates/consulta_pacientes.tpl',
      1 => 1384279872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93708544052824ac8366d63-13916792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52824ac864c994_47753013',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52824ac864c994_47753013')) {function content_52824ac864c994_47753013($_smarty_tpl) {?><div class="post"><h2 class="title">Informacion del paciente</h2> <br><br>
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
				<textarea name="historia" rows="5" cols="400"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Antecedentes'];?>
</textarea><br><br>
				<input name="paciente" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['DNI'];?>
" hidden>
				<input type="submit" value="Guardar">
			</form>
		</div>
</div></legend></div>
<?php }} ?>