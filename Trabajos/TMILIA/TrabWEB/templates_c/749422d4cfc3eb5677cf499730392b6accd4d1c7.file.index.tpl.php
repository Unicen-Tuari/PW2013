<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 00:06:00
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16000527ac5c617e963-64507763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1383779157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16000527ac5c617e963-64507763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527ac5c625bde6_41564158',
  'variables' => 
  array (
    'autos' => 0,
    'imagenes' => 0,
    'auto' => 0,
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ac5c625bde6_41564158')) {function content_527ac5c625bde6_41564158($_smarty_tpl) {?><!DOCTYPE html>
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
                  <li class="active"><a href="index.php">Home</a></li>
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

          
            <?php  $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['autos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auto']->key => $_smarty_tpl->tpl_vars['auto']->value){
$_smarty_tpl->tpl_vars['auto']->_loop = true;
?>
                <ul class="thumbnails">
                  <ul class="span5 clearfix">
                    <div class="thumbnail clearfix">
                    
                        <img src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value;?>
" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px; height:30%; width:50%;'>
                      
                      
                      <div class="caption" class="pull-left" >
                        <a href='verauto.php?id=<?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
' class="btn btn-primary icon  pull-right">Ver Auto</a>
                        <h4>      
                        <a href='verauto.php?id=<?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
' ><?php echo $_smarty_tpl->tpl_vars['auto']->value['titulo'];?>
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
  </body>
</html>
<?php }} ?>