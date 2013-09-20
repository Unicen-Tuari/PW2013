{include file = "header.tpl"}
<br>
<div class="container">
	<div class="row text-center">
		<div class="col-lg-12">
			<ul class="nav nav-tabs">
  				<li><button class="btn btn-info navbar-btn" onclick="dataReparaciones();">Reparaciones</button>&nbsp;</li>
	  			<li><button class="btn btn-info navbar-btn" onclick="dataClientes();">Clientes</button></li>
	  			<li class="pull-right">
            <form method="GET" action="#">
            <div class="form-group">
              <div class="input-group col-lg-12">
                <label class="sr-only" for="busqueda">Buscar...</label>
                <input class="form-control" type="text" id="busqueda" placeholder="Buscar..." pattern="[a-zA-Z]+\s[a-zA-Z]+" required>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div>
            </div>
            </form>
        </li>
			</ul>
		</div>
	</div>
  <div class="row">
    <div class="col-lg-12 text-right">
      <div class="radio-inline">
        <label class="radio-inline">
        <input type="radio" name="filtrorep" id="filtro1" value="option1">En Reparación
    </label>
    <label class="radio-inline">
        <input type="radio" name="filtrorep" id="filtro2" value="option2">Reparadas
    </label>
    <label class="radio-inline">
        <input type="radio" name="filtrorep" id="filtro3" value="option3">Todas
    </label>

      </div>
  </div>
</div>
	<div class="row text-center">
		<div class="col-lg-12" id="tableData">
			
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
<div class="row text-center">
<div class="col-lg-12">
<ul class="nav nav-pills nav-justified">
        <div class="col-lg-4">
  				<li><button class="btn btn-primary navbar-btn col-lg-6 col-lg-offset-3">Agregar Reparación</button></li>
        </div>
                  <div class="col-lg-4">
	  			<li><button class="btn btn-primary navbar-btn col-lg-6 col-lg-offset-3">Ver Detalle</button></li>
        </div>
                  <div class="col-lg-4">
          <li><button class="btn btn-primary navbar-btn col-lg-6 col-lg-offset-3">Agregar Cliente</button></li>
        </div>
			</ul>
</div>
	</div>
</div>
{include file = "footer.tpl"}