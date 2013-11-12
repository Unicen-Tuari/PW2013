<div class="post"><h2 class="title">Informacion del paciente</h2> <br><br>
	<legend class="title a"><div class="page">
		Nombre y apellido: {$datos.Nombre_Apellido} <br>
		D.N.I: {$datos.DNI} <br>
		Direccion: {$datos.Calle} &nbsp &nbsp Nº: {$datos.Numero} &nbsp &nbsp Localidad: {$datos.Localidad} <br>
		Telefono: {$datos.Telefono} &nbsp &nbsp Movil: {$datos.Movil} <br>
		Correo electronico: {$datos.Mail} <br>
		Fecha de nacimiento: {$datos.Fecha_nac} <br>
		Obra Social: {$datos.Obr_soc} &nbsp &nbsp Numero de afiliado: {$datos.Num_afiliado} <br><br>
		<input type="button" name="borrar" value="Borrar" onclick="borrarPaciente({$datos.DNI});">
		<input type="button" name="historia" value="Historia Clinica" onclick="historia('hist_clin')">
		
		<div id="hist_clin" style="display:none;"><br>
			<form id="act_hist" method="post" action="">
				<textarea name="historia" rows="5" cols="400">{$datos.Antecedentes}</textarea><br><br>
				<input name="paciente" value="{$datos.DNI}" hidden>
				<input type="submit" value="Guardar">
			</form>
		</div>
</div></legend></div>
