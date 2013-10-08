<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="dist/css/signin.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="jumbotron">  
          <form id="formlogin" class="form-signin" method="post">
            <h2 class="form-signin-heading">Iniciar Sesión</h2>
            <input id="mail" name="mail" type="text" class="form-control" placeholder="Correo Electronico" autofocus="">
            <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña">
            <div id="error" class="alert alert-danger" style="display: none;"></div>
            <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          </form>


         
       </div><!-- /jumbotron -->    

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>