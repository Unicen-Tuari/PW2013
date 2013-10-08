<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="dist/assets/ico/favicon.png">

    <title>Autos Olavarria</title>

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
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <h3 class="text-muted"><a href="index.php">Volver a Home</a></h3>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="http://localhost/atpf/index.php">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
                  <form class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                  </form>
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
            <h1>Autos Tandil</h1>
            <p>descripcion pagina</p>
          </div>
                  <div class="row-fluid">
                    <div class="span12">
                      <p text-align="center">
                         {literal}
                          
                        <h3>
                         {$auto.titulo}
                        </h3>
                      </p>
                      <ul>
                        <li>
                         <b>Valor:{$auto.valor}</b>
                        </li>
                        <li>
                          <b>Modelo:{$auto.modelo}</b>
                        </li>
                        <li>
                          <b>Año:{$auto.año}</b>
                        </li>
                      </ul>
                      <dl>
                        <dt>
                          <b>Descripcion del auto</b>
                        </dt>

                        <dd>
                          {$auto.descripcion}
                        </dd>
                      </dl>

                      <img alt="140x140" src="http://lorempixel.com/140/140/" />
                      <img alt="140x140" src="http://lorempixel.com/140/140/" />
                      <img alt="140x140" src="http://lorempixel.com/140/140/" />
                      </br>
                      </br>
                      </br>
                        <div class="span4 well">
                            <form accept-charset="UTF-8" action="" method="POST">
                                <textarea class="span4" id="new_message" name="new_message"
                                  placeholder="nueva consulta" rows="5" cols="100">
                                </textarea>
                                </br>
                               </br>
                                <button class="btn btn-info" type="submit">Enviar</button>
                            </form>
                       </div>


                  </div>
                </div>

              {/literal}

       </div><!--/span-->

        

          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="well sidebar-nav">
              <ul class="nav">
                <li>Sidebar</li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li>Categorias</li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li>Ingrese su busqueda</li>
                <form id="custom-search-form" class="form-search form-horizontal pull-right">
                    <div class="input-append span12">
                        <input type="text" class="search-query" placeholder="Search">
                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                    </div>
                </form>
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
    <script src="offcanvas.js"></script>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>