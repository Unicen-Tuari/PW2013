{include file = "head.tpl"}
	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							{if isset($datos)}
								<div class="post"><h2 class="title">Informacion del paciente</h2> <br><br>
								<legend class="title a"><div class="page">
									Nombre y apellido: {$datos.Nombre_Apellido} <br>
									D.N.I: {$datos.DNI} <br>
									Direccion: {$datos.Calle} &nbsp &nbsp Nº: {$datos.Numero} &nbsp &nbsp Localidad: {$datos.Localidad} <br>
									Telefono: {$datos.Telefono} &nbsp &nbsp Movil: {$datos.Movil} <br>
									Correo electronico: {$datos.Mail} <br>
									Fecha de nacimiento: {$datos.Fecha_nac} <br>
									Obra Social: {$datos.Obr_soc} &nbsp &nbsp Numero de afiliado: {$datos.Num_afiliado} <br><br>
									<input type="button" onclick="" name="historia" value="Historia Clinica">									
								</div></legend></div>
							{else}
								<div class="post"><h2 class="title">Ingrese el nombre del paciente </h2></div><div id="search" >
								<form method="post" action="kinesiologia.php"><div><input type="text" name="s" id="search-text" value="" /><input type="submit" id="search-submit" value="GO" />
								</div></form></div>
							{/if}
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
