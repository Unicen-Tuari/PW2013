<?php /*%%SmartyHeaderCode:202778934152091dfac61c57-04963829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b368c39e0c305670ee9b89d31e1e9ff7af349a3d' => 
    array (
      0 => './templates/turnosk.tpl',
      1 => 1378919500,
      2 => 'file',
    ),
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1377725217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202778934152091dfac61c57-04963829',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5239f86c4d2214_33807088',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239f86c4d2214_33807088')) {function content_5239f86c4d2214_33807088($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Sistema de gestion</title>
		<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>

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