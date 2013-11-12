{include file="header.tpl"}
{include file="categorias.tpl"}


<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="#">Categoría</a></li>
  <li class="active"><a href="/productos/search/{$subcat}">{$subcat}</a></li>
</ol>
<div class="productos_container">
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
        <li><a href="/productos/search/{$subcat}/1">&laquo;</a></li>
          {for $page=1 to $total_paginas}
                <li><a href="/productos/search/{$subcat}/{$page}">{$page}</a></li>
          {/for}
        <li><a href="/productos/search/{$subcat}/{$total_paginas}">&raquo;</a></li>
      </ul>
    </div>
  </div>
</div>

{include file="footer.tpl"}