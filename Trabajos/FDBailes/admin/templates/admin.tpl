{include file = "header.tpl"}
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
			</div>
		</div>
	</div>
{include file = "footer.tpl"}