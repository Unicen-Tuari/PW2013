{include file="header_jquery_fancybox.tpl"}
<div class="clear"></div>
<div class="elemento_contenedor" id="datos_consulta">
	<form class="datoscliente" method="post" action="consulta.php">
		<fieldset>
			<legend>Datos personales</legend>
			<input class="botonesform flota_izq" type="reset" value="BORRAR">
			{literal}
			<input class="formconsulta" type="text" name="dni" placeholder="DNI" pattern="[\d]{7,8}" title="Formato: 7 a 8 Digitos" required autofocus>
			{/literal}
			<input class="botonesform flota_der" type="submit" value="ACEPTAR">
		</fieldset><br>
	</form>
	<form class="datos_consultados">
		<fieldset>
			<legend>Datos reparación</legend>
			<br>
			{if isset($reparaciones)}
				{foreach $reparaciones as $reparacion}
					{if $reparacion.fecha_fin_f == null}
						{$reparacion.fecha_fin_f = '-'}
					{/if} 
					Articulo: <input type="text" name="articulo" value={$reparacion.articulo} readonly> Marca: <input type="text" name="marca" value={$reparacion.marca} readonly> Modelo: <input type="text" name="modelo" value={$reparacion.modelo} readonly><br><br><br>
					Nro. de serie: <input type="text" name="serie" value={$reparacion.numero_serie} readonly> Fecha inicio: <input type="text" name="fecha_ini" value={$reparacion.fecha_inicio_f} readonly> Fecha fin: <input type="text" name="fecha_fin" value={$reparacion.fecha_fin_f} readonly><br><br><br>
					Estado reparación: <input type="text" name="estado" value="{$reparacion.nombre_estado}" readonly> Precio reparación: <input type="text" name="precio" value="$ {$reparacion.precio_reparacion}" readonly><br><br><br>
					{if isset($imagenes)}
						<ul>
						{foreach $imagenes as $imagen}
							<li><a class="fancybox" rel="g1" href={$imagen.link_imagen}><img class="thumbnail" src={$imagen.link_imagen} alt="Imágen Reparación"></a></li>
						{/foreach}
						</ul>
					{/if}
				{/foreach}
			{else}
				Articulo: <input type="text" name="articulo" readonly> Marca: <input type="text" name="marca" readonly> Modelo: <input type="text" name="modelo" readonly><br><br><br>
				Nro. de serie: <input type="text" name="serie" readonly> Fecha inicio: <input type="text" name="fecha_ini" readonly> Fecha fin: <input type="text" name="fecha_fin" readonly><br><br><br>
				Estado reparación: <input type="text" name="estado" readonly> Precio reparación: <input type="text" name="precio" readonly><br><br>
			{/if}
		</fieldset>
	</form>
</div>
{include file="fancybox.tpl"}
{include file="footer.tpl"}