<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 17:40:39
         compiled from "./templates/contacto.html" */ ?>
<?php /*%%SmartyHeaderCode:81648233251a91e0d74cca7-86967028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3739346eb33b223baa3c462ee610484a642e1bf' => 
    array (
      0 => './templates/contacto.html',
      1 => 1372279229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81648233251a91e0d74cca7-86967028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a91e0d8ea4c0_37820829',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a91e0d8ea4c0_37820829')) {function content_51a91e0d8ea4c0_37820829($_smarty_tpl) {?>		<section id="principal">
			<aside id="contenido_aside">
		<img class="imgs_slide" src="imagenes/comidas/c16.jpg"></img>
		<img class="imgs_slide" src="imagenes/comidas/c15.jpg"></img>
		<img class="imgs_slide" src="imagenes/comidas/c14.jpg"></img>
		<img class="imgs_slide" src="imagenes/comidas/c13.jpg"></img>
			</aside>
			<article id="articulo">
				<section class="formulario">
					<form action="contacto.php" method="post">
						<label for="nombre">Nombre:</label>
		 				<input id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido"required="" /></br>		
		 				<label for="email">Email:</label>		
		 				<input id="email" type="email" name="email" placeholder="ejemplo@correo.com"required="" /></br>		
		 				<label for="mensaje">Mensaje:</label>		
		 				<textarea id="mensaje" name="mensaje" placeholder="Mensaje" required=""></textarea></br>
		 				<input id="submit" type="submit" name="submit" value="Enviar" />	
					</form>		
		  		</section>		
			</article>
		</section><?php }} ?>