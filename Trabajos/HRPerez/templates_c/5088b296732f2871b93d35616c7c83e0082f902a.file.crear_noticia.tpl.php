<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 00:34:04
         compiled from "./templates/crear_noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2102204110526aec11b08ae3-18449237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5088b296732f2871b93d35616c7c83e0082f902a' => 
    array (
      0 => './templates/crear_noticia.tpl',
      1 => 1382740422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102204110526aec11b08ae3-18449237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526aec11b59611_26907905',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526aec11b59611_26907905')) {function content_526aec11b59611_26907905($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<nav class="breadcrumbs">
      <a href="#">
        <div class="large-6 columns">Home</div></a>
      <a href="#">Browser</a>
      <a href="#">Software</a>
      <a href="#">Hardware</a>
      <a href="#">Website Future</a>
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

        <h3><a href="#">Crear Noticia</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Crear Noticia</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Titulo</label>
        <input type="text" name="titulo"  placeholder="Ingrese el titulo de la noticia">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Subtitulo</label>
        <input type="text" name="subtitulo" placeholder="ingrese el subtitulo de la noticia">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Cuerpo</label>
        <textarea type="text" name="cuerpo" placeholder="Ingrese el cuerpo de la noticia"></textarea>
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Numero de tag al cual corresponde la noticia</label>
        <input  type="number" name="id_tag" placeholder="Ingrese el numero de tag">
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Numero de seccion al cual corresponde la noticia</label>
        <input  type="number" name="id_seccion" placeholder="Ingrese el numero de seccion">
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
        <p>Soy Hugo Perez, creador y diseñador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseño que espero disfruten. Si quieres conocer más de mi trabajo puedes contactarme en perez.hgr@gmail.com</p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>