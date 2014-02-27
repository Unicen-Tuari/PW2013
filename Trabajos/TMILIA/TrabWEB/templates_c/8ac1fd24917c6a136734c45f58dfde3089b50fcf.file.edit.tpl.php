<?php /* Smarty version Smarty-3.1.14, created on 2014-02-25 23:26:35
         compiled from ".\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4224530d189bcceec8-55748527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac1fd24917c6a136734c45f58dfde3089b50fcf' => 
    array (
      0 => '.\\templates\\edit.tpl',
      1 => 1393022445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4224530d189bcceec8-55748527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upload' => 0,
    'key' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530d189bdbf384_75715446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d189bdbf384_75715446')) {function content_530d189bdbf384_75715446($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Editar Auto</title>

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
                
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                  <?php if (session_start()){?>
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
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="panel.php">Autos</a></li>
          <li><a href="mensaje.php">Mensajes</a></li>
          <li><a href="logout.php">Cerrar Sesion</a></li>
        </ul>
        <h3 class="text-muted"><a href="index.php">Volver a Home</a></h3>
      </div>

      <div class="jumbotron">

        <h2>Competa el siguiente formulario para registrar un nuevo auto</h2>

</form>
        <form action="edit.php" role="form" id="formAuto" method="POST" enctype="multipart/form-data" >
         <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['upload']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?> 
         <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['id'];?>
">
          <div class="form-group">
            <label for="exampleInputTitulo" name="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="Ingresa el titulo" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['titulo'];?>
" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputPrecio" name="valor">Precio</label>
            <input type="text" class="form-control" name="valor" placeholder="$"  value="<?php echo $_smarty_tpl->tpl_vars['key']->value['valor'];?>
" required/>
          </div>
          <label for="exampleInputMarca">Elige la Marca</label>
          <select class="form-control" name="marca">
            
             
                  <option style="text-transform: capitalize;" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nombre'];?>
</option>              
             
          </select>
          <div class="form-group">
            <label for="exampleInputModelo" name="modelo">Modelo</label>
            <input type="text" class="form-control" name="modelo" placeholder="Ingrese el Modelo"  value="<?php echo $_smarty_tpl->tpl_vars['key']->value['modelo'];?>
" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputAño" name="anio" >Año</label>
            <input type="text" class="form-control" name="anio" placeholder="Ingrese año del auto" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['anio'];?>
" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputAño" name="descripcion" >Descripcion</label>
            <textarea type="text" class="form-control" name="descripcion" placeholder="Ingrese su Descripcion"  required/><?php echo $_smarty_tpl->tpl_vars['key']->value['descripcion'];?>
</textarea>
          </div>         
          <?php } ?>
         
                    
          <button id ="editarcar" type="submit" class="btn btn-primary btn-lg btn-block">Editar</button>
        </form>
      </div><!-- /jumbotron -->

      <script>function formulario(f) { 
        if (f.anio.value   == < 1980) { alert ('El año del auto es invalido');  
        f.anio.focus(); return false; } 
        if (f.anio.value  == >2013) { alert ('El año del auto es invalido'); 
        f.anio.focus(); return false; } return true; } 
      </script>


       <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php }} ?>