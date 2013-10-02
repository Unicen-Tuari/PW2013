<?php /* Smarty version Smarty-3.1.14, created on 2013-10-01 21:02:53
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5059865495240ae7a55e7b2-05387752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1380672171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5059865495240ae7a55e7b2-05387752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240ae7a65eda8_14425665',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240ae7a65eda8_14425665')) {function content_5240ae7a65eda8_14425665($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
<div class="container">
	<div class="row text-center">
		<div class="col-lg-12">
			<ul class="nav nav-tabs tab_container">
  				<li><a data-toggle="tab" href="#tablareparaciones" id="tab_reparaciones"><span class="glyphicon glyphicon-wrench"></span></a></li>
	  			<li><a data-toggle="tab" href="#tablaclientes" id="tab_clientes"><span class="glyphicon glyphicon-user"></span></a></li>
	  		<li><a data-toggle="tab" href="#buscar" id="tab_buscar"><span class="glyphicon glyphicon-search"></span></a></li>
	  			<li class="pull-right"><a data-toggle="tab" href="#nuevocliente" id="tab_nuevocliente"><span class="btn-xs glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-user"></span></a></li>
          <li class="pull-right"><a data-toggle="tab" href="#nuevareparacion" id="tab_nuevareparacion"><span class="btn-xs glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-wrench"></span></a></li>
			</ul>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-lg-12">
      <div class="tab-content">
        <div class="tab-pane fade" id="tablareparaciones"></div>
        <div class="tab-pane fade" id="tablaclientes"></div>
        <div class="tab-pane fade" id="nuevareparacion"></div>
        <div class="tab-pane fade" id="nuevocliente"></div>
        <div class="tab-pane fade" id="buscar"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
      <ul class="pagination pagination-sm">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
  </div>
</div>
</div>
 <div class="modal fade" id="modal_emergente">
  <div class="modal-dialog">
    <div class="modal-content" id="modal_body">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>