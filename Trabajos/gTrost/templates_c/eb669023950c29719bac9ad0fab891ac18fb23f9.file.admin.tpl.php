<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 00:41:29
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192820261552538fb3786f09-37159658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1384227686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192820261552538fb3786f09-37159658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52538fb37c94a2_75521064',
  'variables' => 
  array (
    'subcategorias' => 0,
    'data' => 0,
    'productos' => 0,
    'categorias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52538fb37c94a2_75521064')) {function content_52538fb37c94a2_75521064($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="admin_panel navbar-inverse">
  <div class="tabbable">
  <ul class="nav nav-pills">
    <li class="active"><a href="#pane1" data-toggle="tab">Cargar producto</a></li>
    <li><a href="#pane2" data-toggle="tab">Eliminar Producto</a></li>
    <li><a href="#pane3" data-toggle="tab">Nueva Categoría/SubCategoría</a></li>
    <li><a href="#pane4" data-toggle="tab">Eliminar Categoría/Subcategoría</a></li>
  </ul>
  <div class="tab-content">
    <div id="pane1" class="tab-pane active admin_panel_form">
      <h4>Cargar nuevo producto</h4>
        <form action="/admin/uploadProduct" method="post" id="uploadProductForm" name="uploadProductForm" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="prod_nombre" id="prod_nombre" class="form-control" placeholder="Nombre del producto">
          </div>
          <div class="form-group">
            <input type="text" name="prod_precio" id="prod_precio"  class="form-control" placeholder="Precio">
          </div>
          <select class="form-control" name="prod_subcategoria" id="prod_subcategoria">
            <option disabled selected>Subcategoría</option>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['data']->value['subcat_nombre'];?>
</option>
            <?php } ?>
          </select>
          <div class="form-group">
            <textarea class="form-control" name="prod_info" id="prod_info" placeholder="Descripción"></textarea>
          </div>
          
          <div class="form-group">
            <label for="exampleInputFile">Adjuntar imagen</label>
            <input type="file" name="prod_img" id="prod_img" accept="image/*" >
            
          </div>
          
          <button type="submit" id="upload_product_btn" name="upload_product_btn" class="btn btn-default">Enviar</button>
        </form>
    </div>

    <div id="pane2" class="tab-pane">
      <h4>Seleccione el producto que desea eliminar</h4>
      
      <form class="admin_panel_form" action="/admin/eraseProduct" method="post" id="eraseProdForm" name="eraseProdForm">
        <select class="form-control" name="erase_id" id="erase_id">
          <option disabled selected>Seleccionar producto correspondiente</option>
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <option><?php echo $_smarty_tpl->tpl_vars['data']->value['producto_id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['producto_nombre'];?>
</option>
          <?php } ?>
        </select> 
        <button type="submit" id="erase_product_btn" name="erase_product_btn" class="btn btn-default">Enviar</button>
      </form>
    </div>

    <div id="pane3" class="tab-pane">
      <h4>Cargar nueva subcategoría</h4>
      <form class="admin_panel_form" action="/admin/uploadSubCat" method="post" id="uploadSubCatForm" name="uploadSubCatForm">
        <div class="form-group">
          <input type="text" name="subcat_nombre" id="subcat_nombre" class="form-control" placeholder="Nombre de la subcategoría">
        </div>
        <select class="form-control" name="subcat_cat" id="subcat_cat">
          <option disabled selected>Seleccionar categoría correspondiente</option>
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <option><?php echo $_smarty_tpl->tpl_vars['data']->value['cat_nombre'];?>
</option>
          <?php } ?>
        </select>
        <button type="submit" id="upload_subcat_btn" name="upload_subcat_btn" class="btn btn-default">Enviar</button>
      </form>

      <h4>Cargar nueva categoría</h4>
      <form class="admin_panel_form" action="/admin/uploadCat" method="post" id="uploadCatForm" name="uploadCatForm">
        <div class="form-group">
          <input type="text" name="cat_nombre" id="cat_nombre" class="form-control" placeholder="Nombre de la categoría">
        </div>
        <button type="submit" id="upload_cat_btn" name="upload_cat_btn" class="btn btn-default">Enviar</button>
      </form>
    </div>

    <div id="pane4" class="tab-pane">
      <h4>Eliminar categoría (todas las subcategorías relacionadas serán eliminadas)</h4>

      <form class="admin_panel_form" action="/admin/eraseCat" method="post" id="eraseCatForm" name="eraseCatForm">
        <select class="form-control" name="cat_nombre" id="cat_nombre">
          <option disabled selected>Seleccionar categoría a eliminar</option>
          <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
          <option><?php echo $_smarty_tpl->tpl_vars['data']->value['cat_nombre'];?>
</option>
          <?php } ?>
        </select>
        <button type="submit" id="upload_cat_btn" name="upload_cat_btn" class="btn btn-default">Enviar</button>
      </form>

      <h4>Eliminar subcategoría</h4>

      <form class="admin_panel_form" action="/admin/eraseSubCat" method="post" id="eraseSubCatForm" name="eraseSubCatForm">
        <select class="form-control" name="subcat_nombre" id="subcat_nombre">
          <option disabled selected>Seleccionar subcategoría a eliminar</option>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['data']->value['subcat_nombre'];?>
</option>
            <?php } ?>
        </select>
        <button type="submit" id="erase_subcat_btn" name="erase_subcat_btn" class="btn btn-default">Enviar</button>
      </form>
    </div>
  </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>