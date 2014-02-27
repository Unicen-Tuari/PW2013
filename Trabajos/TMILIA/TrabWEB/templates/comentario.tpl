 

        <div class="span4 well">
        	{foreach $comentario as $coment}
         
              <li><b>Nombre:</b>{$coment.nombre}</li> 
            

            <dt>
              {$coment.texto}
            </dt> 
            {/foreach}
        </div>