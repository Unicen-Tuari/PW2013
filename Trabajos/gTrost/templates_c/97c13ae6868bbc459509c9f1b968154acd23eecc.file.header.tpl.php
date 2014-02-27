<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 16:18:12
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:911606773525379ef47c182-04375712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1384283886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911606773525379ef47c182-04375712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525379ef47fd76_90980037',
  'variables' => 
  array (
    'message' => 0,
    'usuario_mail' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525379ef47fd76_90980037')) {function content_525379ef47fd76_90980037($_smarty_tpl) {?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Fretzilland</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" />

    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script> 
     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script> 
    <script type="text/javascript" src="/js/main.js"></script> 





  <?php if ($_smarty_tpl->tpl_vars['message']->value!=-1){?>

   <script>
   
   $(function() {
      $("#texto_mensaje").html(
          "<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
"
      );

      $( "#dialogo" ).dialog({
        height: 140,
        
        closeOnEscape: true,
        position: { my: "top+40", at: "top+40", of: window },
        modal: true
      });
    });
  

</script>   

  <?php }?>

  </head>
  <body>
<div id="dialogo" style="display:none;">
  <div id="texto_mensaje">
  Texto Default
  </div>
</div>

  <div id="container">
    <div id="f_body">

      <div class="f_header">
      <nav class="navbar navbar-default navbar-inverse f_navbar_header" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Fretzilland</a>
        </div>
        <div>
          <form class="navbar-form navbar-right" action="/search" method="post" role="search" id="searchform" name="searchform">
          <div class="form-group">
            <input type="text" name="search_kw" id="search_kw" class="form-control" placeholder="Buscar producto">
          </div>
          <button type="submit" id="searchbtn" name="searchbtn" class="btn btn-default">Buscar</button>
          </form>
        <ul class="nav navbar-nav navbar-right">

          <?php if ($_smarty_tpl->tpl_vars['usuario_mail']->value==-1){?>
            <li><a href="/signup">Registrarse</a></li>
            <li><a href="#" id="login">Iniciar sesión</a></li> 
          <?php }else{ ?>
             <li><a href="/cart" id="logout">Carro de Compras</a></li>    
             <li><a href="/index/logout" id="logout">Cerrar sesión</a></li>
             <?php if ($_smarty_tpl->tpl_vars['admin']->value==1){?>
             <li><a href="/admin" id="logout">Panel de Admin</a></li>
             <?php }?>
          <?php }?>
          
        
        </ul>
        </div>
        
      </nav>
      <div class="f_login navbar-inverse" id="f_login">
          <form action="/index/login" method="post" id="loginform" name="loginform">
          <div class="form-group">
            <input type="email" name="usuario_mail" id="usuario_mail" class="login-control" placeholder="Email">
            <input type="password" name="usuario_pass" id="usuario_pass" class="login-control" placeholder="Password">
          </div>
          <button type="submit" id="loginbtn" name="loginbtn" class="btn btn-default btn-login">Iniciar Sesion</button>
          </form>
          <a href="#"><span class="glyphicon glyphicon-remove login-close"></span></a>

      </div>
      </div><?php }} ?>