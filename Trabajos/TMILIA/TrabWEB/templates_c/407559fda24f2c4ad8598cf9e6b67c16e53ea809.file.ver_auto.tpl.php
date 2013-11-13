<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 22:59:06
         compiled from ".\templates\ver_auto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056528211c2394538-63686555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '407559fda24f2c4ad8598cf9e6b67c16e53ea809' => 
    array (
      0 => '.\\templates\\ver_auto.tpl',
      1 => 1384293529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056528211c2394538-63686555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528211c2454464_03960398',
  'variables' => 
  array (
    '_SESSION' => 0,
    'auto' => 0,
    'imagenes' => 0,
    'img' => 0,
    'comentario' => 0,
    'coment' => 0,
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528211c2454464_03960398')) {function content_528211c2454464_03960398($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="dist/assets/ico/favicon.png">

    <title>Autos Olavarria</title>

    <!-- Bootstrap core CSS -->
     <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="dist/css/bootstrap.css" rel="stylesheet">
     <link href="dist/css/jquery.bxslider.css" rel="stylesheet">
     <script src="./js/jquery.bxslider.min.js"></script>
     <script src="./js/galeria.js"></script> 

   

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
        
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">                  
                  <?php if (isset($_smarty_tpl->tpl_vars['_SESSION']->value['mail'])){?>
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
     <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Consecionaria Tandil</h1>
            <p>Los mejores coches a tu alcance</p>
          </div>
          
              <div class="row-fluid">
                   <div class="span12">
                  
                            <h3><?php echo $_smarty_tpl->tpl_vars['auto']->value[0]['titulo'];?>
</h3>
                          </p>
                          <ul>
                            <li>
                             <b>Valor:<?php echo $_smarty_tpl->tpl_vars['auto']->value[0]['valor'];?>
</b>
                            </li>
                            <li>
                              <b>Modelo:<?php echo $_smarty_tpl->tpl_vars['auto']->value[0]['modelo'];?>
</b>
                            </li>
                            <li>
                              <b>Año:<?php echo $_smarty_tpl->tpl_vars['auto']->value[0]['anio'];?>
</b>
                            </li>
                          </ul>
                          <dl>
                            <dt>
                              <b>Descripcion del auto</b>
                            </dt>

                            <dd>
                              <?php echo $_smarty_tpl->tpl_vars['auto']->value[0]['descripcion'];?>

                            </dd>
                          </dl>

                          <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                       
                             <div style="height:30%; width:30%; float: left; margin-right: 10px;">

                                <img alt="320x240" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['path'];?>
" class="img-thumbnail" />

                             </div>

                          <?php } ?>

                          

                       <div style="clear: both;"></div>

                       </br>
                        </br> 
                        <div class="span4 well">
                            <form accept-charset="UTF-8" action="verauto.php" method="POST">
                                <div class="form-group">
                                  <label name="nombre">Nombre</label>
                                  <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
                                </div>
                                <div class="form-group">
                                  <label  name="email">Email</label>
                                  <input type="text" class="form-control" name="email" placeholder="Ingresa tu correo">
                                </div>
                                 <div class="form-group">
                                  <label  name="telefono">Telefono</label>
                                  <input type="text" class="form-control" name="telefono" placeholder="Ingresa tu numero de telefono">
                                </div>

                                <textarea class="span4" name="texto" placeholder="Ingresa tu consulta" rows="5" cols="100">
                                </textarea>
                                </br>
                                </br>
                                <button class="btn btn-info" type="submit">Enviar</button>
                            </form>
                        </div>

                         <?php  $_smarty_tpl->tpl_vars['coment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coment']->key => $_smarty_tpl->tpl_vars['coment']->value){
$_smarty_tpl->tpl_vars['coment']->_loop = true;
?>
                        <div class="span4 well">
                           <dt>
                              <b>Nombre:</b><dd><?php echo $_smarty_tpl->tpl_vars['coment']->value['nombre'];?>
</dd> 
                            </dt>

                            <dd>
                              <?php echo $_smarty_tpl->tpl_vars['coment']->value['texto'];?>

                            </dd> 


                        </div>
                        <?php } ?>
 
                </div>
            </div>

           

       </div><!--/span-->

        

          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="well sidebar-nav">
              <ul class="nav">
                <li>Categorias</li>
                <?php  $_smarty_tpl->tpl_vars['marca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marcas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->key => $_smarty_tpl->tpl_vars['marca']->value){
$_smarty_tpl->tpl_vars['marca']->_loop = true;
?>
               
                <li class="active" style="text-transform: capitalize;"><a href='index.php?marca=<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</a></li>  
                 <?php } ?>   
                              
              </ul>
            </div><!--/.well -->
          </div><!--/span-->
      </div><!--/row-->


    
      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html><?php }} ?>