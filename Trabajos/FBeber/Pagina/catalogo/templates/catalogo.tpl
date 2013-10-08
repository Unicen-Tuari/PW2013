{include file="header.tpl" title=foo}

 <div class="container">
  <h1>Lista de Productos</h1>
  <a href="./formulario/index.php"><button>Agregar Producto</button></a><br>
  <table class="table table-striped">
  
  
  <thead>
    <tr>
      <th>Subcategoria</th>
      <th>Imagen</th>
      <th>Nombre</th>
	    <th>Descripcion</th>
      <th>Precio</th>
    </tr>
  </thead>
    <tbody>
  {section name=lnombres loop=$nombre}
 	<tr>
    <td>{$subcategoria[lnombres]}</td>
    <td><img src="../links/images/{$imagen[lnombres]}"></td>
    <td>{$nombre[lnombres]}</td>
	  <td>{$descripcion[lnombres]}</td>
    <td>{$precio[lnombres]}</td>
  </tr>
	{/section}
  </tbody>
</table>
</div>

{include file="footer.tpl"}