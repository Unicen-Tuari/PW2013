<br>
<div class="container">
	<form class="form-horizontal text-left" method="POST" action="" id="form_nuevocli">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control" type="text" name="id" value="{$next_id.Auto_increment}" disabled>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control" type="text" name="nombre" required autofocus>
		</div>
		<div class="form-group col-lg-12 input-group">
		<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control" type="text" name="apellido" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control" type="text" name="direccion" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control" type="tel" name="telefono" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control" type="email" name="mail">
		</div> 
		<div class="form-group col-lg-12">
			<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
			<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
		</div>
	</form>
</div>
