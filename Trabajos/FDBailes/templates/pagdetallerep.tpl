<div class="modal-header">
	<h4 class="modal-title">{$detallerep.nombre} {$detallerep.apellido} - {$detallerep.id_cliente}</h4>
	<h4 class="modal-title">{$detallerep.telefono} - {$detallerep.mail}</h4>
</div>
<form class="form-horizontal text-left" method="POST" action="input-group-addon input-sm detallemodal">
	<div class="modal-body" >
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.id}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Articulo</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.articulo}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Marca</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.marca}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Modelo</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.modelo}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nro. Serie</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.numero_serie}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Ingreso</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.fecha_ingreso_f}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Egreso</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.fecha_egreso_f}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Problema</span>
			<textarea class="form-control input-sm">{$detallerep.desperfecto}</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Notas</span>
			<textarea class="form-control input-sm">{$detallerep.notas}</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Estado</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.nombre_estado}" >
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" value="{$detallerep.precio_reparacion}" >
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	</div>
</form>