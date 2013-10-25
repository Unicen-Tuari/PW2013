<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 00:18:03
         compiled from "./templates/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1474872184526aee1bb63f49-24813479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d0eaafe423e2ae03510ff7729ec83497f52fcb' => 
    array (
      0 => './templates/admin_login.tpl',
      1 => 1382636675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474872184526aee1bb63f49-24813479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526aee1bbbdf16_34535084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526aee1bbbdf16_34535084')) {function content_526aee1bbbdf16_34535084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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

        <h3><a href="#">Login</a></h3>
        
        <div class="row">
          <div class="large-6 columns">
            <form ACTION = "" METHOD = "POST">
  <fieldset>
    <legend>Administrador</legend>

    <div class="row">
      <div class="large-12 columns">
        <label>Usuario</label>
        <input id="name" type="text" name="nombre" placeholder="Ingrese su nombre">
      </div>
    </div>

      <div class="row">
      <div class="large-12 columns">
        <label>Password</label>
        <input id="password" type="password" name="contrasena"placeholder="Ingrese el password">
      </div>
      
    </div>
      <div>
      <a href="cargar_noticia.php"><input class="button" type="submit" onclick="verificarFormulario();" value="LogIn"><hr></a>
      
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