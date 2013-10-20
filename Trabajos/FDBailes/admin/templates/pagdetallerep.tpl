<div class="modal-header">
	<h4 class="modal-title">{$detallerep.nombre} {$detallerep.apellido} - {$detallerep.id_cliente}</h4>
	<h4 class="modal-title">{$detallerep.telefono} - {$detallerep.mail}</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_rep">
	<div class="modal-body" >
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_rep" value="{$detallerep.id}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Articulo</span>
			<input class="form-control input-sm" type="text" name="articulo_n" value="{$detallerep.articulo}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Marca</span>
			<input class="form-control input-sm" type="text" name="marca" value="{$detallerep.marca}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Modelo</span>
			<input class="form-control input-sm" type="text" name="modelo" value="{$detallerep.modelo}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nro. Serie</span>
			<input class="form-control input-sm" type="text" name="serie" value="{$detallerep.numero_serie}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Ingreso</span>
			<input class="form-control input-sm" type="text" name="fecha_ing" value="{$detallerep.fecha_ingreso_f}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Fecha Egreso</span>
			<input class="form-control input-sm" type="text" name="fecha_egr" value="{$detallerep.fecha_egreso_f}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Problema</span>
			<textarea class="form-control input-sm" name="problema" readonly>{$detallerep.desperfecto}</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Notas</span>
			<textarea class="form-control input-sm" name="notas" readonly>{$detallerep.notas}</textarea>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Estado</span>
			<select class="form-control input-sm" name="estado" disabled>
				{foreach $estados as $estado}
				{if {$estado.id} == {$detallerep.id_estado}}
				<option value="{$estado.id}" selected>{$estado.nombre_estado}</option>
				{else}
				<option value="{$estado.id}">{$estado.nombre_estado}</option>
				{/if}
				{/foreach}
			</select>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" name="precio" value="{$detallerep.precio_reparacion}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borrarep" class="btn btn-danger col-lg-3 pull-left"><span class="glyphicon glyphicon-trash"></span></button>
			<button type="button" id="boton_modificarep" class="btn btn-primary col-lg-3 pull-right"><span class="glyphicon glyphicon-edit"></span></button>
		</div>
	</div>
</form>