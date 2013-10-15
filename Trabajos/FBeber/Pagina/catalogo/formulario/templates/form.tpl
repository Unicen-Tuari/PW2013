{include file="header.tpl"}
	
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Nuevo Producto</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Nuevo Producto</h2>
			
		</div>	
	<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nombre del Producto</label>
		<span>
			<input id="nombre_producto" name= "nombre_producto" class="element text" maxlength="255" size="14" value=""/>
			<label>Nombre</label>
		</span>
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Descripcion</label>
		<div>
			<input id="descripcion" name="descripcion" class="element text medium" type="text" maxlength="500" value=""/>
			<label>Descripcion</label>
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Precio </label>
		<div>
			<input id="precio" name="precio" class="element text medium" type="text" maxlength="255" value=""/> 
			<label>Precio</label>
		</div> 
		</li>
				</li>		<li id="li_3" >
		<label class="description" for="element_3">Imagen</label>
		<div>
			<input id="imagen" name="imagen" class="element text medium" type="text" maxlength="255" value=""/> 
			<label >Ej: images/subcategoria/nombre.jpg</label>
		</div> 
		</li>
			
		<li class="buttons">
			<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Cargar" />
		</li>
			</ul>
		</form>	
{include file="footer.tpl"}