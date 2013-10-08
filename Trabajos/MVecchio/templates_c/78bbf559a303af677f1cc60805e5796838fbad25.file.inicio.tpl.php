<?php /* Smarty version Smarty-3.1.14, created on 2013-08-18 18:30:06
         compiled from "inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249521137e5d0ff73-50895117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78bbf559a303af677f1cc60805e5796838fbad25' => 
    array (
      0 => 'inicio.tpl',
      1 => 1376861380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249521137e5d0ff73-50895117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521137e5dfc8d8_55928556',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521137e5dfc8d8_55928556')) {function content_521137e5dfc8d8_55928556($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

	<body>
		<div id="contenedorgeneral">
			<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

			<div class="target"  id="contenedorcentral">
				<article  id="articulo" >
					<div id="inicio">
						<h1>Gestoria del Automotor Carlos Nievas<h1>
							<ul id="datos">
								<li>Direccion</li>
								<li>Telefono</li>
								<li>Olavarria</li>
							</ul>
						<div class="cajita">
							<p>Comprar y vender un automotor es sencillo, pero suele ser complejo cuando cometemos el error de no ocuparnos previamente de la consulta registral de dominio (automotor) antes de la operaci&oacute;n, es aqu&iacute; en donde puede contar con nosotros para guiarlo en un resultado claro y &oacute;ptimo, para que su decisi&oacute;n sea la correcta al momento de invertir.-</p>
						</div>
						<div class="cajita">
							<h3>Ya sos Cliente???<h3><br>
							<p>Entonces hace uso de nuestra web!!:</p><br> 
							<ul>
								<li>Verific&aacute; el estado de tus Tr&aacute;mites.</li>
								<li>Informate de todos los Servicios que te brindamos como cliente!</li>
								<li>Pasa por nuestra seccion Venta de Automotores y public&aacute; automotores GRATIS!!</li>
							</ul>
						</div>
						<div class="cajita">
							<h3>No sos Cliente???<h3><br>
							<p>Consultanos mediante la secci&oacute;n Contacto!</p>
						</div>

				</article>
				<aside id="contenedorlateral">
						<?php echo $_smarty_tpl->getSubTemplate ("loguin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

									
						<?php echo $_smarty_tpl->getSubTemplate ("publis.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
				
				</aside>
			</div>			
		</div>
	</body>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	</html>
<?php }} ?>