<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 18:03:26
         compiled from ".\templates\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27021530d14ce99c3b6-31961904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffef8732ce486f9886a1bf8ccdcb3d6085e8e0c' => 
    array (
      0 => '.\\templates\\panel.tpl',
      1 => 1393520603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27021530d14ce99c3b6-31961904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530d14cea43587_60190993',
  'variables' => 
  array (
    'usuario' => 0,
    'nombre' => 0,
    'user' => 0,
    'autos' => 0,
    'auto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d14cea43587_60190993')) {function content_530d14cea43587_60190993($_smarty_tpl) {?><!DOCTYPE html>
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
    <!--[if lt IE 9]-->
     <!-- <script src="../../assets/js/html5shiv.js"></script> -->
     <!-- <script src="../../assets/js/respond.min.js"></script> -->


    <!--[endif]-->
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
                
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                  
                  <li><a href="index.php">Home</a></li>                  
                  <li class="active"><a href="panel.php">Panel</a></li>
                  <li><a href="logout.php">Cerrar sesion</a></li>                  
                   
                </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">
      <div class="header">

        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="panel.php">Autos</a></li>
          <li><a href="mensaje.php">Mensajes</a></li>           
          <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>     
          <li><button <button class="btn btn-primary">Bienvenido <?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre'];?>
</button></li>
          <?php } ?> 
          <!--<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
          <li><a>User:</a><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</li>
          <?php } ?> -->
        </ul>
        <h3 class="text-muted"><a href="index.php">Volver a Home</a></h3>
      </div>
      <div id="mensajes"></div>
      <div class="jumbotron">
           
                <div class="well">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Titulo Auto</th>
                          <th>Marca</th>
                          <th>Acciones</th>
                          <th style="width: 36px;"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['autos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auto']->key => $_smarty_tpl->tpl_vars['auto']->value){
$_smarty_tpl->tpl_vars['auto']->_loop = true;
?>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['auto']->value['titulo'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['auto']->value['nombre'];?>
</td>
                          <td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
"><button class="btn btn-primary">Editar</button></a></td>
                          <td><a href="#" onclick="borrarAuto(<?php echo $_smarty_tpl->tpl_vars['auto']->value['id'];?>
)"><button class="btn btn-primary">Eliminar</button></a></td>
                        </tr>                      
                        <?php } ?>                                              
                      </tbody>
                    </table>
                    <a href="addcar.php"><button class="btn btn-primary">Crear Auto</button></a>
                </div>
              
                
      </div><!-- /jumbotron -->

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->
    <script type="text/javascript" src="./js/borrar.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html><?php }} ?>