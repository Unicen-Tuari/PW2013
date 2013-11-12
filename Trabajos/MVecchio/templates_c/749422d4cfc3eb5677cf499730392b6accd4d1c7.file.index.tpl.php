<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 06:48:01
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201055277e941299e84-71822599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1383630474,
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
					</div>					
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