<?php /*%%SmartyHeaderCode:1711152164e95b81295-04824769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1377195894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711152164e95b81295-04824769',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521658257e8b60_73771706',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521658257e8b60_73771706')) {function content_521658257e8b60_73771706($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type"text/javascript" src = "./js/main.js" />
  </head>

  <body>
    <div class="container">
      <div class="page-header">
        <h1>Ejemplo de utilizacion de Ajax</h1>
      </div>
      <label class="control-label" for="nombre">Nombre</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <select id="nombre" onChange = "getData();">
	  		 		<option value=Juan>Juan</option>
			 		<option value=Roberto>Roberto</option>
			 		<option value=Marcela>Marcela</option>
			 		<option value=Carolina>Carolina</option>
			 		<option value=Juan Ignacio>Juan Ignacio</option>
			 		<option value=Veronica>Veronica</option>
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
      <tbody id="tableData">

      </tbody>
    </table>
</div>

      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php }} ?>