<?php /* Smarty version Smarty-3.1.14, created on 2013-08-21 01:32:19
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:121875213fc8344c670-50823254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1377039344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121875213fc8344c670-50823254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5213fc834d6676_43340096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5213fc834d6676_43340096')) {function content_5213fc834d6676_43340096($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1>Ejemplo de utilizacion de Ajax</h1>
      </div>
       <label class="control-label" for="nombre">Nombre</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <select id="nombre">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['name'] = 'nombre';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Nombre']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['nombre']['total']);
?>
              <option value="nombre"><?php echo $_smarty_tpl->tpl_vars['Nombre']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nombre']['index']];?>
</option>
            <?php endfor; endif; ?>
      </select>
        </div>
      </div>
      
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan</td>
          <td>Perez</td>
          <td>jp@gmail.com</td>
        </tr>
        <tr>
          <td>Juan</td>
          <td>Gomez</td>
          <td>jgomez@gmail.com</td>
        </tr>
      </tbody>
    </table>
</div>

      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php }} ?>