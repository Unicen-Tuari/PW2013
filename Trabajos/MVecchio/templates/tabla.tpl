<table class="table table-responsive">
	<thead>
		<tr class="active">
			<th class="text-center">Nombre tr&aacute;mite</th>
			<th class="text-center">Fehca de pedido</th>
			<th class="text-center">id Automotor</th>
			<th class="text-center">Marca</th>
			<th class="text-center">Modelo</th>
			<th class="text-center">Estado</th>
			<th class="text-center">Precio</th>
		</tr>
	</thead>
	<tbody>
		{foreach $tramites as $tramite}
			{if {$tramite.estado} == "Finalizado"}
				{assign var = "clase" value = "success" nocache}
			{elseif {$reparacion.estado} == "Proceso" }
				{assign var = "clase" value = "warning" nocache}
			{else}
				{assign var = "clase" value = "danger" nocache}
			{/if}
		<tr class="{$clase}">
			<td>{$tramite.nombre}</td>
			<td>{$tramite.fecha_inicio}</td>
			<td>{$tramite.id_automotor}</td>
			<td>{$tramite.marca}</td>
			<td>{$tramite.modelo}</td>
			<td>{$tramite.estado}</td>
			<td>{$tramite.valor}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
