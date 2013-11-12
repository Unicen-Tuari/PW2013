<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 15:19:27
         compiled from "./templates/crear_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68936051852823514d26a74-99999788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f60629e322796a7508e24e86b13140dfa05d236' => 
    array (
      0 => './templates/crear_tag.tpl',
      1 => 1384265952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68936051852823514d26a74-99999788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52823514d75df2_10559304',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52823514d75df2_10559304')) {function content_52823514d75df2_10559304($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
      <h1>Tecper<small> Este es mi sitio. Disfrutelo.</small></h1>
      <hr />
    </div>
  </div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">

      <article>

        <h3><a href="#">Crear Tag</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Crear Tag</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Nombre</label>
        <input type="text" name="nombre_tag"  placeholder="Ingrese el nombre del tag.">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Descripcion</label>
        <textarea type="text" name="descripcion" placeholder="Ingrese una descripcion del tag."></textarea>
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
        <h5>Biografa</h5>
        <p>Soy Hugo Perez, creador y disenador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten. Si quieres conocer mas de mi trabajo puedes contactarme <a href="envio_de_mail.php">aqui &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>