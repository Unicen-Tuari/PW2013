<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 23:22:40
         compiled from ".\templates\mensaje.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26855525302aa2d1bb2-89345853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb6de690b4a53848f7a0d7a26098d2ca59635d95' => 
    array (
      0 => '.\\templates\\mensaje.tpl',
      1 => 1381173031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26855525302aa2d1bb2-89345853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525302aa32e5c0_67345696',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525302aa32e5c0_67345696')) {function content_525302aa32e5c0_67345696($_smarty_tpl) {?><!DOCTYPE html>
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
          <li  class="active"><a href="mensaje.php">Mensajes</a></li>
          <li><a href="datos.php">Mis datos</a></li>
        </ul>
       <h3 class="text-muted"><a href="index.php">Volver a Home</a></h3>
      </div>

      <div class="jumbotron">
           
                <div class="well">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Mensajes</th>
                          <th>Usuario</th>
                          <th>Auto</th>
                          <th>Acciones</th>
                          <th style="width: 36px;"></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>ID</td>
                          <td>"Mensaje"</td>
                          <td>"Tomas"</td>
                          <td>"Ford Ka"</td>
                          <td>"Editar"</td><td>"Borrar"</td>
                        </tr>
                         <tr>
                          <td>ID</td>
                          <td>"Mensaje"</td>
                          <td>"Tomas"</td>
                          <td>"Ford Ka"</td>
                          <td>"Editar"</td><td>"Borrar"</td>
                        </tr>
                       
                      </tbody>
                    </table>
                   
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