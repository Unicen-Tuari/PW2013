<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 23:02:08
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4661528211bba714d7-12424346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1384293641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4661528211bba714d7-12424346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528211bbb18601_56024308',
  'variables' => 
  array (
    '_SESSION' => 0,
    'autos' => 0,
    'auto' => 0,
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528211bbb18601_56024308')) {function content_528211bbb18601_56024308($_smarty_tpl) {?><!DOCTYPE html>
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
                  
                  <?php if (isset($_smarty_tpl->tpl_vars['_SESSION']->value['mail'])){?>
                  <li class="active"><a href="index.php">Home</a></li>                  
                  <li><a href="panel.php">Panel</a></li>
                  <li><a href="logout.php">Cerrar sesion</a></li>                  
                  <?php }else{ ?>
                  <li class="active"><a href="index.php">Home</a></li>                  
                  <li><a href="login.php">Ingresar</a></li>
                  <?php }?> 
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
            <?php  $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['autos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auto']->key => $_smarty_tpl->tpl_vars['auto']->value){
$_smarty_tpl->tpl_vars['auto']->_loop = true;
?>
                <ul class="thumbnails">
                  <ul class="span5 clearfix">
                    <div class="thumbnail clearfix">
                    
                        <img src="<?php echo $_smarty_tpl->tpl_vars['auto']->value['path'];?>
" alt="" class="pull-left span2 clearfix" style='margin-right:10px; height:30%; width:50%;'>
                      <div class="caption" class="pull-left">
                        <a href='verauto.php?id=<?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
' class="btn btn-primary icon  pull-right">Ver Auto</a>
                        <h4>      
                        <a href='verauto.php?id=<?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['auto']->value['titulo'];?>
</a>
                        </h4>
                        <small><b>Precio:$</b><?php echo $_smarty_tpl->tpl_vars['auto']->value['valor'];?>
</small>
                        </br>
                        </br>                        
                        <small><b>Año: </b><?php echo $_smarty_tpl->tpl_vars['auto']->value['anio'];?>
</small>
                      </div>
                    </div>
                  </ul>
                </ul>
                
           
            <?php } ?>

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
                <li class="active" style="text-transform: capitalize;"><a href='index.php?marca=<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
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
<?php }} ?>