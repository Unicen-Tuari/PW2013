{include file = "head.tpl"}
	<body>
		<div id="wrapper">
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
							<div class="post">
							<h2 class="title">Ingrese los datos del medico </h2><br><br>
							<form id="ingresomedico" method="post" action="">
								<legend class="title a">
								<div class="page"> 
									<input type="text" name="nombre"  placeholder="Nombre y Apellido" size="25">
									Especialidad:			
									<select name="especialidad" style="margin:0 5px 0 0">
									<option value="1">Kinesiologia</option>
									<option value="2">Nutricion</option></select><br><br>
									<input type="text" name="localidad" placeholder="Localidad" size="15">
									<input type="text" name="calle"  placeholder="Calle">
									<input type="numeric" name="num" placeholder="Nº" size="4"><br><br>
									<input type="tel" name="tel"  placeholder="Telefono" size="13">
									<input type="email" name="mail"  placeholder="E-mail" size="20"><br><br>
									<input type="submit" value="Cargar Medico">
								</select><br><br>
							</div>
						</legend>
					</form>
					</div>
							<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
						</div>
						<div id="sidebar">
							<!-- BARRA LATERAL -->
							<div id="logo">
								<h1><a>Agregar medico</a></h1>
							</div>
							{include file = "menu.tpl"}
							<!-- FIN BARRA LATERAL -->
						</nav>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
{include file = "footer.tpl"}
