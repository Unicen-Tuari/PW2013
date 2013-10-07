{include file="header.tpl" title=foo}

 <body>
    <div class="container">

      <div class="page-header">
        <h1>Ejemplo de utilizacion de Ajax</h1>
      </div>
       <label class="control-label" for="nombre">Nombre</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <select id="nombre">
             {foreach $nombres as $nombre}  
              <option value="{$nombre.Nombre}">{$nombre.Nombre}</option>
            {/foreach}
      </select>
        </div>
      </div>
      
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
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

{include file="footer.tpl"}




