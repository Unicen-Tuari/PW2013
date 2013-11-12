{include file="header.tpl"}
{include file="categorias.tpl"}

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="#">Categoría</a></li>
  <li class="active"><a href="/productos/search/{$item_datos.subcat_nombre}">{$item_datos.subcat_nombre}</a></li>
</ol>
<div class="productos_container">
<div class="f_item_container">
	<div class="row">
  		<div class="col-md-4">
  			<div class="f_item_fotos">
  				<div class="f_fotos_principal">
  					<img class="f_fotos_principal" id="foto_principal" src="{$imagenes[0]}">
  				</div>
  				<div class="f_fotos_thumbs ">
  					<div class="row-fluid">
              {foreach from=$imagenes item=img}
              <div class="col-md-3 item_thumb">
                <img class="item_foto" src="{$img}" height=95>
              </div>                
            {/foreach}

				    	
    				</div>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-8 f_item_info">
  			<h2>{$item_datos.producto_nombre}</h2>
  			<h4>{$item_datos.precio}</h4>
  			<a href="/cart/addToCart/{$item_datos.producto_id}"><button type="button" class="btn btn-default btn-lg">
  				<span class="glyphicon glyphicon-shopping-cart"></span> Agregar al Carrito
			 </button></a>
  			<p>{$item_datos.descripcion}</p>

  		</div>
	</div>
</div>
</div>


{include file="footer.tpl"}