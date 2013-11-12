<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 19:58:10
         compiled from ".\templates\cpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13045527862a49cf471-33281324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145bd0ecc8be05ac5087bc4bdad5f60aa03be540' => 
    array (
      0 => '.\\templates\\cpanel.tpl',
      1 => 1384280513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13045527862a49cf471-33281324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527862a4a50313_72368127',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527862a4a50313_72368127')) {function content_527862a4a50313_72368127($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

			<nav>
				<ul class="menu">
					<li><a onClick="window.location='../index.php'">Inicio</a></li>
					<li>Clientes
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','insertcliente.php'); return false">Nuevo Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','editcliente.php'); return false">Editar Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','getcliente.php'); return false">Listar Clientes</a></li>
							<li><a href="" onClick="getPage('articuloadmin','delcliente.php'); return false">Borrar Cliente</a></li>
						</ul>
					</li>
					<li>Tr&aacute;mites
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','inserttramite.php'); return false">Nuevo Tr&aacutemite</a></li>
							<li><a href="" onClick="getPage('articuloadmin','edittramite.php'); return false">Actualizar Estado</a></li>
							<li><a href="" onClick="getPage('articuloadmin','gettramite.php'); return false">Listar Tr&aacutemites</a></li>
							<li><a href="" onClick="getPage('articuloadmin','deltramite.php'); return false">Borrar Tr&aacutemite</a></li>
						</ul>
					</li>
					<li>Vehiculos
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','insertvehiculo.php'); return false">Nuevo Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','edirvehiculo.php'); return false">Editar Vehiculo</a></li>
							<li><a href="" onClick="getPage('articuloadmin','getvehiculo.php'); return false">Listar Vehiculos</a></li>
							<li><a href="" onClick="getPage('articuloadmin','delvehiculo.php'); return false">Borrar Vehiculo</a></li>
						</ul>
					</li>
					<li>Estadisticas
						<ul class="submenu">
							<li><a href="" onClick="getPage('articuloadmin','estadisticaclientes.php'); return false">Por Cliente</a></li>
							<li><a href="" onClick="getPage('articuloadmin','estadisticasautos.php'); return false">Por Vehiculo</a></li>
						</ul>
					</li>
					<li><a id="adminlogout">Salir</a></li>					
				</ul>
			</nav>
			<div class="target"  id="contenedorcentral">
				<h1 class="titulo">Panel de Administrador</h1>
				<article  id="articuloadmin" >
					<div id="inicio">
						<p>Desde este panel vas a poder Administrar:</p>
						<p>Clientes</p>
						<p>Tr&aacute;mites</p>
						<p>Automotores</p><br>
						<p>Adem&aacute;s controla tus Estad&iacute;sticas!</p>
					</div>
					
						<p></p>
				</article>
			</div>	
		</div>		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

<?php }} ?>