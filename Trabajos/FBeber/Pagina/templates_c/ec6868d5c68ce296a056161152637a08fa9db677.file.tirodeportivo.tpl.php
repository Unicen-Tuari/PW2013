<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 12:27:48
         compiled from "templates\tirodeportivo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285085253dd3514fab2-74916432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec6868d5c68ce296a056161152637a08fa9db677' => 
    array (
      0 => 'templates\\tirodeportivo.tpl',
      1 => 1381228058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285085253dd3514fab2-74916432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253dd35412be3_82919166',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253dd35412be3_82919166')) {function content_5253dd35412be3_82919166($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


			<div class="categoria">
				<br><a href="./consejo_tirodeportivo.php"><button>Consejo para el uso de armas</button></a>
				<h2>Categorias:</h2>
				<a class="categoria" href="./links/rifles.php"><img id="imagen_min" height= '100px'; alt="rifles" class="agrandarimagen" src="./images/tiro_deportivo/rifles.jpg"></a>
			</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>