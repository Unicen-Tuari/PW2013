<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 04:17:03
         compiled from ".\templates\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159555237b3dd74fb55-85578839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3560a33b9d7564d5295de47eeead6f903f3318a0' => 
    array (
      0 => '.\\templates\\form.tpl',
      1 => 1379384218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159555237b3dd74fb55-85578839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5237b3dd9dfc54_83676975',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5237b3dd9dfc54_83676975')) {function content_5237b3dd9dfc54_83676975($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Formulario Ajax</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Formulario Ajax</h2>
			<p>Formulario para aprender como usar Ajax en el envío de un formulario</p>
		</div>	
	<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nombre </label>
		<span>
			<input id="nombre" name= "nombre" class="element text" maxlength="255" size="8" value=""/>
			<label>Nombre</label>
		</span>
		<span>
			<input id="apellido" name= "apellido" class="element text" maxlength="255" size="14" value=""/>
			<label>Apellido</label>
		</span> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Email </label>
		<div>
			<input id="mail" name="mail" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
		<li class="buttons">
			<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Submit" />
		</li>
			</ul>
		</form>	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>