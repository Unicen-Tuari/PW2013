<?php /* Smarty version Smarty-3.1.14, created on 2013-11-11 03:22:23
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67689001352538f95733f77-17246084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1384148687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67689001352538f95733f77-17246084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52538f957d8932_46868375',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52538f957d8932_46868375')) {function content_52538f957d8932_46868375($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="f_contact">
<h2>Formulario de Contacto</h2>
<p>Envíe su consulta y en 48hs nos contactaremos con usted. En caso de que desee un producto que no esté en el catálogo, favor de ser lo más específico posible para ayudarnos en la búsqueda.</p>
<form method="post" action="/contacto/enviar" id="contactForm" name="contactForm">
  <div class="form-group">
    <input type="email" class="form-control" id="contacto_email" name="contacto_email" placeholder="Ingrese su email para poder contactarlo">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="contacto_asunto" name="contacto_asunto" placeholder="Asunto">
  </div>
  <div class="form-group">
  	<textarea class="form-control" id="contacto_mensaje" name="contacto_mensaje" placeholder="Detalle su consulta"></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>