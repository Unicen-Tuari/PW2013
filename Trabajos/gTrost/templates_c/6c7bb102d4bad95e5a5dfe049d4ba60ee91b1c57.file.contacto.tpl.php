<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 01:52:37
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67689001352538f95733f77-17246084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1381023030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67689001352538f95733f77-17246084',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52538f957d8932_46868375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52538f957d8932_46868375')) {function content_52538f957d8932_46868375($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="f_contact">
<h2>Formulario de Contacto</h2>
<p>Envíe su consulta que en 48hs nos contactaremos con usted. En caso de que busque un producto que no esté en el catálogo, favor de adjuntar una imagen de ejemplo para ayudarnos en la búsqueda.</p>
<form role="form">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su email para poder contactarlo">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Asunto">
  </div>
  <div class="form-group">
  	<textarea class="form-control"  placeholder="Detalle su consulta"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Adjuntar imagen</label>
    <input type="file" id="exampleInputFile">
    
  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>