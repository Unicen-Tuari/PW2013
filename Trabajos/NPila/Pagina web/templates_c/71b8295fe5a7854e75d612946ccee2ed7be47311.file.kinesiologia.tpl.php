<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 17:49:46
         compiled from "./templates/kinesiologia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74350308252091d56b8bc53-05071332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b8295fe5a7854e75d612946ccee2ed7be47311' => 
    array (
      0 => './templates/kinesiologia.tpl',
      1 => 1378846178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74350308252091d56b8bc53-05071332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52091d56c0f3f7_15859191',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52091d56c0f3f7_15859191')) {function content_52091d56c0f3f7_15859191($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?>
								<div class="post"><h2 class="title">Informacion del paciente</h2> <br><br>
								<legend class="title a"><div class="page">
									Nombre y apellido: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nombre_Apellido'];?>
 <br>
									D.N.I: <?php echo $_smarty_tpl->tpl_vars['datos']->value['DNI'];?>
 <br>
									Direccion: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Calle'];?>
 &nbsp &nbsp Nº: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Numero'];?>
 &nbsp &nbsp Localidad: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Localidad'];?>
 <br>
									Telefono: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Telefono'];?>
 &nbsp &nbsp Movil: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Movil'];?>
 <br>
									Correo electronico: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Mail'];?>
 <br>
									Fecha de nacimiento: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Fecha_nac'];?>
 <br>
									Obra Social: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Obr_soc'];?>
 &nbsp &nbsp Numero de afiliado: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_afiliado'];?>
 <br><br>
									<input type="button" onclick="" name="historia" value="Historia Clinica">									
								</div></legend></div>
							<?php }else{ ?>
								<div class="post"><h2 class="title">Ingrese el nombre del paciente </h2></div><div id="search" >
								<form method="post" action="kinesiologia.php"><div><input type="text" name="s" id="search-text" value="" /><input type="submit" id="search-submit" value="GO" />
								</div></form></div>
							<?php }?>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Kinesiologia</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="turnosk.php">Turnos</a></li>
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