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

        <h3><a href="#">Crear Tag</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Crear Tag</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Nombre</label>
        <input type="text" name="nombre_tag"  placeholder="Ingrese el nombre del tag.">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Descripcion</label>
        <textarea type="text" name="descripcion" placeholder="Ingrese una descripcion del tag."></textarea>
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
        <h5>Biografa</h5>
        <p>Soy Hugo Perez, creador y disenador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten. Si quieres conocer mas de mi trabajo puedes contactarme <a href="envio_de_mail.php">aqui &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
{include file = "footer.tpl"}