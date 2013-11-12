<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 19:11:22
         compiled from "./templates/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9494681435271a6254ccb07-63751125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d0eaafe423e2ae03510ff7729ec83497f52fcb' => 
    array (
      0 => './templates/admin_login.tpl',
      1 => 1384279596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9494681435271a6254ccb07-63751125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5271a62554e453_27646365',
  'variables' => 
  array (
    'Seccion' => 0,
    'Tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271a62554e453_27646365')) {function content_5271a62554e453_27646365($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<nav class="breadcrumbs">
      <a href="index.php">
        <div class="large-6 columns"></div></a>
        <a href="index.php">Home</a>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['name'] = 'secciones';
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Seccion']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['secciones']['total']);
?>
        <a href="index.php?idSection=<?php echo $_smarty_tpl->tpl_vars['Seccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['secciones']['index']]['id_seccion'];?>
"><?php echo $_smarty_tpl->tpl_vars['Seccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['secciones']['index']]['nombre_seccion'];?>
</a>
    <?php endfor; endif; ?>     
</nav>

  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <ul class="button-group">
         
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

        <h3><a href="#">Login</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
            <form id="formulariologin" action= "" METHOD = "POST">
  <fieldset>
    <legend>Please sign in</legend>

    <div class="row">
      <div class="large-12 columns">
        <label>Usuario</label>
        <input id="name" name="mail" type="text" placeholder="Direccion de e-mail">
      </div>
    </div>

      <div class="row">
      <div class="large-12 columns">
        <label>Password</label>
        <input id="password" name="pass" type="password" placeholder="Password">
      </div>
      
    </div>
      <div>
      <a><input class="button" type="submit" value="Sign in"></a>
      <a href="index.php"><input class="button" value="Cancel"></a>
      
    </div><br>
  
  </div>
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