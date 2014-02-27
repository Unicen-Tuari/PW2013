<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 18:16:47
         compiled from ".\templates\mensaje.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5554530d160e834890-44144298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb6de690b4a53848f7a0d7a26098d2ca59635d95' => 
    array (
      0 => '.\\templates\\mensaje.tpl',
      1 => 1393521304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5554530d160e834890-44144298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530d160e8bf257_08805941',
  'variables' => 
  array (
    'usuario' => 0,
    'nombre' => 0,
    'mensaje' => 0,
    'mensajes' => 0,
    'mensaj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d160e8bf257_08805941')) {function content_530d160e8bf257_08805941($_smarty_tpl) {?><!DOCTYPE html>
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
                  <li><a href="panel.php">Panel</a></li>
                  <li><a href="logout.php">Cerrar sesion</a></li>                  
                 
                </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="panel.php">Autos</a></li>
          <li  class="active"><a href="mensaje.php">Mensajes</a></li>
           <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>     
            <li><button <button class="btn btn-primary">Bienvenido <?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre'];?>
</button></li>
          <?php } ?>
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
                          <th>Telefono</th>
                          <th>Auto</th>
                          <th>Acciones</th>
                          <th style="width: 36px;"></th>
                        </tr>
                      </thead>
                      <tbody>
                     <!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['name'] = 'mensaje';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mensaje']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mensaje']['total']);
?> -->
                      <?php  $_smarty_tpl->tpl_vars['mensaj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mensaj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensajes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mensaj']->key => $_smarty_tpl->tpl_vars['mensaj']->value){
$_smarty_tpl->tpl_vars['mensaj']->_loop = true;
?>
                        <tr>
                          <td>ID</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['mensaj']->value['texto'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['mensaj']->value['nombre'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['mensaj']->value['email'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['mensaj']->value['telefono'];?>
</td>
                          <td>Eliminar</td>                            
                        </tr>
                      <?php } ?>
                      <!-- <?php endfor; endif; ?> -->
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