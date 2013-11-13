<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 16:13:11
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2072633462525379ef3e86f9-49321902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1384283590,
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
    'total_paginas' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525379ef4768b1_23341907')) {function content_525379ef4768b1_23341907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("categorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <div class="productos_container">
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
        <li><a href="/index/index/1">&laquo;</a></li>
          <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int)ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['total_paginas']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_paginas']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0){
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++){
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                <li><a href="/index/index/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
          <?php }} ?>
        <li><a href="/index/index/<?php echo $_smarty_tpl->tpl_vars['total_paginas']->value;?>
">&raquo;</a></li>
      </ul>
    </div>

  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>