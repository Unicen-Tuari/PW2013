<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 20:08:15
         compiled from ".\templates\addcar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1102252827c9fa43656-41632213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8ae43f58172b250d4cef50c62a4069008ef9acc' => 
    array (
      0 => '.\\templates\\addcar.tpl',
      1 => 1384255708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1102252827c9fa43656-41632213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52827c9faf98e7_61479000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52827c9faf98e7_61479000')) {function content_52827c9faf98e7_61479000($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Add Car</title>

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
        <form action="addcar.php" role="form" id="formAuto" method="POST" enctype="multipart/form-data" onsubmit="return formulario(this)">
          <div class="form-group">
            <label for="exampleInputTitulo" name="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="Ingresa el titulo" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputPrecio" name="valor" >Precio</label>
            <input type="text" class="form-control" name="valor" placeholder="$" required/>
          </div>
          <label for="exampleInputMarca">Elige la Marca</label>
          <select class="form-control" name="marca">
            
             <?php  $_smarty_tpl->tpl_vars['marca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marcas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->key => $_smarty_tpl->tpl_vars['marca']->value){
$_smarty_tpl->tpl_vars['marca']->_loop = true;
?>
                  <option style="text-transform: capitalize;" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>              
             <?php } ?>
          </select>
          <div class="form-group">
            <label for="exampleInputModelo" name="modelo" >Modelo</label>
            <input type="text" class="form-control" name="modelo" placeholder="Ingrese el Modelo" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputAño" name="anio" >Año</label>
            <input type="text" class="form-control" name="anio" placeholder="Ingrese año del auto" required/>
          </div>
          <div class="form-group">
            <label for="exampleInputAño" name="descripcion" >Descripcion</label>
            <textarea type="text" class="form-control" name="descripcion" placeholder="Ingrese su Descripcion"required></textarea>
          </div>
          <div class="form-group">
            <label for="imagen" >Agregar Imagen</label>
            <input type='file' name="imagen" id="imagen" required/>
            <label for="imagen">Agregar Imagen 2 </label>
            <input type='file' name="imagen2" id="imagen2">
            <label for="imagen">Agregar Imagen 3</label>
            <input type='file' name="imagen3" id="imagen3">

                    
          <button id ="grabarAuto" type="submit" class="btn btn-primary btn-lg btn-block">Subir</button>
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
</html><?php }} ?>