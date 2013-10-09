<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 23:42:31
         compiled from ".\templates\menuadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1265752534f5200e829-64873202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342728078d19ded60c84a9155b2112e3b299af64' => 
    array (
      0 => '.\\templates\\menuadmin.tpl',
      1 => 1381200123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265752534f5200e829-64873202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52534f52014181_21283792',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52534f52014181_21283792')) {function content_52534f52014181_21283792($_smarty_tpl) {?>			<nav>
				<ul class="menu">
					<li>Administrar Cliente
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Clientes</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Cliente</a></li>
						</ul>
					</li>
					<li>Administrar Tr&aacute;mite
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Tr&aacutemite</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Actualizar Estado</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Tr&aacutemites</a></li>
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Borrar Tr&aacutemite</a></li>
						</ul>
					</li>
					<li>Administrar Vehiculo
						<ul class="submenu">
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Nuevo Vehiculo</a></li>
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Editar Vehiculo</a></li>
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Listar Vehiculos</a></li>
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Borrar Vehiculo</a></li>
						</ul>
					</li>
					<li>Estadisticas
						<ul class="submenu">
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Por Cliente</a></li>
							<li><a href="" onClick="getPage('articulo','editardatos.php'); return false">Por Vehiculo</a></li>
						</ul>
					</li>
					<li><a href="" onClick=";">Salir</li>					
				</ul>
			</nav>				
<?php }} ?>