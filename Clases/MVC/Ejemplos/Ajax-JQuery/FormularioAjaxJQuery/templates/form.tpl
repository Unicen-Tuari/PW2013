{include file="header.tpl"}
	
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Formulario Ajax</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Formulario Ajax</h2>
			<p>Formulario para aprender como usar Ajax en el envío de un formulario</p>
		</div>	
	<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nombre </label>
		<span>
			<input id="nombre" name= "nombre" class="element text" maxlength="255" size="8" value=""/>
			<label>Nombre</label>
		</span>
		<span>
			<input id="apellido" name= "apellido" class="element text" maxlength="255" size="14" value=""/>
			<label>Apellido</label>
		</span> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Email </label>
		<div>
			<input id="mail" name="mail" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
		<li class="buttons">
			<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Submit" />
		</li>
			</ul>
		</form>	
{include file="footer.tpl"}