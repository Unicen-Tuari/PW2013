<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 21:00:26
         compiled from "./templates/dturnos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145861096523f9406d89f85-59212591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774dc3d8c66f70dc394bf11a20f7b2f0e2905ad3' => 
    array (
      0 => './templates/dturnos.tpl',
      1 => 1383868818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2145861096523f9406d89f85-59212591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523f94071bcfa9_53592368',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523f94071bcfa9_53592368')) {function content_523f94071bcfa9_53592368($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<div class="post"> 
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<div class="post">
									<h2 class="title">Ingresar el turno</h2>
								</div>
								<legend class="title a"><br><br>								
									<form id="formmedico" method="post" action="">
										Nombre y Apellido:
										<input type="text" id="Nombre_apellido" name="Nombre_apellido" placeholder="" size="30">
										<br><br>
										Turnos para el dia: 									
										<input type="text" name="Fecha" id="fecha" placeholder="MM/DD/AAAA" size="10">
										Hora:					
										<input type="text" name="Hora" placeholder="HH:MM" size="5"><br><br><br>
										<input type="submit" value="Dar Turno">
									</form>
								</legend>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
							</div>
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Dar Turnos</a></h1>
							</div>
							<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>