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

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">

      <article>

        <h3><a href="#">Crear Noticia</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Crear Noticia</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Titulo</label>
        <input type="text" name="titulo"  placeholder="Ingrese el titulo de la noticia">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Subtitulo</label>
        <input type="text" name="subtitulo" placeholder="ingrese el subtitulo de la noticia">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Cuerpo</label>
        <textarea type="text" name="cuerpo" placeholder="Ingrese el cuerpo de la noticia"></textarea>
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Numero de tag al cual corresponde la noticia</label>
        <input  type="number" name="id_tag" placeholder="Ingrese el numero de tag">
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Numero de seccion al cual corresponde la noticia</label>
        <input  type="number" name="id_seccion" placeholder="Ingrese el numero de seccion">
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
        <p>Soy Hugo Perez, creador y disenador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten. Si quieres conocer mas de mi trabajo puedes contactarme <a href="envio_de_mail.php">aqui &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
{include file = "footer.tpl"}