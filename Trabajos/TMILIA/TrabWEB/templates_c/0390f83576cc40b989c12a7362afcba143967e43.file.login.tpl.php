<?php /* Smarty version Smarty-3.1.14, created on 2014-02-25 23:10:14
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14884530d14c6cfd7b8-17080237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1383782067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14884530d14c6cfd7b8-17080237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530d14c6e94256_82247614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d14c6e94256_82247614')) {function content_530d14c6e94256_82247614($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="dist/css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <div class="jumbotron">  
          <form id="formlogin" class="form-signin" method="post">
            <h2 class="form-signin-heading">Iniciar Sesión</h2>
            <input id="mail" name="mail" type="text" class="form-control" placeholder="Correo Electronico" autofocus="">
            <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña">
            <div id="error" class="alert alert-danger" style="display: none;"></div>
            <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          </form>
      </div><!-- /jumbotron -->    

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html><?php }} ?>