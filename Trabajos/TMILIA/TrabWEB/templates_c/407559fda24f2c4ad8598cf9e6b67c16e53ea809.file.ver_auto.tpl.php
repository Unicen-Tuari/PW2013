<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 19:12:59
         compiled from ".\templates\ver_auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3148252517affc2d688-37699092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '407559fda24f2c4ad8598cf9e6b67c16e53ea809' => 
    array (
      0 => '.\\templates\\ver_auto.tpl',
      1 => 1381252375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3148252517affc2d688-37699092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52517affca7f42_53229157',
  'variables' => 
  array (
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52517affca7f42_53229157')) {function content_52517affca7f42_53229157($_smarty_tpl) {?><!DOCTYPE html>
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
     <link href="dist/css/bootstrap.css" rel="stylesheet">
    
   

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
        
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="login.php">Ingresar</a></li>
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
            <h1>Autos Tandil</h1>
            <p>descripcion pagina</p>
          </div>
                  <div class="row-fluid">
                    <div class="span12">
                      <p text-align="center">
                         
                          
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

                      <img alt="320x240" src="http://lorempixel.com/140/140/" />
                      
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

              

       </div><!--/span-->

        

          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="well sidebar-nav">
              <ul class="nav">
                <li>Categorias</li>
                <?php  $_smarty_tpl->tpl_vars['marca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marcas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->key => $_smarty_tpl->tpl_vars['marca']->value){
$_smarty_tpl->tpl_vars['marca']->_loop = true;
?>
                <li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</a></li>  
                 <?php } ?>   
                              
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
</html><?php }} ?>