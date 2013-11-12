{include file = "header.tpl"}
<body>

<nav class="breadcrumbs">
      <a href="index.php">
        <div class="large-6 columns">Home</div></a>
      <a href="index.php">Browser</a>
      <a href="index.php">Software</a>
      <a href="index.php">Hardware</a>
      <a href="index.php">Website Future</a>
  </nav>

  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <ul class="button-group">
         <li><a href="#" class="button">Bienvenido Hugo</a></li>
       </ul>
      </div>
      <h1>Tecper<small> Este es mi sitio. Disfrutelo.</small></h1>
      <hr />
    </div>
  </div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">
<div class="section-auto-sample-tabs" data-section = "tabs" >
        <section class="active">
          <p class = "title-sample" data-section-title><a href="#section1">Noticias </a></p>
          <div class="content-sample" data-slug ="section1" data-section-content>
            <p>     <div class="large-9 columns" role="content">

      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="#"></a>
      
    </h3>
        <table>
    <thead>
      <tr>
        <th width="350">Titulo</th>
        <th width="80">Seccion</th>
        <th width="80">Tag</th>
        <th width="130">Acciones</th>
      </tr>
    </thead>
    <tbody>
      {section name =noticias loop= $Noticia}
      <tr>
        <td>{$Noticia[noticias]['titulo']}</td>      
        <td>{$Noticia[noticias]['nombre_seccion']}</td>
        <td>{$Noticia[noticias]['nombre_tag']}</td>
        <td><a href="editar_noticia.php?id_noticia={$Noticia[noticias]['id_noticia']}">Editar / </a><a href="borrar_noticia.php?id_noticia={$Noticia[noticias]['id_noticia']}">Borrar</a></td>
      </tr>
      {/section}
    </tbody>
  </table>
      <a href="crear_noticia.php"><input class="button" type="submit" value="Crear Noticia"></a>

       
        <h6></h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p></p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>

    </div></p>
          </div>
        </section>
        <section class="active">
          <p class = "title-sample" data-section-title><a href="#section1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSecciones</a></p>
          <div class="content-sample" data-slug ="section2" data-section-content>
            <p>      <div class="large-9 columns" role="content">

      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="#"></a>
      
    </h3>
        <table>
    <thead>
      <tr>
        <th width="150">Nombre</th>
        <th width="350">Descripcion</th>
        <th width="130">Acciones</th>
      </tr>
    </thead>
    <tbody>
      {section name =seccion loop= $Seccion}
      <tr>
        <td>{$Seccion[seccion]['nombre_seccion']}</td>
        <td>{$Seccion[seccion]['descripcion']}</td>
        <td><a href="editar_noticia.php?id_noticia={$Noticia[noticias]['id_noticia']}">Editar / </a><a href="borrar_noticia.php?id_noticia={$Noticia[noticias]['id_noticia']}">Borrar</a></td>
      </tr>
      {/section}
    </tbody>
  </table>
      <a href="crear_seccion.php"><input class="button" type="submit" value="Crear Seccion"></a>

       
        <h6></h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p></p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>

    </div></p>
            </div>
        </section>
        <section class="active">
          <p class = "title-sample" data-section-title><a href="#section1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTags</a></p>
          <div class="content-sample" data-slug ="section2" data-section-content>
            <p>      <div class="large-9 columns" role="content">

      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="#"></a>
      
    </h3>
        <table>
    <thead>
      <tr>
        <th width="150">Nombre</th>
        <th width="350">Descripcion</th>
        <th width="130">Acciones</th>
      </tr>
    </thead>
    <tbody>
      {section name =tags loop= $Tag}
      <tr>
        <td>{$Tag[tags]['nombre_tag']}</td>      
        <td>{$Tag[tags]['descripcion']}</td>
        <td><a href="editar_noticia.php?id_noticia={$Noticia[noticias]['id_noticia']}">Editar / </a><a href="borrar_noticia.php?id_noticia={$Noticia[noticias]['id_noticia']}">Borrar</a></td>
      </tr>
      {/section}
    </tbody>
  </table>
      <a href="crear_tag.php"><input class="button" type="submit" value="Crear Tag"></a>

       
        <h6></h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p></p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>

    </div></p>
            </div>
        </section>


</div>
    <!-- Main Blog Content -->


    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">

      <h5>Tags</h5>
      <ul class="side-nav">
	  {section name=tags loop=$Tag}
        <li><a href="index.php?idTag={$Tag[tags]['id_tag']}">{$Tag[tags]['nombre_tag']}</a></li>
	{/section}
      </ul>

      <div class="panel">
        <h5>Biografia</h5>
        <p>Soy Hugo Perez,creador y disenador del proyecto Tecper.Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten.Si quieres conocer mas de mi trabajo puedes contactarme <a href="envio_de_mail.php">aqui &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->
{include file = "footer.tpl"}