<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 02:17:14
         compiled from "./templates/resconsultamedicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203906184952671168905cc4-36635793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f69cf87504a77a6899f3fad9a55ba32a88bab7' => 
    array (
      0 => './templates/resconsultamedicos.tpl',
      1 => 1383628623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203906184952671168905cc4-36635793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52671168938ed3_15124873',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52671168938ed3_15124873')) {function content_52671168938ed3_15124873($_smarty_tpl) {?><div class="post"><h2 class="title">Informacion del medico</h2> <br><br>
	<legend class="title a"><div class="page">
		Nombre y apellido: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nombre_Apellido'];?>
 <br>
		Direccion: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Calle'];?>
 &nbsp &nbsp Nº: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Numero'];?>
 &nbsp &nbsp Localidad: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Localidad'];?>
 <br>
		Telefono: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Telefono'];?>
 &nbsp &nbsp Correo electronico: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Mail'];?>
 <br><br>
		<input type="button" name="borrar" value="Borrar">
</div></legend></div>
<?php }} ?>