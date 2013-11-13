<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Autos Olavarria</title>

    <!-- Bootstrap core CSS -->
     <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="dist/css/bootstrap.css" rel="stylesheet">


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    
   

    <!-- Custom styles for this template -->
    <link href="dist/css/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
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
                <a class="navbar-brand" href="#">Projecto: Autos tandil</a>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                  {if isset($_SESSION['mail'])}
                  <li class="active"><a href="index.php">Home</a></li>                  
                  <li><a href="panel.php">Panel</a></li>
                  <li><a href="logout.php">Cerrar sesion</a></li>                  
                  {else}
                  <li class="active"><a href="index.php">Home</a></li>                  
                  <li><a href="login.php">Ingresar</a></li>
                  {/if} 
                </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Consecionaria Tandil</h1>
            <p>Los mejores coches a tu alcance</p>
          </div>

   <a href="#" onclick="cargar('.thumbnails','verauto.php')"></a>
            {foreach $autos as $auto}
                <ul class="thumbnails">
                  <ul class="span5 clearfix">
                    <div class="thumbnail clearfix">
                    
                        <img src="{$auto.path}" alt="" class="pull-left span2 clearfix" style='margin-right:10px; height:30%; width:50%;'>
                      <div class="caption" class="pull-left">
                        <a href='verauto.php?id={$auto.id}' class="btn btn-primary icon  pull-right">Ver Auto</a>
                        <h4>      
                        <a href='verauto.php?id={$auto.id}'>{$auto.titulo}</a>
                        </h4>
                        <small><b>Precio:$</b>{$auto.valor}</small>
                        </br>
                        </br>                        
                        <small><b>Año: </b>{$auto.anio}</small>
                      </div>
                    </div>
                  </ul>
                </ul>
                
           
            {/foreach}

        </div><!--/span-->
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="well sidebar-nav">
              <ul class="nav">
                <li>Categorias</li>
                 {foreach $marcas as $marca}
                <li class="active" style="text-transform: capitalize;"><a href='index.php?marca={$marca.id}'>{$marca.nombre}</a></li>  
                 {/foreach}                            
              </ul>
            </div><!--/.well -->
          </div><!--/span-->
        
      </div><!--/row-->

     

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/offcanvas.js"></script>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script>
      jQuery.fn.cargar = function(url) {
            $(document).ready(function(){
                  $(".thumbnails").load(url);
            });
      };
    </script>
  </body>
</html>
