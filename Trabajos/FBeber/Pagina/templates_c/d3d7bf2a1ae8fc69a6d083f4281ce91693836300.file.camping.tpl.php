<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 12:17:51
         compiled from "templates\camping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257065253db32df8426-12022480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d7bf2a1ae8fc69a6d083f4281ce91693836300' => 
    array (
      0 => 'templates\\camping.tpl',
      1 => 1381227468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257065253db32df8426-12022480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253db33152049_95981588',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253db33152049_95981588')) {function content_5253db33152049_95981588($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


			<div class="categoria">
				<h2>Categorias:</h2>
				
				<a class="categoria" href="./links/carpas.php"><img id="imagen_min" height= '100px'; alt="carpas" class="agrandarimagen" src="./images/camping/carpas.jpg"></a>
				
				<a class="categoria" href="./links/bolsas.php"><img id="imagen_min" height= '100px'; alt="bolsas" class="agrandarimagen" src="./images/camping/bolsas.jpg"></a>
				
				<a class="categoria" href="./links/optica.php"><img id="imagen_min" height= '100px'; alt="optica_recreativa"class="agrandarimagen" src="./images/camping/optica.jpg"></a>
				
				<a class="categoria" href="./links/linternas.php"><img id="imagen_min" height= '100px'; alt="linternas" href="./links/linternas.php" class="agrandarimagen" src="./images/camping/linternas.jpg"></a>
				
				<a class="categoria" href="./links/mochilas.php"><img id="imagen_min" height= '100px'; alt="mochilas" class="agrandarimagen" src="./images/camping/mochilas.jpg"></a>
				
				<a class="categoria" href="./links/accesorios.php"><img id="imagen_min" height= '100px'; alt="accesorios" class="agrandarimagen" src="./images/camping/accesorios.jpg"></a>
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>