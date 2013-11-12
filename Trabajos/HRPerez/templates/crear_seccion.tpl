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
      <h1>Tecper<small> Este es mi sitio. Disfrútelo.</small></h1>
      <hr />
    </div>
  </div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">

      <article>

        <h3><a href="#">Crear Seccion</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Crear Seccion</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Nombre</label>
        <input type="text" name="nombre_seccion"  placeholder="Ingrese el nombre de la seccion.">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Descripcion</label>
        <textarea type="text" name="descripcion" placeholder="Ingrese una descripcion de la seccion."></textarea>
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
        <h5>Biografía</h5>
        <p>Soy Hugo Perez, creador y diseñador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseño que espero disfruten. Si quieres conocer más de mi trabajo puedes contactarme <a href="envio_de_mail.php">aquí &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
{include file = "footer.tpl"}