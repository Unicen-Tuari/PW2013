<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 04:06:56
         compiled from ".\templates\cpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4386527855d24908c2-16945123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145bd0ecc8be05ac5087bc4bdad5f60aa03be540' => 
    array (
      0 => '.\\templates\\cpanel.tpl',
      1 => 1383620778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4386527855d24908c2-16945123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527855d2511757_56641351',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527855d2511757_56641351')) {function content_527855d2511757_56641351($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

			<nav>
				<ul class="menu">
					<li>Clientes
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','nuevocliente.php'); return false">Nuevo Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Clientes</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Cliente</a></li>
						</ul>
					</li>
					<li>Tr&aacute;mites
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Tr&aacutemite</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Actualizar Estado</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Tr&aacutemites</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Tr&aacutemite</a></li>
						</ul>
					</li>
					<li>Vehiculos
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Nuevo Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Editar Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Listar Vehiculos</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Borrar Vehiculo</a></li>
						</ul>
					</li>
					<li>Estadisticas
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Por Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editardatos.php'); return false">Por Vehiculo</a></li>
						</ul>
					</li>
					<li><a id="logout">Salir</a></li>					
				</ul>
			</nav>
			<div class="target"  id="contenedorcentral">
				<h1>Panel de Administrador</h1>
				<article  id="articuloadmin" >

				</article>
			</div>	
		</div>		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

<?php }} ?>