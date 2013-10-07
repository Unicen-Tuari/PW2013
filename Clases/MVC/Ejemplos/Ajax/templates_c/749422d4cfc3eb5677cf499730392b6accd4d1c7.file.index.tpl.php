<?php /* Smarty version Smarty-3.1.14, created on 2013-09-10 01:41:25
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335852165a0e0fa136-70756491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1377638607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335852165a0e0fa136-70756491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52165a0e15ce37_45737437',
  'variables' => 
  array (
    'nombres' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52165a0e15ce37_45737437')) {function content_52165a0e15ce37_45737437($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src = "./js/main.js"> </script>
  </head>

  <body onLoad="getData();">
    <div class="container">
      <div class="page-header">
        <h1>Ejemplo de utilizacion de Ajax</h1>
      </div>
      <label class="control-label" for="nombre">Nombre</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <select id="nombre" onChange = "getData();">
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
       <tbody id="tableData">

      </tbody>
    </table>
    </div>
  </body>
</html>
<?php }} ?>