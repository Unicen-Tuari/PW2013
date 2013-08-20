<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type"text/javascript" srs = "./js/main.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="page-header">
        <h1>Ejemplo dhttp://localhost/Ejercicio/index.phpe utilizacion de Ajax</h1>
      </div>
      <label class="control-label" for="nombre">Nombre</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <select id="nombre" onSelect = "getdatos();">
	  	{foreach $datos as $dato}
	 		<option value={$dato.Nombre}>{$dato.Nombre}</option>
		{/foreach}
      	</select>

        </div>
      </div>
      
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nomnbre</th>
          <th>Apellido</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan</td>
          <td>Perez</td>
          <td>jp@gmail.com</td>
        </tr>
        <tr>
          <td>Juan</td>
          <td>Gomez</td>
          <td>jgomez@gmail.com</td>
        </tr>
      </tbody>
    </table>
</div>

      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
