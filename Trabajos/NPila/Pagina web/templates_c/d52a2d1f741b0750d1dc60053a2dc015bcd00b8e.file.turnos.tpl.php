<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 20:50:29
         compiled from "./templates/turnos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1188906404523a1de73b5aa3-55261343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd52a2d1f741b0750d1dc60053a2dc015bcd00b8e' => 
    array (
      0 => './templates/turnos.tpl',
      1 => 1381189825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188906404523a1de73b5aa3-55261343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523a1de751dd62_32829256',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523a1de751dd62_32829256')) {function content_523a1de751dd62_32829256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<div class="post"> 
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<div class="post">
									<h2 class="title">Turnos del dia </h2>
								</div>
								<legend class="title a"><br><br>								
									<form id="cons_turnos" method="post">
										Turnos del dia: 									
										<input type="text" id="fecha" name="fecha" placeholder="MM/DD/AAAA" size="10">
										Especialidad:					
										<select name="especialidad" style="margin:0 5px 0 0">
											<option value="kinesiologia">Kinesiologia</option>
											<option value="nutricion">Nutricion</option>
										</select><br><br><br>
										<input type="submit" value="Listar turnos">
									</form>
								</legend>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
							</div>
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Consulta de Turnos</a></h1>
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