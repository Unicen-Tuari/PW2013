<table class="table table-responsive">
        <thead>
          <tr class="active">
          <th class="text-center">ID</th>
          <th class="text-center">Articulo</th>
          <th class="text-center">Marca</th>
          <th class="text-center">Modelo</th>
          <th class="text-center">Fecha de Ingreso</th>
          <th class="text-center">Fecha de Egreso</th>
          <th class="text-center">Estado</th>
          <th class="text-center">Precio</th>
        </tr>
        </thead>
        <tbody>
        	{foreach $reparaciones as $reparacion}
        	{if {$reparacion.nombre_estado} == "Retirada"}
        		{assign var="clase" value="success" nocache}
			{elseif {$reparacion.nombre_estado} == "En Reparación" }
				{assign var="clase" value="danger" nocache}
			{else}
				{assign var="clase" value="warning" nocache}
			{/if}
			<tr class="{$clase}">
				<td>{$reparacion.id_reparacion}</td>
				<td>{$reparacion.articulo}</td>
				<td>{$reparacion.marca}</td>
				<td>{$reparacion.modelo}</td>
				<td>{$reparacion.fecha_inicio_f}</td>
				<td>{$reparacion.fecha_fin_f}</td>
				<td>{$reparacion.nombre_estado}</td>
				<td>{$reparacion.precio_reparacion}</td>
			</tr>
			{/foreach}
        </tbody>
      </table>
