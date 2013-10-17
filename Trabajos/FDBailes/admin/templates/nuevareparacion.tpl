<br>
<div class="container">
	<form class="text-left" method="POST" action="" id="form_nuevarep">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Cliente</span>
			<select class="form-control input-sm detallemodal" name="cliente" required autofocus>
				{foreach $clientes as $cliente}
				<option value="{$cliente.id}">{$cliente.nombre} {$cliente.apellido}</option>
				{/foreach}
			</select>
		</div>
		<div class="form-group col-lg-12 input-group">
		<span class="input-group-addon input-sm detallemodal">Articulo</span>
			<input class="form-control input-sm" type="text" name="articulo" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Marca</span>
			<input class="form-control input-sm" type="text" name="marca">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Modelo</span>
			<input class="form-control input-sm" type="text" name="modelo">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Nro. Serie</span>
			<input class="form-control input-sm" type="text" name="serie">
		</div> 
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Problema</span>
			<textarea class="form-control input-sm" name="problema" required></textarea>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Notas</span>
			<textarea class="form-control input-sm" name="notas"></textarea>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Estado</span>
			<select class="form-control input-sm detallemodal" name="estado" required>
				{foreach $estados as $estado}
				<option value="{$estado.id}">{$estado.nombre_estado}</option>
				{/foreach}
			</select>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" name="precio">
		</div> 
		<div class="form-group col-lg-12">
			<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
			<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
		</div>
	</form>
</div>
