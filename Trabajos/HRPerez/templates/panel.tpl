{include file = "header.tpl"}
<body>

<nav class="breadcrumbs">
      <a href="index.php">
        <div class="large-6 columns"></div></a>
        <a href="index.php">Home</a>
		{section name=secciones loop=$Seccion}
        <a href="index.php?idSection={$Seccion[secciones]['id_seccion']}">{$Seccion[secciones]['nombre_seccion']}</a>
		{/section}
      
      
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

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">

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
        <th width="145">Titulo</th>
        <th width="145">Seccion</th>
        <th width="145">Tag</th>
        <th width="145">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Titulo 1</td>
        <td>Seccion 1 </td>
        <td>Tag 1</td>
        <td>Editar/Borrar</td>
      </tr>
      <tr>
        <td>Titulo 2</td>
        <td>Seccion 2</td>
        <td>Tag 2</td>
        <td>Editar/Borrar</td>
      </tr>
      <tr>
        <td>Titulo3</td>
        <td>Seccion 3</td>
        <td>Tag 2</td>
        <td>Editar/Borrar</td>
      </tr>
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

    </div>

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
        <p>Soy Hugo Perez,creador y disenador del proyecto Tecper.Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten.Si quieres conocer mas de mi trabajo puedes contactarme en perez.hgr@gmail.com</p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->
{include file = "footer.tpl"}