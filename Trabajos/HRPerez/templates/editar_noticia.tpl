{include file = "header.tpl"}
<body>

<nav class="breadcrumbs">
      <a href="#">
        <div class="large-6 columns">Home</div></a>
      <a href="#">Browser</a>
      <a href="#">Software</a>
      <a href="#">Hardware</a>
      <a href="#">Website Future</a>
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

        <h3><a href="#">Editar Noticia</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Editar Noticia</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Titulo</label>
        <input type="text" name="titulo"  placeholder="Ingrese el titulo de la noticia" value="{$Noticia['titulo']}">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Subtitulo</label>
        <input type="text" name="subtitulo" placeholder="ingrese el subtitulo de la noticia" value="{$Noticia['subtitulo']}">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Cuerpo</label>
        <textarea type="text" name="cuerpo" placeholder="Ingrese el cuerpo de la noticia"  value ="{$Noticia['cuerpo']}"></textarea>
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Tag</label>
        <select>
          <option value="1">Chrome</option>
          <option value="2">Explorer</option>
          <option value="3">Firefox</option>
          <option value="4" selected>Opera</option>
          <option value="5">Safari</option>
        </select>
        <input  type="number" name="id_tag" placeholder="Ingrese el numero de tag" value="{$Noticia['nombre_tag']}">
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Numero de seccion al cual corresponde la noticia</label>
        <input  type="number" name="id_seccion" placeholder="Ingrese el numero de seccion" value="{$Noticia['nombre_seccion']}">
      </div>
      
    </div>
      <a href="#"><input class="button" type="submit" value="Ok"></a>
      <a href="panel.php"><input class="button" value="Cancel"></a>
  </fieldset>
      
</form>

      </article>

      <hr />

      <article>
      </article>

    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">

      <div class="panel">
        <h5>Biografia</h5>
        <p>Soy Hugo Perez, creador y disenador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseño que espero disfruten. Si quieres conocer más de mi trabajo puedes contactarme <a href="#">aqui &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
{include file = "footer.tpl"}