<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 03:28:40
         compiled from "./templates/amedicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8424552685266eddca16174-97847396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aadcbed7df58de422fee12db929c597984209c8' => 
    array (
      0 => './templates/amedicos.tpl',
      1 => 1383805716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8424552685266eddca16174-97847396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266eddcc12854_88459842',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266eddcc12854_88459842')) {function content_5266eddcc12854_88459842($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<div class="post">
							<h2 class="title">Ingrese los datos del medico </h2><br><br>
							<form id="ingresomedico" method="post" action="">
								<legend class="title a">
								<div class="page"> 
									<input type="text" name="nombre"  placeholder="Nombre y Apellido" size="25">
									Especialidad:			
									<select name="especialidad" style="margin:0 5px 0 0">
									<option value="1">Kinesiologia</option>
									<option value="2">Nutricion</option></select><br><br>
									<input type="text" name="localidad" placeholder="Localidad" size="15">
									<input type="text" name="calle"  placeholder="Calle">
									<input type="numeric" name="num" placeholder="Nº" size="4"><br><br>
									<input type="tel" name="tel"  placeholder="Telefono" size="13">
									<input type="email" name="mail"  placeholder="E-mail" size="20"><br><br>
									<input type="submit" value="Cargar Medico">
								</select><br><br>
							</div>
						</legend>
					</form>
					</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Agregar medico</a></h1>
							</div>
							<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							<!-- FIN BARRA LATERAL -->
						</nav>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>