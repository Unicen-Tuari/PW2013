<?php /* Smarty version Smarty-3.1.14, created on 2013-10-25 06:23:05
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93995251add9438982-48097954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1382674980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93995251add9438982-48097954',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5251add954a206_12467998',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5251add954a206_12467998')) {function content_5251add954a206_12467998($_smarty_tpl) {?><form id="formulariocontacto" class="text-center"  method="post" action="#">
	<ul>
	    <li>
	    	<h2>Contactanos!!</h2>
			</li>
			<li>
				<label for="nombre"><span class="requerido">* </span>Nombre y &nbsp;&nbsp;Apellido:</label>
				<input type="text" id="nombre" placeholder="Nombre y Apellido" required autofocus="autofocus" />
			</li>
			<li>
	        <label for="email"><span class="requerido">* </span>Email:</label>
	        <div><input type="email" id="email" placeholder="Email" required /></div>
	        
	    </li>
	    <li>
	        <label for="telefono">&nbsp;&nbsp;Telefono:</label>
	        <div><input type="tel" id="telefono" placeholder="Telefono"></div>
	    </li>
	    <li>
			<label for="asunto"><span class="requerido">* </span>Asunto:</label>
			<div><input type="text" id="asunto" placeholder="Asunto" required /></div>
		</li>
	    <li>
	        <label for="mensaje"><span class="requerido">* </span>Mensaje:</label>
	        <div><textarea id="mensaje" cols="40" rows="6" required ></textarea></div>
	    </li>
	    <li>
	       <div><button class="botonsubmit" id="submit" type="submit" >Enviar Mensaje</button></div>
	    </li>
	</ul>
</form>
<?php }} ?>