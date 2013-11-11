<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 18:49:30
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14327526ace7c705e14-03557997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1383932943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14327526ace7c705e14-03557997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ace7c76b736_27211829',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ace7c76b736_27211829')) {function content_526ace7c76b736_27211829($_smarty_tpl) {?><form id="formcontacto" name="formcontacto" method="post" action="">
	<ul>
		<li>
    		<h2>Contactanos!!</h2>
		</li>
		<li>
			<label for="nombre"><span class="requerido">* </span>Nombre Completo:</label>
			<input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required autofocus="autofocus" />
		</li>
		<li>
	        <label for="email"><span class="requerido">* </span>Email:</label>
	        <input type="email" id="email" name="email" placeholder="Email" required />
	    </li>
	    <li>
	        <label for="telefono">&nbsp;&nbsp;Telefono:</label>
	        <input type="tel" class="input" id="telefono" name="telefono"placeholder="Telefono">
	    </li>
	    <li>
				<label for="asunto"><span class="requerido">* </span>Asunto:</label>
				<input type="text" id="asunto" name="asunto" placeholder="Asunto" required />
			</li>
	    <li>
	        <label for="mensaje"><span class="requerido">* </span>Mensaje:</label>
	        <textarea id="mensaje" name="mensaje" cols="40" rows="6" required placeholder="Tu Mensaje"></textarea>
	    </li>
	    <li>
	    	<button id="submitcontacto" type="submit" class="btn btn-primary" onclick="enviar();">Enviar Mensaje</button><br>
	    	<h4 id="result" class="succes" style="display: none;"></h4>
	    </li>
	</ul>
</form>
	
	    	<?php }} ?>