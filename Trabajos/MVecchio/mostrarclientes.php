<?php
//Imprimo fotos de clientes "amigos" de a 2 por fila.
	$cont=0;
	while($r = $q->fetch()){
			while (cont<2 and $r and $r[es_cliente_amigo]='s'){
				echo('<a id="linkamigo" href="//'.$r[web].'" target="_blank"><img alt="Imagen Amigo" src="'.$r[url_imagen].'"></a>');
				$r= $q->fetch();
				$cont++;
			}
	}
?>	