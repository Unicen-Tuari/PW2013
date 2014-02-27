<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 01:15:41
         compiled from "./templates/cargar_medicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2435608045281ab6d82e384-62806937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b94928ac319700768e51f58300b7ebf0e6343dc' => 
    array (
      0 => './templates/cargar_medicos.tpl',
      1 => 1383805716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435608045281ab6d82e384-62806937',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281ab6d86d4b9_58237925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281ab6d86d4b9_58237925')) {function content_5281ab6d86d4b9_58237925($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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