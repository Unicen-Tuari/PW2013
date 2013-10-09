{include file = "head.tpl"}
	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
								<div class="post"><h2 class="title">Ingrese el nombre del paciente </h2></div>
								<div id="search" >
									<form id="cons_pacientes" method="post" action="">
									<div>
										<input type="text" name="search-text" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
									</form>
								</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Informacion del Paciente</a></h1>
							</div>
							{include file = "menu.tpl"}
							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
{include file = "footer.tpl"}
