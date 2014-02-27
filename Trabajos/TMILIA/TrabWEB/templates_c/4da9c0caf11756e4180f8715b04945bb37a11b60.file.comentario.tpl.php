<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 18:28:21
         compiled from ".\templates\comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13887530e72ca388c19-81949523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4da9c0caf11756e4180f8715b04945bb37a11b60' => 
    array (
      0 => '.\\templates\\comentario.tpl',
      1 => 1393522088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13887530e72ca388c19-81949523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530e72ca42a7b2_94637743',
  'variables' => 
  array (
    'comentario' => 0,
    'coment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e72ca42a7b2_94637743')) {function content_530e72ca42a7b2_94637743($_smarty_tpl) {?> 

        <div class="span4 well">
        	<?php  $_smarty_tpl->tpl_vars['coment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coment']->key => $_smarty_tpl->tpl_vars['coment']->value){
$_smarty_tpl->tpl_vars['coment']->_loop = true;
?>
         
              <li><b>Nombre:</b><?php echo $_smarty_tpl->tpl_vars['coment']->value['nombre'];?>
</li> 
            

            <dt>
              <?php echo $_smarty_tpl->tpl_vars['coment']->value['texto'];?>

            </dt> 
            <?php } ?>
        </div><?php }} ?>