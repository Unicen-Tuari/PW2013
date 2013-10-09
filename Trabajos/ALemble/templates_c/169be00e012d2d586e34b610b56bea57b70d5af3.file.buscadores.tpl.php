<?php /* Smarty version Smarty-3.1.15, created on 2013-10-08 09:51:06
         compiled from ".\templates\buscadores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284515253ffba6b30f5-74879427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169be00e012d2d586e34b610b56bea57b70d5af3' => 
    array (
      0 => '.\\templates\\buscadores.tpl',
      1 => 1381236527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284515253ffba6b30f5-74879427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5253ffba726a56_78687770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253ffba726a56_78687770')) {function content_5253ffba726a56_78687770($_smarty_tpl) {?><div class='datbox-aside'>
	<div class='form-title'>Buscadores</div>
	<center>
	<form name="busqueda_mult">
		<input class='box-aside' type="text" name="busqueda" id="busqueda" placeholder="Buscar"/><br>
		<input type="checkbox" name="broms" value="">Buscar en Brom's</input><br>
		<input type="checkbox" name="torrentz" value="">Torrentz</input>
		<input type="checkbox" name="filecrop" value="">Filecrop</input>
		<input type="checkbox" name="imdb" value="">IMDB</input><br>
		<input type="checkbox" name="subdivx" value="">Subdivx</input>
		<input type="checkbox" name="skydrow" value="">Skidrow Games</input>
		<input type="checkbox" name="youtube" value="">Youtube</input>
		<button type='button' class='boton-aside'  onclick="netsearch()">Buscar</button><br>
		Seleccione solo una opcion
	</form>
	</center>
</div><?php }} ?>
