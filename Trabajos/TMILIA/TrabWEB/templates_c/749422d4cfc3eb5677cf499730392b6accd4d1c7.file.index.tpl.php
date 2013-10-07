<?php /* Smarty version Smarty-3.1.14, created on 2013-10-03 08:37:03
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585524cbad4172f84-21757629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1380782208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585524cbad4172f84-21757629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524cbad438af61_55927683',
  'variables' => 
  array (
    'autos' => 0,
    'auto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524cbad438af61_55927683')) {function content_524cbad438af61_55927683($_smarty_tpl) {?><!DOCTYPE html>
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
                <a class="navbar-brand" href="#">Project name</a>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="newuser">Registrarse</a></li>
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
          
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>"Auto"</h2>
              <p>Descripcion coche</p>
              <p><a class="btn btn-default" href="#">Ver auto &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          


      
      
          <?php  $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['autos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auto']->key => $_smarty_tpl->tpl_vars['auto']->value){
$_smarty_tpl->tpl_vars['auto']->_loop = true;
?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['auto']->value['nombre_estado'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="Retirada"){?>
              <?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("success", true, 0);?>
            <?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['auto']->value['nombre_estado'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="En Reparación"){?>
              <?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("danger", true, 0);?>
            <?php }else{ ?>
              <?php $_smarty_tpl->tpl_vars["clase"] = new Smarty_variable("warning", true, 0);?>
            <?php }}?>
         
      
                  <ul class="thumbnails">
                    <ul class="span5 clearfix">
                      <div class="thumbnail clearfix">
                        <img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
                        <div class="caption" class="pull-left">
                          <a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">Ver Auto</a>
                          <h4>      
                          <a href="#" ><?php echo $_smarty_tpl->tpl_vars['auto']->value['titulo'];?>
</a>
                          </h4>
                          <small><b>Precio: </b><?php echo $_smarty_tpl->tpl_vars['auto']->value['valor'];?>
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
                <li>Sidebar</li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li>Sidebar</li>
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

      <hr>

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