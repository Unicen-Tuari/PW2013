{foreach $amigos as $cliente}
	{assign var=cont value=0} 
	{while $cont<2} 
		<a id="linkamigo" href="//{$cliente.web}" target="_blank"><img alt="Imagen Amigo" src="{$cliente.url_imagen}"></a>
		{assign var=cont value=$cont+1} 
	{/while}
{/foreach}
				