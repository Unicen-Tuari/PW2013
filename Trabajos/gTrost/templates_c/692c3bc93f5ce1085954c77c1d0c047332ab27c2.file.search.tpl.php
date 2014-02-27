<?php /* Smarty version Smarty-3.1.14, created on 2013-11-09 09:29:34
         compiled from "./templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15931776845253a645578c55-04329304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692c3bc93f5ce1085954c77c1d0c047332ab27c2' => 
    array (
      0 => './templates/search.tpl',
      1 => 1384000160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15931776845253a645578c55-04329304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253a645605a23_29456978',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253a645605a23_29456978')) {function content_5253a645605a23_29456978($_smarty_tpl) {?><div class="productos_container">
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
</div>
<?php }} ?>