{include file="header.tpl"}
{include file="categorias.tpl"}


<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="#">Categoría</a></li>
  <li class="active">{$subcat}</li>
</ol>


<div class="f_index_productos">


    <div class="row-fluid">
      {foreach from=$productos item=producto}
          <div class="col-md-3 f_prod">
            <div class="catalogo_foto">
              <a href="/item/search/{$producto.producto_id}"><img class="catalogo_thumb" src="{$producto.foto}"></a>  
            </div>
            <div class="catalogo_info">
              <a href="/item/search/{$producto.producto_id}"><h4>{$producto.producto_nombre}</h4></a>
              <h5>${$producto.precio}</h5>
            </div>
          

          </div>
      {/foreach}
    </div>
    <div class="f_pagination">
      <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>


{include file="footer.tpl"}