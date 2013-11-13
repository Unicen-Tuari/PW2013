<?php /* Smarty version Smarty-3.1.14, created on 2013-11-09 10:05:59
         compiled from "./templates/categorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:843312241525379ef483a57-13588567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bdc4b12096f9b98702e0b02730c9aca1e3ccc07' => 
    array (
      0 => './templates/categorias.tpl',
      1 => 1384002356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '843312241525379ef483a57-13588567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525379ef4c12f0_01334355',
  'variables' => 
  array (
    'subcategorias' => 0,
    'categoria' => 0,
    'subcat' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525379ef4c12f0_01334355')) {function content_525379ef4c12f0_01334355($_smarty_tpl) {?><nav class="navbar navbar-default f_navbar_menu" role="navigation">
    <div>
      <ul class="nav navbar-nav">
        <?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subcategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
 $_smarty_tpl->tpl_vars['categoria']->value = $_smarty_tpl->tpl_vars['subcat']->key;
?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
<b class="caret"></b></a>
            <ul class="dropdown-menu">
              
                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                  <li><a href="/productos/search/<?php echo $_smarty_tpl->tpl_vars['data']->value['subcat_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['subcat_nombre'];?>
</a></li>
                <?php } ?>
                
              
            </ul>
          </li>
        
        
        <?php } ?>
      </ul>
    </div>
  </nav><?php }} ?>