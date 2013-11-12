<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 15:19:44
         compiled from "./templates/crear_seccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214388444252823116d7c946-10085233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f2d8974523dcd513ad8c563d01a2233679d78c' => 
    array (
      0 => './templates/crear_seccion.tpl',
      1 => 1384265959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214388444252823116d7c946-10085233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52823116dcab44_66508187',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52823116dcab44_66508187')) {function content_52823116dcab44_66508187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<nav class="breadcrumbs">
      <a href="index.php">
        <div class="large-6 columns">Home</div></a>
      <a href="index.php">Browser</a>
      <a href="index.php">Software</a>
      <a href="index.php">Hardware</a>
      <a href="index.php">Website Future</a>
  </nav>

  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <ul class="button-group">
         <li><a href="#" class="button">Bienvenido Hugo</a></li>
         
          </ul>
      </div>
      <h1>Tecper<small> Este es mi sitio. Disfrútelo.</small></h1>
      <hr />
    </div>
  </div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">

      <article>

        <h3><a href="#">Crear Seccion</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Crear Seccion</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Nombre</label>
        <input type="text" name="nombre_seccion"  placeholder="Ingrese el nombre de la seccion.">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Descripcion</label>
        <textarea type="text" name="descripcion" placeholder="Ingrese una descripcion de la seccion."></textarea>
      </div>
    </div>
      <a href="#"><input class="button" type="submit" value="Ok"></a>
      <a href="panel.php"><input class="button" value="Cancel"></a>
  </fieldset>
      
</form>
  

      </article>

      <hr />

      <article>
      </article>

    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">

      <div class="panel">
        <h5>Biografía</h5>
        <p>Soy Hugo Perez, creador y diseñador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseño que espero disfruten. Si quieres conocer más de mi trabajo puedes contactarme <a href="envio_de_mail.php">aquí &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>