<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Fretzilland</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" />

    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script> 
     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script> 
    <script type="text/javascript" src="/js/main.js"></script> 





  {if $message <> -1}

   <script>
   {literal}
   $(function() {
      $("#texto_mensaje").html(
          "{/literal}{$message}{literal}"
      );

      $( "#dialogo" ).dialog({
        height: 140,
        
        closeOnEscape: true,
        position: { my: "top+40", at: "top+40", of: window },
        modal: true
      });
    });
  {/literal}

</script>   

  {/if}

  </head>
  <body>
<div id="dialogo" style="display:none;">
  <div id="texto_mensaje">
  Texto Default
  </div>
</div>

  <div id="container">
    <div id="f_body">

      <div class="f_header">
      <nav class="navbar navbar-default navbar-inverse f_navbar_header" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Fretzilland</a>
        </div>
        <div>
          <form class="navbar-form navbar-right" action="/search" method="post" role="search" id="searchform" name="searchform">
          <div class="form-group">
            <input type="text" name="search_kw" id="search_kw" class="form-control" placeholder="Buscar producto">
          </div>
          <button type="submit" id="searchbtn" name="searchbtn" class="btn btn-default">Buscar</button>
          </form>
        <ul class="nav navbar-nav navbar-right">

          {if $usuario_mail eq -1}
            <li><a href="/signup">Registrarse</a></li>
            <li><a href="#" id="login">Iniciar sesión</a></li> 
          {else}
             <li><a href="/cart" id="logout">Carro de Compras</a></li>    
             <li><a href="/index/logout" id="logout">Cerrar sesión</a></li>
             {if $admin eq 1}
             <li><a href="/admin" id="logout">Panel de Admin</a></li>
             {/if}
          {/if}
          
        
        </ul>
        </div>
        
      </nav>
      <div class="f_login navbar-inverse" id="f_login">
          <form action="/index/login" method="post" id="loginform" name="loginform">
          <div class="form-group">
            <input type="email" name="usuario_mail" id="usuario_mail" class="login-control" placeholder="Email">
            <input type="password" name="usuario_pass" id="usuario_pass" class="login-control" placeholder="Password">
          </div>
          <button type="submit" id="loginbtn" name="loginbtn" class="btn btn-default btn-login">Iniciar Sesion</button>
          </form>
          <a href="#"><span class="glyphicon glyphicon-remove login-close"></span></a>

      </div>
      </div>