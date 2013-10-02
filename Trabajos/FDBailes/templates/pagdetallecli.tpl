	<div class="modal-header">
		<h4 class="modal-title">Detalle del Cliente</h4>
    </div>
    <div class="modal-body" >
    <form class="form-horizontal text-left" method="POST" action="">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" value="{$detallecli.id}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" value="{$detallecli.nombre}" >
		</div>
		<div class="form-group input-group">
		<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control input-sm" type="text" value="{$detallecli.apellido}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control input-sm" type="text" value="{$detallecli.direccion}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control input-sm" type="text" value="{$detallecli.telefono}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="text" value="{$detallecli.mail}" >
		</div>
	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
	</div>
	</form>
