<?php /* Smarty version Smarty-3.1.14, created on 2013-11-11 20:11:19
         compiled from "./templates/mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1244645463528164173f1f36-71957155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f6ee5e82301c41800108b8afe27aeb4e76c73e2' => 
    array (
      0 => './templates/mail.tpl',
      1 => 1384211419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1244645463528164173f1f36-71957155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datospersona' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281641763c503_46277058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281641763c503_46277058')) {function content_5281641763c503_46277058($_smarty_tpl) {?><!DOCTYPE html>	
<html>
	<head>
		<title>TT Taller de Reparacion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			body{
				background:#eee;
			}
		</style>
	</head>
	<body>
		<ul>
			<li>Nombre y Apellido: <?php echo $_smarty_tpl->tpl_vars['datospersona']->value['nombre_apellido'];?>
</li>
			<li>Telefono: <?php echo $_smarty_tpl->tpl_vars['datospersona']->value['telefono'];?>
</li>
			<li>Mail: <?php echo $_smarty_tpl->tpl_vars['datospersona']->value['mail'];?>
</li>
			<li>Consulta: <?php echo $_smarty_tpl->tpl_vars['datospersona']->value['consulta'];?>
</li>
		</ul>	
	</body>
</html><?php }} ?>