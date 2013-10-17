<div class="modal-header">
	<h4 class="modal-title">Detalle del Cliente</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id" value="{$detallecli.id}" disabled>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre" value="{$detallecli.nombre}" disabled>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control input-sm" type="text" name="apellido" value="{$detallecli.apellido}" disabled>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control input-sm" type="text" name="direccion" value="{$detallecli.direccion}" disabled>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control input-sm" type="tel" name="telefono" value="{$detallecli.telefono}" disabled>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="mail" name="mail" value="{$detallecli.mail}" disabled>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracli" class="btn btn-danger col-lg-3 pull-left"><span class="glyphicon glyphicon-trash"></span></button>
			<button type="button" id="boton_modificacli" class="btn btn-primary col-lg-3 pull-right"><span class="glyphicon glyphicon-edit"></span></button>
		</div>
	</div>
</form>