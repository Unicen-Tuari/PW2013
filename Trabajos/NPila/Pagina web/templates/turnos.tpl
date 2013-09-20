{include file = "head.tpl"}
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
										<input type="text" id="fecha" name="fecha" placeholder="DD/MM/YYYY" size="10">
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
								<h1><a>Turnos</a></h1>
							</div>
							<nav id="menu">
								<ul>
									<li><a href="index.php">Inicio</a></li>
									<li><a href="dturnos.php">Dar Turno</a></li>
								</ul>
							</nav>
							<!-- FIN BARRA LATERAL -->
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
		<script text="text/javascript" src="scripts/jquery-1.10.0.min.js"></script>
		<script text="text/javascript" src="scripts/ajax.js"></script>
	</body>
</html>
