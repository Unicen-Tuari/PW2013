<?php /* Smarty version Smarty-3.1.14, created on 2013-08-10 20:27:49
         compiled from "./templates/turnosn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10878194925206cc754534b3-26575056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54b68c952497116e51b2612aec7dcf8c9e002ce' => 
    array (
      0 => './templates/turnosn.tpl',
      1 => 1376177179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10878194925206cc754534b3-26575056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5206cc75494fb7_12257161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5206cc75494fb7_12257161')) {function content_5206cc75494fb7_12257161($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<div class="post"> 
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<form name="ingresoturnon" onsubmit="return validaciontn()">
									<legend class="title a"><br><br>
										<input type="text" id="nombre"  placeholder="Nombre y Apellido" size="25"><br><br>
										Fecha: 									
										<select id="dia" style="margin:0 5px 0 0">
											<option >Día</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select id="mes" style="margin:0 5px 0 0" >
											<option>Mes</option>
											<option value="1">Enero</option>
											<option value="2">Febrero</option>
											<option value="3">Marzo</option>
											<option value="4">Abril</option>
											<option value="5">Mayo</option>
											<option value="6">Junio</option>
											<option value="7">Julio</option>
											<option value="8">Agosto</option>
											<option value="9">Septiembre</option>
											<option value="10">Octubre</option>
											<option value="11">Noviembre</option>
											<option value="12">Diciembre</option>
										</select>
										<input type="datetime" id="hora" placeholder="       HH:MM" size="5"><br><br><br><br>
										<input type="submit" value="Dar Turno">
									</legend>
								</form>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
							</div>
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Turnos</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="nutricion.php">Nutricion</a></li>
									<li><a href="#">Cancelar un turno</a></li>
									<li><a href="#">Modificar un turno</a></li>
									<li><a href="lista_turnosn.php">Ver turnos dados</a></li>
								</ul>
							</nav>
							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>