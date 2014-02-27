<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 02:50:13
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201055277e941299e84-71822599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1384220778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201055277e941299e84-71822599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5277e9413edc56_25613931',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277e9413edc56_25613931')) {function content_5277e9413edc56_25613931($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>
	
			<div id="contenedorcentral">
				<article  id="articulo" >
					<h1>BIENVENIDO A NUESTRA WEB</h1>
					<h1>Gestoria del Automotor Carlos Nievas<h1>
				</article>
				<aside id="contenedorlateral">
					<div id="contenedorlogin">
						<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

					</div>
					<?php echo $_smarty_tpl->getSubTemplate ("publis.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
				
				</aside>
			</div>
		</div>		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }} ?>