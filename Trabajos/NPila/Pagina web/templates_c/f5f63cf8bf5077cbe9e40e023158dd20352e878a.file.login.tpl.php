<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 22:55:48
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:515980005524df689015231-22144090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1381110569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '515980005524df689015231-22144090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524df689093e67_36311765',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524df689093e67_36311765')) {function content_524df689093e67_36311765($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div class="post"> 
				<div id="login">
					<h2 class="title">Login </h2><br> <br>
					<form id="formulariologin" method="post" action="">
						<input type="text" name="User" placeholder="Usuario" size="25">
						<input name="Pass" type="password" placeholder="Contraseña" size="25"><br><br><br>
						<input type="submit" value="Ingresar">
					</form>
				</div>
			<div style="clear: both;"></div>
			</div>
		</div>
	<script type="text/javascript" src="scripts/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="scripts/login.js"></script>
	</body>
</html>
<?php }} ?>