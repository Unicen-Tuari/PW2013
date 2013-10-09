{include file = "header.tpl"}
<a id="Home"></a>
<div class="jumbotron">
	<div class="container text-center">
		<h1>Quienes Somos?</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<h2>Horarios de Atención</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
				Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
		<div class="col-lg-4 text-center">
			<h2>Noticias</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
		<div class="col-lg-4 text-right">
			<h2>Donde Encontrarnos</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
	</div>
</div>
<a id="Servicios"></a>
<div class="separador text-center">
<h2>Nuestros Servicios</h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-6 text-center">
			<h2>Servicio 1</h2>
			<img class="pull-left" src="images/foto.jpg" alt="Logo Servicio">
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
		<div class="col-lg-6 text-center">
			<h2>Servicio 2</h2>
			<img class="pull-left" src="images/foto.jpg" alt="Logo Servicio">
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 text-center">
			<h2>Servicio 3</h2>
			<img class="pull-left" src="images/foto.jpg" alt="Logo Servicio">
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
		<div class="col-lg-6 text-center">
			<h2>Servicio 4</h2>
			<img class="pull-left" src="images/foto.jpg" alt="Logo Servicio">
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		</div>
	</div>
</div>
<a id="Consulta"></a>
<div class="separador text-center">
	<h2>Consulta el estado de tu reparación</h2>
</div>
<div class="container">
	<form class="text-center" id="form_consulta" method="POST" action="">
		<h3>Datos personales<h3>
		<div class="form-group input-group col-lg-12" id="form_dni">
			{literal}
			<label class="sr-only" for="id_cliente">Numero de documento</label>
			<span class="input-group-addon glyphicon glyphicon-book"></span>
			<input class="form-control" type="text" name="id_cliente" placeholder="ID Cliente" pattern="[\d]{1,8}" title="Formato: 1 a 8 Digitos" required>
			{/literal}
			<span class="input-group-btn">
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
			</span>
		</div>
	</form>
	<div class="row">
		<div class="col-lg-12" id="tableData"></div>
	</div>
</div>
<a id="Contacto"></a>
<div class="separador text-center">
	<h2>Haganos sus consultas</h2>
</div>
<div class="container text-center">
			<form>
				<h3>Formulario de contacto</h3>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="nombre_apellido">Nombre y Apellido</label>
					<span class="input-group-addon glyphicon glyphicon-user"></span>
					<input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre" required>
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="email">Email</label>
					<span class="input-group-addon glyphicon glyphicon-envelope"></span>
					{literal}
					<input class="form-control" type="email" name="correo" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
					{/literal}
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="telefono">Telefono</label>
					<span class="input-group-addon glyphicon glyphicon-earphone"></span>
					{literal}
					<input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
					{/literal}
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="consulta">Consulta</label>
					<span class="input-group-addon glyphicon glyphicon-comment"></span>
					<textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
				</div>
				<div class="form-group">
					<span class="help-block">Todos los campos son Obligatorios.</span><br>
					<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
					<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
				</div>
			</form>
		</div>
	</div>
</div>
{include file = "footer.tpl"}