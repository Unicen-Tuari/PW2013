<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 12:20:46
         compiled from "templates\pesca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60465253dc7e3baf91-91303817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5978f47d2ee5dda7b42f39c73cb324607d640ca7' => 
    array (
      0 => 'templates\\pesca.tpl',
      1 => 1381227639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60465253dc7e3baf91-91303817',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253dc7e6a1340_52589354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253dc7e6a1340_52589354')) {function content_5253dc7e6a1340_52589354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


		<div class="categoria">
			
				<h2>Categoria</h2>
				<a class="categoria" href="./links/reels.php"><img id="imagen_min" height= '100px';alt="reels" class="agrandarimagen" src="./images/pesca/reels.jpg"></a>
				
				<a class="categoria" href="./links/canias.php"><img id="imagen_min" height= '100px'; alt="canias" class="agrandarimagen" src="./images/pesca/canias.jpg"></a>
				
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>