<?php /* Smarty version Smarty-3.1.14, created on 2013-11-09 23:26:30
         compiled from "./templates/editar_noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203994143052798fd36922d0-14681621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26aaecdf50fd68147b8226e54efbe684c3a1150b' => 
    array (
      0 => './templates/editar_noticia.tpl',
      1 => 1384035984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203994143052798fd36922d0-14681621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52798fd37ba081_52086196',
  'variables' => 
  array (
    'Noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52798fd37ba081_52086196')) {function content_52798fd37ba081_52086196($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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

        <h3><a href="#">Editar Noticia</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
<form  ACTION ="" METHOD ="POST">
  <fieldset>
    <legend>Editar Noticia</legend>

   <div class="row">
      <div class="large-12 columns">
        <label>Titulo</label>
        <input type="text" name="titulo"  placeholder="Ingrese el titulo de la noticia" value="<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['titulo'];?>
">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Subtitulo</label>
        <input type="text" name="subtitulo" placeholder="ingrese el subtitulo de la noticia" value="<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['subtitulo'];?>
">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Cuerpo</label>
        <textarea type="text" name="cuerpo" placeholder="Ingrese el cuerpo de la noticia"  value ="<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['cuerpo'];?>
"></textarea>
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Tag</label>
        <select>
          <option value="1">Chrome</option>
          <option value="2">Explorer</option>
          <option value="3">Firefox</option>
          <option value="4" selected>Opera</option>
          <option value="5">Safari</option>
        </select>
        <input  type="number" name="id_tag" placeholder="Ingrese el numero de tag" value="<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['nombre_tag'];?>
">
      </div>
      
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Numero de seccion al cual corresponde la noticia</label>
        <input  type="number" name="id_seccion" placeholder="Ingrese el numero de seccion" value="<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['nombre_seccion'];?>
">
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
        <p>Soy Hugo Perez, creador y diseñador del proyecto Tecper. Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseño que espero disfruten. Si quieres conocer más de mi trabajo puedes contactarme <a href="#">aquí &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>