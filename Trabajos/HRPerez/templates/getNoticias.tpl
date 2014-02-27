             {section name =noticias loop= $Noticia}
              <article>
                        <div class="row">
                            <div class="large-12 columns">            
                  	  <h3>
                          <a href="ver_noticia_completa.php?id_noticia={$Noticia[noticias]['id_noticia']}">{$Noticia[noticias]['titulo']}</a>
                      </h3>
                        <hr/>      
                      <h6>
                           {$Noticia[noticias]['subtitulo']}
                      </h6><br>
                       <div class="row">
                            <div class="large-12 columns">
                                <p>
                                    {$Noticia[noticias]['cuerpo']|truncate:250:"...":true}
                                </p>
                            </div>
                       </div>
                       <div class="row">
                          <div class="large-6 columns"></div>  
                       </div>
              </article>
                  {/section}
