{include file="header.tpl"}

<div class="admin_panel navbar-inverse">
  <div class="tabbable">
  <ul class="nav nav-pills">
    <li class="active"><a href="#pane1" data-toggle="tab">Cargar producto</a></li>
    <li><a href="#pane2" data-toggle="tab">Nueva Categoría</a></li>
    <li><a href="#pane3" data-toggle="tab">Nueva SubCategoría</a></li>
    <li><a href="#pane4" data-toggle="tab">Eliminar Categoría/Subcategoría</a></li>
  </ul>
  <div class="tab-content">
    <div id="pane1" class="tab-pane active admin_panel_form">
      <h4>Cargar nuevo producto</h4>
        <form role="form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre del producto">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Precio">
          </div>
          <select class="form-control" placeholder="asdf">
            <option disabled selected>Subcategoría</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <div class="form-group">
            <textarea class="form-control"  placeholder="Descripción"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Adjuntar imagen</label>
            <input type="file" id="exampleInputFile">
            
          </div>
      
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
    <div id="pane2" class="tab-pane">
    <h4>Pane 2 Content</h4>
      <p> and so on ...</p>
    </div>
    <div id="pane3" class="tab-pane">
      <h4>Pane 3 Content</h4>
    </div>
    <div id="pane4" class="tab-pane">
      <h4>Pane 4 Content</h4>
    </div>
  </div>
</div>
</div>

{include file="footer.tpl"}
