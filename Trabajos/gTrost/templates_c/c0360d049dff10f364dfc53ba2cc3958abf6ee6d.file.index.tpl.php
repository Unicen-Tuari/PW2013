<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 01:34:33
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2072633462525379ef3e86f9-49321902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1381206870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2072633462525379ef3e86f9-49321902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525379ef4768b1_23341907',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525379ef4768b1_23341907')) {function content_525379ef4768b1_23341907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 
  <div class="f_index_productos">


    <div class="row-fluid">
      <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
          <div class="col-md-3 f_prod">
            <div class="catalogo_foto">
              <a href="/item/search/<?php echo $_smarty_tpl->tpl_vars['producto']->value['producto_id'];?>
"><img class="catalogo_thumb" src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['foto'];?>
"></a>  
            </div>
            <div class="catalogo_info">
              <a href="/item/search/<?php echo $_smarty_tpl->tpl_vars['producto']->value['producto_id'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['producto']->value['producto_nombre'];?>
</h4></a>
              <h5>$<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</h5>
            </div>
          

          </div>
      <?php } ?>
    </div>
    <div class="f_pagination">
      <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>