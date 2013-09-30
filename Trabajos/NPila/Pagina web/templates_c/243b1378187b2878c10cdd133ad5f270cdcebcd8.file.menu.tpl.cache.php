<?php /* Smarty version Smarty-3.1.14, created on 2013-09-25 20:07:09
         compiled from "./templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52159641752436c9d300666-05854302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1380149199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52159641752436c9d300666-05854302',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52436c9d302b34_51440458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52436c9d302b34_51440458')) {function content_52436c9d302b34_51440458($_smarty_tpl) {?><div id="menu">
	<ul class="nav">
		<li >
			<a  href="index.php">Inicio</a>
		</li>
		<li >
			<a>Pacientes</a>
			<ul>
				<li class="submen"><a href="ipacientes.php">Ingresar Paciente</a></li>
				<li class="submen"><a href="pacientes.php">Consultar Paciente</a></li>
				<li class="submen"><a href="ainfopaciente.php">Actualizar Paciente</a></li>
				<li class="submen"><a href="ahistclinica.php">Actualizar Historial</a></li>
				<li class="submen"><a href="bpacientes.php">Borrar Paciente</a></li>
			</ul>
		</li>
		<li>
			<a>Turnos</a>
			<ul>
				<li class="submen"><a href="turnos.php">Consultar Turnos</a></li>
				<li class="submen"><a href="dturnos.php">Dar Turnos</a></li>
			</ul>
		</li>
		<li >
			<a>Medicos</a>
			<ul>
				<li class="submen"><a href="#">Consultar Medico</a></li>
				<li class="submen"><a href="amedicos.php">Ingresar Medico</a></li>
				<li class="submen"><a href="bmedico.php">Borrar Medico</a></li>
			</ul>
		</li>
	</ul>
</div>
<?php }} ?>