<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 01:08:48
         compiled from "./templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144528240452423eb899e0e0-17156310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1384228889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144528240452423eb899e0e0-17156310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52423eb89a2fe1_38206769',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52423eb89a2fe1_38206769')) {function content_52423eb89a2fe1_38206769($_smarty_tpl) {?><div id="menu">
	<ul class="nav">
		<li >
			<a href="index.php">Inicio</a>
		</li>
		<li >
			<a>Pacientes</a>
			<ul>
				<li class="submen"><a href="informacion_paciente.php">Consultar Paciente</a></li>
				<li class="submen"><a href="agregar_pacientes.php">Ingresar Paciente</a></li>
			</ul>
		</li>
		<li>
			<a>Turnos</a>
			<ul>
				<li class="submen"><a href="turnos.php">Consultar Turnos</a></li>
				<li class="submen"><a href="dar_turnos.php">Dar Turnos</a></li>
			</ul>
		</li>
		<li >
			<a>Medicos</a>
			<ul>
				<li class="submen"><a href="medicos.php">Consultar Medico</a></li>
				<li class="submen"><a href="agregar_medicos.php">Ingresar Medico</a></li>
			</ul>
		</li>
		<li>
			<a href="logout.php" id="logout">Logout</a>
		</li>
	</ul>
</div>
<?php }} ?>