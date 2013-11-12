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

        <h3><a href="#">Login</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
            <form id="formulariologin" action= "" METHOD = "POST">
  <fieldset>
    <legend>Please sign in</legend>

    <div class="row">
      <div class="large-12 columns">
        <label>Usuario</label>
        <input id="name" name="mail" type="text" placeholder="Direccion de e-mail">
      </div>
    </div>

      <div class="row">
      <div class="large-12 columns">
        <label>Password</label>
        <input id="password" name="pass" type="password" placeholder="Password">
      </div>
      
    </div>
      <div>
      <a><input class="button" type="submit" value="Sign in"></a>
      <a href="index.php"><input class="button" value="Cancel"></a>
      
    </div><br>
  
  </div>
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