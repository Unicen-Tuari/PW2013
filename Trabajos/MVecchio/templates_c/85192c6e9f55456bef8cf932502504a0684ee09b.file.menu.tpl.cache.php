<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 23:42:42
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20051521595e2101bf0-27758458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1381200097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20051521595e2101bf0-27758458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521595e21073a9_49292398',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521595e21073a9_49292398')) {function content_521595e21073a9_49292398($_smarty_tpl) {?>			<nav>
				<ul class="menu">
					<li><a href="inicio.php">Inicio</a></li>
					<li>Servicios
						<ul class="submenu">
							<li><a href="estadotransferencia.php" onClick="getPage('articulo','estadotransferencia.php'); return false">Estado de Transferencias</a></li>
							<li><a href="publicarautomotor.php" onClick="getPage('articulo','publicarautomotor.php'); return false">Publicar Automotor</a></li>
						</ul>
					</li>
					<li><a href="clientes.php" onClick="getPage('articulo','clientes.php'); return false">Clientes Amigos</a></li>
					<li><a href="links.php" onClick="getPage('articulo','links.php'); return false">Links de Inter&eacute;s</a></li>
					<li>Cuenta
						<ul class="submenu">
							<li><a href="editardatos.php" onClick="getPage('articulo','editardatos.php'); return false">Editar Datos</a></li>
							<li><a href="agregarautomotor.php" onClick="getPage('articulo','agregarautomotor.php'); return false">Agregar Automotor</a></li>
						</ul>
					</li>
					<li><a href="contacto.php" onClick="getPage('articulo','contacto.php'); return false">Contacto</a></li>
				</ul>
			</nav>				
<?php }} ?>