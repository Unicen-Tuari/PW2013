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
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="panel.php">Autos</a></li>
          <li><a href="mensaje.php">Mensajes</a></li>
          <li><a href="datos.php">Mis datos</a></li>
          <li><a href="logout.php">Cerrar Sesion</a></li>
        </ul>
        <h3 class="text-muted"><a href="index.php">Volver a Home</a></h3>
      </div>

      <div class="jumbotron">
           
                <div class="well">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre Auto</th>
                          <th>Marca</th>
                          <th>Acciones</th>
                          <th style="width: 36px;"></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>ID</td>
                          <td>"titulo auto"</td>
                          <td>"Marca"</td>
                          <td>"Editar"</td><td>"Borrar"</td>
                        </tr>
                        <tr>
                          <td>ID</td>
                          <td>"titulo a"</td>
                          <td>"Marca"</td>

                          <td>"Editar"</td><td>"Editar"</td>
                        </tr>
                       
                      </tbody>
                    </table>
                    <a href="addcar.php"><button class="btn btn-primary">Crear Auto</button></a>
                </div>
              
                
      </div><!-- /jumbotron -->

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>