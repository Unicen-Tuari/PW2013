<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 02:14:04
         compiled from "./templates/rescunsultakines.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16606153375239f1f27db3d0-08988093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef44747791209f15cb3414c150bbe64908f0e15c' => 
    array (
      0 => './templates/rescunsultakines.tpl',
      1 => 1383628319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16606153375239f1f27db3d0-08988093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5239f1f28999b5_90057700',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239f1f28999b5_90057700')) {function content_5239f1f28999b5_90057700($_smarty_tpl) {?><div class="post"><h2 class="title">Informacion del paciente</h2> <br><br>
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
		<input type="button" name="borrar" value="Borrar">
		<input type="button" name="historia" value="Historia Clinica">
		<input type="button" name="mod_historia" value="Modificar Historia Clinica">
</div></legend></div>
<?php }} ?>