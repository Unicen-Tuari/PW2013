<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 01:15:21
         compiled from "./templates/pacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:401418697523bc6b8b446b5-12275198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f478f73432d9d33e4d8eea6a216a127762a85c' => 
    array (
      0 => './templates/pacientes.tpl',
      1 => 1383803912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '401418697523bc6b8b446b5-12275198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523bc6b8dac284_06289236',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523bc6b8dac284_06289236')) {function content_523bc6b8dac284_06289236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="ipaciente">
				<div class="post"> 
				<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
					<h2 class="title">Ingrese los datos del paciente </h2><br> <br>
					<form id="ingresopaciente" method="post" action="">
						<legend class="title a">
							<div class="page"> 
								<input type="text" name="Nombre_Apellido"  placeholder="Nombre y Apellido" size="25">
								<input type="numeric" name="DNI" placeholder="D.N.I." size="7"><br><br>
								<input type="text" name="Localidad" placeholder="Localidad" size="15">
								<input type="text" name="Calle"  placeholder="Calle">
								<input type="numeric" name="Numero" placeholder="Nº" size="4">
								<input type="numeric" name="C_P" placeholder="C.P." size="4"><br><br>
								<input type="tel" name="Telefono"  placeholder="Telefono" size="13">
								<input type="tel" name="Movil"  placeholder="Celular" size="13">
								<input type="email" name="Mail"  placeholder="E-mail" size="20"><br><br>
								Fecha de nacimiento:											
								<input type="text" name="Fecha" id="fecha"  placeholder="MM/DD/AAAA" size="10"><br><br>
								<?php echo $_smarty_tpl->getSubTemplate ("obr_soc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								Especialidad:					
								<select name="Especialidad" style="margin:0 5px 0 0">
									<option value="1">Kinesiologia</option>
									<option value="2">Nutricion</option>
								</select><br><br>
								Antecedentes: 
								<textarea name="Antecedentes" wrap="SOFT" tabindex="0" autocorrect="on"></textarea><br><br>
								<input type="submit" value="Cargar Paciente">
								<input type="button" onclick="history.back()" name="volver atrás" value="Volver">
							</div>
						</legend>
					</form>
				<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
	</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>