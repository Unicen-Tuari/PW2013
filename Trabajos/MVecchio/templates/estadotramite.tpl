{if isset($tramites)}
<!--//Muestro tabla con todos los tramites del cliente que esta logueado!-->
	<table class="table table-responsive">
		<thead>
			<tr class="">
				<th class="text-center">Nombre</th>
				<th class="text-center">Fecha Inicio</th>
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
					{assign var = "clase" value = "active" nocache}
				{else}
					{assign var = "clase" value = "warning" nocache}
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
{else}	
	<h4>Aun no tenes ning&uacute;n tr&aacute;mite con nosotros</h4>		
{/if} 
	
	