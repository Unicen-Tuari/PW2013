<?php /* Smarty version Smarty-3.1.14, created on 2013-08-21 01:45:14
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10135213f8a9b46243-10693076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1377042310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10135213f8a9b46243-10693076',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5213f8a9d761e0_58895407',
  'variables' => 
  array (
    'nombres' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5213f8a9d761e0_58895407')) {function content_5213f8a9d761e0_58895407($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


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
             <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>  
              <option value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value['Nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['Nombre'];?>
</option>
            <?php } ?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>





<?php }} ?>