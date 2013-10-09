<br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Apellido</th>
				<th class="text-center">Articulo</th>
				<th class="text-center">Fecha de Ingreso</th>
				<th class="text-center">Problema reportado</th>
			</tr>
		</thead>
		<tbody>
			{foreach $reparaciones as $reparacion}
			<tr>
				<td>{$reparacion.id}</td>
				<td>{$reparacion.nombre}</td>
				<td>{$reparacion.apellido}</td>
				<td>{$reparacion.articulo}</td>
				<td>{$reparacion.fecha_ingreso_f}</td>
				<td>{$reparacion.desperfecto}</td>
			</tr>
			{/foreach}
		</tbody>
	</table> 
	