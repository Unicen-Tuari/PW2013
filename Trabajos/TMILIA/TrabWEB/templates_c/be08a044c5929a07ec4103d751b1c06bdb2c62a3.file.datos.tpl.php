<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 20:57:37
         compiled from ".\templates\datos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3051452530410f0aba8-90797773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be08a044c5929a07ec4103d751b1c06bdb2c62a3' => 
    array (
      0 => '.\\templates\\datos.tpl',
      1 => 1381172254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3051452530410f0aba8-90797773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253041105b606_30693313',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253041105b606_30693313')) {function content_5253041105b606_30693313($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Panel</title>

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
          <li><a href="panel.php">Autos</a></li>
          <li><a href="mensaje.php">Mensajes</a></li>
          <li class="active"><a href="datos.php">Mis datos</a></li>
        </ul>
        <h3 class="text-muted">Project name</h3>
      </div>

      <div class="jumbotron">

          <div class="span3 well">
              <legend>Datos Usarios</legend>
                <form accept-charset="UTF-8" action="" method="post">
                    <input class="span3" name="name" placeholder="Full Name" type="text"> 
                    <input class="span3" name="username" placeholder="Username" type="text">
                    <input class="span3" name="password" placeholder="Password" type="password"> 
                    <button class="btn btn-warning" type="submit">Guardar</button>
                </form>
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
</html>  <?php }} ?>