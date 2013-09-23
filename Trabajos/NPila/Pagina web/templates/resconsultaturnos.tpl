<div class="post"><h2 class="title" id="fechacons"></h2> <br><br>
	<legend class="title a"><div class="page">
		<table>		
			<thead> 
				<tr>
					<th>Nombre y Apellido</th> <th>Hora</th> <th>Especialidad</th>
				</tr>
			</thead>
			<tbody>
				{foreach $datos as $dato}
					<tr>
						<td>{$dato.Nombre_Apellido}</td> <td>{$dato.Hora}</td> <td>{$dato.Nom_especialidad}</td>
					</tr>
				{/foreach}
			</tbody>
		</table>		
</div></legend></div>

