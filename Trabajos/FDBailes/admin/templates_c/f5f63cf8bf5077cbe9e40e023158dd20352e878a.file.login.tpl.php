<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 19:54:19
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83564706252533b26c08309-33397888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1381186456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83564706252533b26c08309-33397888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52533b26ca9721_03119799',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52533b26ca9721_03119799')) {function content_52533b26ca9721_03119799($_smarty_tpl) {?><!DOCTYPE html>	
<html>
<head>
	<title>TT Taller de Reparacion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="../css/own.css" media="screen">
</head>
<body>
	<div class="container">
		<form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
			<legend class="text-center">DataOS Administración</legend>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Usuario" class="form-control" autofocus required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div> 
	<script type="text/javascript" src="../js/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/admin.js"></script>
</body>
</html><?php }} ?>