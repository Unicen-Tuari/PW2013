<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 01:06:52
         compiled from ".\templates\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31175527ad99cc94021-56012284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffef8732ce486f9886a1bf8ccdcb3d6085e8e0c' => 
    array (
      0 => '.\\templates\\panel.tpl',
      1 => 1383685267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31175527ad99cc94021-56012284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527ad99ccd6e70_88013233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ad99ccd6e70_88013233')) {function content_527ad99ccd6e70_88013233($_smarty_tpl) {?><!DOCTYPE html>
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
</html><?php }} ?>