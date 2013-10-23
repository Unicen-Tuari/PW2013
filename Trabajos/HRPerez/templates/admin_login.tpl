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
         <li><a href="Admin_login.php" class="button">LogIn</a></li>
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

        <h3><a href="#">Login</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
            <form ACTION = "procesa_login_admin.php" METHOD = "GET">
  <fieldset>
    <legend>Administrador</legend>

    <div class="row">
      <div class="large-12 columns">
        <label>Usuario</label>
        <input id="name" type="text" name="nombre" placeholder="Ingrese su nombre">
      </div>
    </div>

      <div class="row">
      <div class="large-12 columns">
        <label>Password</label>
        <input id="password" type="password" name="contrasena"placeholder="Ingrese el password">
      </div>
      
    </div>
      <div>
      <a href="cargar_noticia.php"><input class="button" type="submit" onclick="verificarFormulario();" value="LogIn"><hr></a>
      
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

     <div class="panel">
        <h5>Biografía</h5>
        <p>Soy Hugo Perez, creador y diseñador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseño que espero disfruten. Si quieres conocer más de mi trabajo puedes contactarme en perez.hgr@gmail.com</p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->
{include file = "footer.tpl"}