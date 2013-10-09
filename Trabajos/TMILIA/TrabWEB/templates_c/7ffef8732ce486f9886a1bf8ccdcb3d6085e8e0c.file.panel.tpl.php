<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 20:57:13
         compiled from ".\templates\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69915252fdcbd1c8a3-65230120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffef8732ce486f9886a1bf8ccdcb3d6085e8e0c' => 
    array (
      0 => '.\\templates\\panel.tpl',
      1 => 1381172211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69915252fdcbd1c8a3-65230120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5252fdcbd860e7_70449021',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252fdcbd860e7_70449021')) {function content_5252fdcbd860e7_70449021($_smarty_tpl) {?><!DOCTYPE html>
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
          <li><a href="datos.php">Mis datos</a></li>
        </ul>
        <h3 class="text-muted">Projecto: Auto tandil</h3>
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
                    <button class="btn btn-primary">Crear Auto</button>
                </div>
              
                <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Delete Confirmation</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text">Are you sure you want to delete the user?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                    </div>
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