<?php /* Smarty version Smarty-3.1.14, created on 2013-08-12 14:40:16
         compiled from "./templates/lista_turnosk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56602421952091e002063a1-70110064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc10d01488cc45e884e0455c45eb5920e08e9cdc' => 
    array (
      0 => './templates/lista_turnosk.tpl',
      1 => 1376088462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56602421952091e002063a1-70110064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52091e00256299_03603341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52091e00256299_03603341')) {function content_52091e00256299_03603341($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
									<form>
										Turnos del dia: 									
										<select name="dia" style="margin:0 5px 0 0">
											<option id="" value="" selected="">Día</option>
											<option id="1" value="1">1</option>
											<option id="2" value="2">2</option>
											<option id="3" value="3">3</option>
											<option id="4" value="4">4</option>
											<option id="5" value="5">5</option>
											<option id="6" value="6">6</option>
											<option id="7" value="7">7</option>
											<option id="8" value="8">8</option>
											<option id="9" value="9">9</option>
											<option id="10" value="10">10</option>
											<option id="11" value="11">11</option>
											<option id="12" value="12">12</option>
											<option id="13" value="13">13</option>
											<option id="14" value="14">14</option>
											<option id="15" value="15">15</option>
											<option id="16" value="16">16</option>
											<option id="17" value="17">17</option>
											<option id="18" value="18">18</option>
											<option id="19" value="19">19</option>
											<option id="20" value="20">20</option>
											<option id="21" value="21">21</option>
											<option id="22" value="22">22</option>
											<option id="23" value="23">23</option>
											<option id="24" value="24">24</option>
											<option id="25" value="25">25</option>
											<option id="26" value="26">26</option>
											<option id="27" value="27">27</option>
											<option id="28" value="28">28</option>
											<option id="29" value="29">29</option>
											<option id="30" value="30">30</option>
											<option id="31" value="31">31</option>
										</select>
										<select name="mes" style="margin:0 5px 0 0" >
											<option id="" value="" selected="">Mes</option>
											<option id="1" value="1">Enero</option>
											<option id="2" value="2">Febrero</option>
											<option id="3" value="3">Marzo</option>
											<option id="4" value="4">Abril</option>
											<option id="5" value="5">Mayo</option>
											<option id="6" value="6">Junio</option>
											<option id="7" value="7">Julio</option>
											<option id="8" value="8">Agosto</option>
											<option id="9" value="9">Septiembre</option>
											<option id="10" value="10">Octubre</option>
											<option id="11" value="11">Noviembre</option>
											<option id="12" value="12">Diciembre</option>
										</select><br><br><br>
										<input type="submit" value="Listar turnos">
									</legend>
								</form>
							</legend>
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
									<li><a href="kinesiologia.php">Kinesiologia</a></li>
									<li><a href="#">Cancelar un turno</a></li>
									<li><a href="#">Modificar un turno</a></li>
									<li><a href="#">Ver turnos dados</a></li>
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