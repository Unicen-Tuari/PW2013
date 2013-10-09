<br>
	<div class="container">
		<form method="POST" action="" id="form_buscador">
			<div class="form-group col-lg-12 text-right">
				<label class="radio-inline">Seleccione tipo de busqueda:</label>
				<label class="radio-inline">
					<input type="radio" id="check_reparaciones" onclick="radioBuscarep();" name="tipobusqueda" value="reparacion" checked required>Reparación
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_clientes" onclick="radioBuscacli();" name="tipobusqueda" value="cliente" required>Cliente
				</label>
			</div>
			<div class="form-group col-lg-12 text-left">
				<label class="radio-inline">
					<input type="radio" id="check_na" name="campobusqueda" value="na" onclick="busquedaNA();" checked required>Nombre y Apellido
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_id_cliente" name="campobusqueda" value="id_cliente" onclick="busquedaIDcliente();" required>ID Cliente
				</label>
				<label class="radio-inline" id="campo_toggle">
					<input type="radio" id="check_id" name="campobusqueda" value="id" onclick="busquedaID();" required>ID Reparación
				</label>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor" id="input_principal" placeholder="Nombre" autofocus>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor2" id="input_secundario" placeholder="Apellido">
			</div> 
			<div class="form-group col-lg-12">
				<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
				<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div>