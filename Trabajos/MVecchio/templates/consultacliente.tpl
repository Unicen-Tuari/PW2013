{if isset($cliente)}
<!--//Muestro tabla con todos los tramites del cliente que esta logueado!-->
	<table class="table table-responsive">
		<thead>
			<tr class="">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Apellido</th>
				<th class="text-center">Direccion</th>
				<th class="text-center">Email</th>
				<th class="text-center">Provincia</th>
				<th class="text-center">Localidad</th>
				<th class="text-center">Telefono</th>
				<th class="text-center">Tipo Doc</th>
				<th class="text-center">Nro Doc</th>
				<th class="text-center">Razon Social</th>
				<th class="text-center">Descuento</th>
				<th class="text-center">es "Amigo"?</th>
				<th class="text-center">Web</th>
				<th class="text-center">url Imagen</th>
				<th class="text-center">Editar</th>
				<th class="text-center">Borrar</th>

			</tr>
		</thead>
		<tbody>
			{foreach $clientes as $cliente}
			<tr>
				<td>{$cliente.nombre}</td>
				<td>{$cliente.nombre}</td>
				<td>{$cliente.apellido}</td>
				<td>{$cliente.direccion}</td>
				<td>{$cliente.email}</td>
				<td>{$cliente.provincia}</td>
				<td>{$cliente.localidad}</td>
				<td>{$cliente.telefono}</td>
				<td>{$cliente.tipo_documento}</td>
				<td>{$cliente.nro_documento}</td>
				<td>{$cliente.razon_social}</td>
				<td>{$cliente.descuento}</td>
				<td>{$cliente.es_cliente_amigo}</td>
				<td>{$cliente.web}</td>
				<td>{$cliente.url_imagen}</td>
				<td>Editar</td>
				<td>Borrar</td>
			</tr>
			{/foreach}
		</tbody>
	</table>
{else}	
	<h4>No se ah encontrado ningun cliente</h4>		
{/if} 