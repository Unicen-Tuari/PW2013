<?php /*%%SmartyHeaderCode:10135213f8a9b46243-10693076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1377042310,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1375840154,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1375833579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10135213f8a9b46243-10693076',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5213ff8b008ba3_71692693',
  'variables' => 
  array (
    'nombres' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5213ff8b008ba3_71692693')) {function content_5213ff8b008ba3_71692693($_smarty_tpl) {?><html>
<head>
	<title>Ejemplo Acceso al DOM</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

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
               
              <option value="Juan">Juan</option>
              
              <option value="Roberto">Roberto</option>
              
              <option value="Marcela">Marcela</option>
              
              <option value="Carolina">Carolina</option>
              
              <option value="Juan Ignacio">Juan Ignacio</option>
              
              <option value="Veronica">Veronica</option>
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

</body>
</html>




<?php }} ?>