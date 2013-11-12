<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 18:41:23
         compiled from "./templates/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12294639605271a17697a8f0-53636744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9491f1a50dd3792e662879db579e7ac9804a2a3f' => 
    array (
      0 => './templates/panel.tpl',
      1 => 1384278079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12294639605271a17697a8f0-53636744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5271a176a09e80_73983065',
  'variables' => 
  array (
    'Noticia' => 0,
    'Seccion' => 0,
    'Tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271a176a09e80_73983065')) {function content_5271a176a09e80_73983065($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
         <li><a id="logout" action= "" METHOD = "POST" href="" class="button">Logout</a></li>
       </ul>
      </div>
      <h1>Tecper<small> Este es mi sitio. Disfrutelo.</small></h1>
      <hr />
    </div>
  </div>

  <!-- Main Page Content and Sidebar -->

  <div class="row">
<div class="section-auto-sample-tabs" data-section = "tabs" >
        <section class="active">
          <p class = "title-sample" data-section-title><a href="#section1">Noticias </a></p>
          <div class="content-sample" data-slug ="section1" data-section-content>
            <p>     <div class="large-9 columns" role="content">

      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="#"></a>
      
    </h3>
        <table>
    <thead>
      <tr>
        <th width="350">Titulo</th>
        <th width="80">Seccion</th>
        <th width="80">Tag</th>
        <th width="130">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['name'] = 'noticias';
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Noticia']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total']);
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['titulo'];?>
</td>      
        <td><?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['nombre_seccion'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['nombre_tag'];?>
</td>
        <td><a href="editar_noticia.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
">Editar / </a><a href="borrar_noticia.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
">Borrar</a></td>
      </tr>
      <?php endfor; endif; ?>
    </tbody>
  </table>
      <a href="crear_noticia.php"><input class="button" type="submit" value="Crear Noticia"></a>

       
        <h6></h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p></p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>

    </div></p>
          </div>
        </section>
        <section class="active">
          <p class = "title-sample" data-section-title><a href="#section1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSecciones</a></p>
          <div class="content-sample" data-slug ="section2" data-section-content>
            <p>      <div class="large-9 columns" role="content">

      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="#"></a>
      
    </h3>
        <table>
    <thead>
      <tr>
        <th width="150">Nombre</th>
        <th width="350">Descripcion</th>
        <th width="130">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['name'] = 'seccion';
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Seccion']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['seccion']['total']);
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['Seccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['seccion']['index']]['nombre_seccion'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['Seccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['seccion']['index']]['descripcion'];?>
</td>
        <td><a href="editar_noticia.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
">Editar / </a><a href="borrar_noticia.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
">Borrar</a></td>
      </tr>
      <?php endfor; endif; ?>
    </tbody>
  </table>
      <a href="crear_seccion.php"><input class="button" type="submit" value="Crear Seccion"></a>

       
        <h6></h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p></p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>

    </div></p>
            </div>
        </section>
        <section class="active">
          <p class = "title-sample" data-section-title><a href="#section1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTags</a></p>
          <div class="content-sample" data-slug ="section2" data-section-content>
            <p>      <div class="large-9 columns" role="content">

      <article>
        <div class="row">
          <div class="large-12 columns">
            <p>
      
    <h3>
      <a href="#"></a>
      
    </h3>
        <table>
    <thead>
      <tr>
        <th width="150">Nombre</th>
        <th width="350">Descripcion</th>
        <th width="130">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['name'] = 'tags';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Tag']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total']);
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['Tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['nombre_tag'];?>
</td>      
        <td><?php echo $_smarty_tpl->tpl_vars['Tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['descripcion'];?>
</td>
        <td><a href="editar_noticia.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
">Editar / </a><a href="borrar_noticia.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
">Borrar</a></td>
      </tr>
      <?php endfor; endif; ?>
    </tbody>
  </table>
      <a href="crear_tag.php"><input class="button" type="submit" value="Crear Tag"></a>

       
        <h6></h6><br>

        <div class="row">
          <div class="large-12 columns">
            <p></p>
            
          </div>
        </div>
          <div class="row">
          <div class="large-6 columns">
            
            
            
          </div>
          
        </div>
        
      </article>

    </div></p>
            </div>
        </section>


</div>
    <!-- Main Blog Content -->


    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">

      <h5>Tags</h5>
      <ul class="side-nav">
	  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['name'] = 'tags';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Tag']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tags']['total']);
?>
        <li><a href="index.php?idTag=<?php echo $_smarty_tpl->tpl_vars['Tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['id_tag'];?>
"><?php echo $_smarty_tpl->tpl_vars['Tag']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tags']['index']]['nombre_tag'];?>
</a></li>
	<?php endfor; endif; ?>
      </ul>

      <div class="panel">
        <h5>Biografia</h5>
        <p>Soy Hugo Perez,creador y disenador del proyecto Tecper.Dedico parte de mi tiempo a actualizar y mantener este proyecto de diseno que espero disfruten.Si quieres conocer mas de mi trabajo puedes contactarme <a href="envio_de_mail.php">aqui &rarr;</a></p>
      </div>

    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>