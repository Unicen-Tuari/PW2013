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
         <li><a href="admin_login.php" class="button">LogIn</a></li>
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
{section name =noticias loop=$Noticia}
      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="index.php?id_noticia={$Noticia[noticias]['id_noticia']}">{$Noticia[noticias]['titulo']}</a>
      
    </h3>
      <hr />

      
        <h6>
            {$Noticia[noticias]['subtitulo']}
            </h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p>
            {$Noticia[noticias]['cuerpo']}
            </p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>

      </article>
{/section }
  
        <!-- Content Slider -->
 <div class="row">
            <div class="large-1! columns">
            <ul id="featured1" data-orbit data-options="timer_speed:4000;">
              <li>
                <img src="imagenes/chrome1.jpg" />
              </li>
              <li>
                <img src="imagenes/window2.jpg" />
              </li>
              <li>
                <img src="imagenes/explorer3.jpg" />
              </li>
              <li>
                <img src="imagenes/chrome2.jpg" />
              </li>
              <li>
                <img src="imagenes/Opera Mini and Mobile Finales.png" />
              </li>
              <li>
                <img src="imagenes/firefox-goodbye-flash2-630x350.jpg" />
              </li>
              <li>
                <img src="imagenes/mouse.jpg" />
              </li>
              <li>
                <img src="imagenes/xbox1.jpg" />
              </li>
           </ul>

          </div>
</div>

    <!-- End Content Slider -->
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