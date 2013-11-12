<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 16:30:08
         compiled from "./templates/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328464476527dff3d08e115-65750888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566f5794b6a64bbcb83596184b4ac30cafe28918' => 
    array (
      0 => './templates/signup.tpl',
      1 => 1384284590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328464476527dff3d08e115-65750888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527dff3d0cc7d9_82012628',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527dff3d0cc7d9_82012628')) {function content_527dff3d0cc7d9_82012628($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="f_signup_form navbar-inverse" id="f_signup_pre">
	<div class="f_signup_content">
	<h4>Registrar un nuevo usuario</h4>
	<form  action="/signup/newUser" method="post" id="newUserForm" name="newUserForm" onSubmit="return validateSignUp();">
		<div class="form-group ">
            <input type="text" name="usuario_nombre" id="usuario_nombre" class="form-control" placeholder="Nombre" required="true">
            <input type="email" name="usuario_mail" id="usuario_mail" class="form-control" placeholder="Email" required="true">
            
        </div>
        <div class="form-group ">
            <input type="password" name="usuario_pass1" id="usuario_pass1" class="form-control" placeholder="Contraseña" required="true">
            <input type="password" name="usuario_pass2" id="usuario_pass2" class="form-control" placeholder="Repita la contraseña" required="true">
        </div>
        <div id="pass_error">
            <p>Las contraseñas no coinciden.</p>
        </div>
        <div class="form-group ">
            <input type="text" name="usuario_direccion" id="usuario_direccion" class="form-control" placeholder="Dirección" required="true">
            <input type="text" name="usuario_ciudad" id="usuario_ciudad" class="form-control" placeholder="Ciudad" required="true">
            <input type="text" name="usuario_provincia" id="usuario_provincia" class="form-control" placeholder="Provincia" required="true">
            <input type="text" name="usuario_codigopostal" id="usuario_codigopostal" class="form-control" placeholder="Código Postal" required="true">
        </div>
        <button type="submit" id="newUser_btn" name="newUser_btn" class="btn btn-default">Enviar</button>
	</form>
	</div>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>