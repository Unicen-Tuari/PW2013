<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 00:15:57
         compiled from "./templates/getNoticias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31372797952703d4bdf8c21-27836727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cacd9d6647f3d109fce565a83e7ab09f9f081112' => 
    array (
      0 => './templates/getNoticias.tpl',
      1 => 1383088550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31372797952703d4bdf8c21-27836727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52703d4be72cc9_76428523',
  'variables' => 
  array (
    'Noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52703d4be72cc9_76428523')) {function content_52703d4be72cc9_76428523($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/opt/lampp/htdocs/HRPerez/libs/plugins/modifier.truncate.php';
?>
        
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['name'] = 'noticias';
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Noticia']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['noticias']['total']);
?>
              <article>
                        <div class="row">
                            <div class="large-12 columns">            
                  	  <h3>
                          <a href="ver_noticia_completa.php?id_noticia=<?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['id_noticia'];?>
"><?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['titulo'];?>
</a>
                      </h3>
                        <hr/>      
                      <h6>
                           <?php echo $_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['subtitulo'];?>

                      </h6><br>
                       <div class="row">
                            <div class="large-12 columns">
                                <p>
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Noticia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['noticias']['index']]['cuerpo'],250,"...",true);?>

                                </p>
                            </div>
                       </div>
                       <div class="row">
                          <div class="large-6 columns"></div>  
                       </div>
              </article>
                  <?php endfor; endif; ?>
<?php }} ?>