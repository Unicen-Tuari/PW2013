<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 01:26:44
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274965211389859eca5-89119947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1377144697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274965211389859eca5-89119947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521138985a4173_67584492',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521138985a4173_67584492')) {function content_521138985a4173_67584492($_smarty_tpl) {?>			<nav>
				<ul class="menu">
					<li class="selected"><a href="inicio.php">Inicio</a></li>
					<li>Servicios
						<ul class="submenu">
							<li><a href="estadotransferencia.php">Estado de Transferencias</a></li>
							<li><a href="publicarautomotor.php">Publicar Automotor</a></li>
						</ul>
					</li>
					<li><a href="clientes.php">Clientes Amigos</a></li>
					<li><a href="links.php">Links de Inter&eacute;s</a></li>
					<li>Cuenta
						<ul class="submenu">
							<li><a href="editardatos.php">Editar Datos</a></li>
							<li><a href="agregarautomotor.php">Agregar Automotor</a></li>
						</ul>
					</li>
					<li><a href="contacto.php">Contacto</a></li>
				</ul>
			</nav>				
<?php }} ?>