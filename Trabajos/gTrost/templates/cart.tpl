{include file="header.tpl"}

 <div class="productos_container">
 	<div class="f_index_productos">

 		<div class="panel panel-default">
		  
		  	<div class="panel-heading">
		  		<a href="/cart"><span class="glyphicon glyphicon-refresh"></span></a> Carrito de Compras
		  	</div>

	  		<table class="table table-striped">
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th class="cart_icon"></th>
				</tr>
				{foreach from=$productos item=prod}
				<tr>
					<th>{$prod.producto_nombre}</th>
					<th>{$prod.precio}</th>
					<th class="cart_icon"><a href="/cart/erase/{$prod.producto_id}"><span class="glyphicon glyphicon-remove login-close"></span></a></th>
				</tr>
				{/foreach}
				<tr >
					<th class="cart_total">Total</th>
					<th class="cart_total">${$total}</th>
					<th class="cart_icon">
						{if $usuario_mail eq -1}
							
							<div id="tooltip1" title="Debe iniciar sesión para proceder con la compra.">
								<button type="button" class="btn  btn-primary" disabled="disabled">Checkout</button>
							</div>
						{else}
							<a href="/cart/checkout"><button type="button" class="btn  btn-primary">Checkout</button></a>
						{/if}
					</th>
				</tr>
	  		</table>


		</div>

 	</div>
 </div>

{include file="footer.tpl"}