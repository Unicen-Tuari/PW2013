<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 16:40:11
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:131596913351a81ed74bd516-35755986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386e744df7e9238f7ec52b4ceb835215e0b2a942' => 
    array (
      0 => './templates/index.html',
      1 => 1372275569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131596913351a81ed74bd516-35755986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a81ed7649299_99721434',
  'variables' => 
  array (
    'titulo' => 0,
    'tel' => 0,
    'direccion' => 0,
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a81ed7649299_99721434')) {function content_51a81ed7649299_99721434($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Comidas de Flor. Delivery de comidas caseras en Tandil.">
		<meta name="keywords" content="Comidas, Tandil, Tortas, Reposteria, Flor, Delivery">
		<link rel="stylesheet" href="estilos/estilos.css" />
		<link rel="stylesheet" href="estilos/formulario.css" />
		<link rel="stylesheet" href="estilos/fuentes.css" />
		<script src="scripts/jquery-2.0.0.js" type="text/javascript"></script>   <!-- Incorporamos librerias de JQuery -->
		<script src="scripts/galeria_promo.js" type="text/javascript"></script>   <!-- Efectos para las imagenes de promociones -->
		<title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>
	</head>
	<body>
		<header>
			<aside id="info_techo">
				<h1 id="titulo_cabecera">
					<a href="http://www.facebook.com/FlorDeChocolate.Reposteria" target="_blank"><img id="img_facebook" class="efectoup" src="imagenes/iconos/ico_facebook.png"></a>
					ComidasDeFlor.com.ar, comer casero es la mejor opción.
				</h1>
				<p id="info_contacto">
					<img id="img_tel" src="imagenes/iconos/tel_ico.png"> <?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
 
					<img id="img_dire" src="imagenes/iconos/ico_dire.png"> <?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>

				</p>
			</aside>
			<article id="imagenes_techo">
				<a href="index.php">
					<img id="logo" class="leverotacion" src="imagenes/logos/logo_cocina.jpg" alt="ComidasDeFlor.com.ar"/>
				</a>
				<div id="imgs_promo">
					<img id="promo1" class="promos" src="imagenes/promociones/miniaturas/1.jpg">
					<img id="promo2" class="promos" src="imagenes/promociones/miniaturas/2.jpg">
					<img id="promo3" class="promos" src="imagenes/promociones/miniaturas/3.jpg">
					<img id="promo4" class="promos" src="imagenes/promociones/miniaturas/4.jpg">
					<img id="promo5" class="promos" src="imagenes/promociones/miniaturas/5.jpg">
				</div>
			</article>
		</header>
		<nav id="menu_nav">
			<ul>
				<li id="inicio" ALT="Ir a ComidasDeFlor.com.ar" class="efectoup"><a href="index.php?seccion=inicio#menu_nav"><img class="imgs_nav" src="imagenes/iconos/icon_home.png" align="bottom">Inicio</a></li>
				<li id="dulce" class="efectoup" alt="Comidas dulces"><a href="index.php?seccion=dulce#menu_nav"><img class="imgs_nav" src="imagenes/iconos/cookie_ico.png" align="bottom">Dulce</a></li>
				<li id="salado" class="efectoup" alt="Comidas saladas"><a href="index.php?seccion=salado#menu_nav"><img class="imgs_nav" src="imagenes/iconos/pizza_ico.png" align="bottom">Salado</a></li>
				<li id="adultos" class="efectoup" alt="Pastelería erótica para adultos"><a href="index.php?seccion=adultos#menu_nav"><img class="imgs_nav" src="imagenes/iconos/cook_ico.png" align="bottom">Pastelería erótica</a></li>
				<li id="flor" class="efectoup" alt="Conozca un poco más de la cocinera"><a href="index.php?seccion=flor#menu_nav"><img class="imgs_nav" src="imagenes/iconos/fcook_ico.png" align="bottom">¿Quién es Flor?</a></li>
				<li id="contacto" class="efectoup" alt="Comuníquese con nosotros"><a href="index.php?seccion=contacto#menu_nav"><img class="imgs_nav" src="imagenes/iconos/mail_ico.png" align="bottom">Contacto</a></li>
			</ul>
		</nav>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['seccion']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<footer id="pie_pagina">
			<p id="texto_footer"> ComidasDeFlor.com.ar | Envíos a domicilio en Tandil | Teléfono: (02262) 15-49-5903 | Dirección: Costa Rica 518 Dto 3, Tandil </p>
		</footer>
	</body>
</html><?php }} ?>