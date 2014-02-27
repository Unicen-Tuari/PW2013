<?php /* Smarty version Smarty-3.1.14, created on 2013-10-08 14:28:39
         compiled from ".\templates\catalogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296755253e4c34e6527-20955493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e00d184c430cb66f79718c56c84623be566677' => 
    array (
      0 => '.\\templates\\catalogo.tpl',
      1 => 1381235317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296755253e4c34e6527-20955493',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253e4c386cb75_34792617',
  'variables' => 
  array (
    'nombre' => 0,
    'subcategoria' => 0,
    'imagen' => 0,
    'descripcion' => 0,
    'precio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253e4c386cb75_34792617')) {function content_5253e4c386cb75_34792617($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


 <div class="container">
  <h1>Lista de Productos</h1>
  <a href="./formulario/index.php"><button>Agregar Producto</button></a><br>
  <table class="table table-striped">
  
  
  <thead>
    <tr>
      <th>Subcategoria</th>
      <th>Imagen</th>
      <th>Nombre</th>
	    <th>Descripcion</th>
      <th>Precio</th>
    </tr>
  </thead>
    <tbody>
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombre']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total']);
?>
 	<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['subcategoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
</td>
    <td><img src="../links/images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
"></td>
    <td><?php echo $_smarty_tpl->tpl_vars['nombre']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['descripcion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['precio']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
</td>
  </tr>
	<?php endfor; endif; ?>
  </tbody>
</table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>