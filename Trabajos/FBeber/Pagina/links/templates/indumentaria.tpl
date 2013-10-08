{include file="header.tpl" title=foo}

		{section name=lnombres loop=$nombre}
 			<div class="prod">
					<img class="galeria" src="images/{$imagen[lnombres]}">
					<h3>{$nombre[lnombres]}</h3>
					<p> {$descripcion[lnombres]}<p>
					<h1>${$precio[lnombres]}</h1>	
			</div>
		{/section}


{include file="footer.tpl"}