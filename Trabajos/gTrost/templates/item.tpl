{include file="header.tpl"}
{include file="categorias.tpl"}

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="#">Categoría</a></li>
  <li class="active">{$item_datos.subcat_nombre}</li>
</ol>

<div class="f_item_container">
	<div class="row">
  		<div class="col-md-4">
  			<div class="f_item_fotos">
  				<div class="f_fotos_principal">
  					<img src="{$item_datos.imagenes}">
  				</div>
  				<div class="f_fotos_thumbs ">
  					<div class="row-fluid">
				    	<div class="col-md-3 item_thumb">
				    		<img src="http://placehold.it/100x100">
				    	</div>
				    	<div class="col-md-3 item_thumb">
				    		<img src="http://placehold.it/100x100">
				    	</div>
				    	<div class="col-md-3 item_thumb">
				    		<img src="http://placehold.it/100x100">
				    	</div>
				    	
    				</div>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-8 f_item_info">
  			<h2>{$item_datos.producto_nombre}</h2>
  			<h4>{$item_datos.precio}</h4>
  			<button type="button" class="btn btn-default btn-lg">
  				<span class="glyphicon glyphicon-shopping-cart"></span> Agregar al Carrito
			</button>
  			<p>{$item_datos.descripcion}</p>

  		</div>
	</div>
</div>


{include file="footer.tpl"}