<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Panel Admin</title>

   <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->
     <!-- <script src="../../assets/js/html5shiv.js"></script> -->
     <!-- <script src="../../assets/js/respond.min.js"></script> -->


    <!--[endif]-->
  </head>

  <body>

    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                  
                  <li><a href="index.php">Home</a></li>                  
                  <li class="active"><a href="panel.php">Panel</a></li>
                  <li><a href="logout.php">Cerrar sesion</a></li>                  
                   
                </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">
      <div class="header">

        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="panel.php">Autos</a></li>
          <li><a href="mensaje.php">Mensajes</a></li>           
          {foreach $usuario as $nombre}     
          <li><button <button class="btn btn-primary">Bienvenido {$nombre.nombre}</button></li>
          {/foreach} 
          <!--{foreach $user as $usuario}
          <li><a>User:</a>{$usuario.nombre}</li>
          {/foreach} -->
        </ul>
        <h3 class="text-muted"><a href="index.php">Volver a Home</a></h3>
      </div>
      <div id="mensajes"></div>
      <div class="jumbotron">
           
                <div class="well">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Titulo Auto</th>
                          <th>Marca</th>
                          <th>Acciones</th>
                          <th style="width: 36px;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        {foreach $autos as $auto}
                        <tr>
                          <td>{$auto.id}</td>
                          <td>{$auto.titulo}</td>
                          <td>{$auto.nombre}</td>
                          <td><a href="edit.php?id={$auto.id}"><button class="btn btn-primary">Editar</button></a></td>
                          <td><a href="#" onclick="borrarAuto({$auto.id})"><button class="btn btn-primary">Eliminar</button></a></td>
                        </tr>                      
                        {/foreach}                                              
                      </tbody>
                    </table>
                    <a href="addcar.php"><button class="btn btn-primary">Crear Auto</button></a>
                </div>
              
                
      </div><!-- /jumbotron -->

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->
    <script type="text/javascript" src="./js/borrar.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>