{include file = "head.tpl"}
	<body>
		<div id="wrapper">
			<div id="ipaciente">
				<div class="post"> 
				<!-- CONTENIDO DEL CENTRO DE LA PAGINA -->
					<h2 class="title">Ingrese los datos del paciente </h2><br> <br>
					<form name="ingresopaciente" onsubmit="return validacionip()">
						<legend class="title a">
							<div class="page"> 
								<input type="text" id="nombre"  placeholder="Nombre y Apellido" size="25">
								<input type="numeric" id="dni" placeholder="D.N.I." size="7"><br><br>
								<input type="text" id="localidad" placeholder="Localidad" size="15">
								<input type="text" id="calle"  placeholder="Calle">
								<input type="numeric" id="num" placeholder="Nº" size="4">
								<input type="numeric" id="cp" placeholder="C.P." size="4"><br><br>
								<input type="tel" id="tel"  placeholder="Telefono" size="9">
								<input type="tel" id="cel"  placeholder="Celular" size="10">
								<input type="email" id="mail"  placeholder="E-mail" size="20"><br><br>
								Fecha de nacimiento:											
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
								<input type="number" id="anio" placeholder="Año" size="4"><br><br>
								<input type="text" id="obra_social"  placeholder="Obra Social / Prepaga">
								<input type="text" id="nro_afiliado"  placeholder="Nº Afiliado" size="15"><br><br>
								Especialidad:					
								<select id="especialidad" style="margin:0 5px 0 0">
									<option>Especialidad</option>
									<option value="kinesiologia">Kinesiologia</option>
									<option value="nutricion">Nutricion</option>
								</select><br><br>
								Antecedentes: 
								<textarea id="antecedentes" wrap="SOFT" tabindex="0" autocorrect="on"></textarea><br><br>
								Cargar Estudios:  
								<input type="file" id="estudios"><br><br><br>
								<input type="submit" value="Cargar Datos">
								<input type="button" onclick="history.back()" name="volver atrás" value="Volver">
							</div>
						</legend>
					</form>
				<!-- FIN CONTENIDO DEL CENTRO DE LA PAGINA -->
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
	</body>
	<script type="text/javascript" src="scripts/compruebaform.js"></script>
</html>
