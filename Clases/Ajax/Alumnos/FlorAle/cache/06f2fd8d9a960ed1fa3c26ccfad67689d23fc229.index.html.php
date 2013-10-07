<?php /*%%SmartyHeaderCode:121875213fc8344c670-50823254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1377039344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121875213fc8344c670-50823254',
  'variables' => 
  array (
    'Nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5213fc8350a2f1_63441545',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5213fc8350a2f1_63441545')) {function content_5213fc8350a2f1_63441545($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
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
          <select id="nombre">
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
</html>
<?php }} ?>