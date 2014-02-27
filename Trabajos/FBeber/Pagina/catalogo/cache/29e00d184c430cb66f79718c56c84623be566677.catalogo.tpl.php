<?php /*%%SmartyHeaderCode:296755253e4c34e6527-20955493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e00d184c430cb66f79718c56c84623be566677' => 
    array (
      0 => '.\\templates\\catalogo.tpl',
      1 => 1381235317,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1381230129,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1375909886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296755253e4c34e6527-20955493',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52545a770bddd9_96783858',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52545a770bddd9_96783858')) {function content_52545a770bddd9_96783858($_smarty_tpl) {?><html>
<head>
	<title>Challhua-co | Catalogo</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

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
   	<tr>
    <td>Indumentaria</td>
    <td><img src="../links/images/indumentaria/imagen_1.png"></td>
    <td>Chaleco Camuflado Fo</td>
	  <td>Chaleco de caza.
Material: Gabardina 8oz camuflada, 100% Algodón. Bolsillo interior en espalda con cordura impermeable y lavable. 2 Bolsillos frontales inferiores con fuelle, 1 bolsillo superior plaqué. 
Consultar Talles (M al 2XL)</td>
    <td>480</td>
  </tr>
	 	<tr>
    <td>Indumentaria</td>
    <td><img src="../links/images/indumentaria/imagen_2.png"></td>
    <td>Remera Camuflada For</td>
	  <td>Remera manga corta. Material: Jersey 24/1 camuflado 100% Algodón. 
Consultar Talles (M al 2XL)</td>
    <td>179</td>
  </tr>
	 	<tr>
    <td>Indumentaria</td>
    <td><img src="../links/images/indumentaria/imagen_3.png"></td>
    <td>Bermuda Camuflada Fo</td>
	  <td>Bermuda de caza. Gabardina 8oz 100% Algodón, camuflada. Cintura fija. Cierres YKK. 2 Bolsillos frontales. 2 bolsillos cargo laterales con cierre de contacto. 2 bolsillos cargo traseros con cierre de contacto. 
Consultar Talles (M al 2XL)</td>
    <td>489</td>
  </tr>
	 	<tr>
    <td>Reels</td>
    <td><img src="../links/images/reels/imagen_1.jpg"></td>
    <td>Reel Spinit Stone FD</td>
	  <td>Con 2 rulemanes
Carrete extra de grafito
Manivela balanceada ambidiestra
Nuevo Sistema Pick Up
Anti-reverse silencioso Multi Stop
Freno delantero progresivo.
Carrete extra de grafito
Capacidad: 0.40/140 - 0.50/100
Relación: 5.5:1</td>
    <td>159</td>
  </tr>
	 	<tr>
    <td>Reels</td>
    <td><img src="../links/images/reels/imagen_2.jpg"></td>
    <td>Reel Spinit Phanter </td>
	  <td>Carrete extra de grafito
Manivela balanceada
Anti-reverse silencioso
6 rulemanes
Nuevo sistema Pick Up</td>
    <td>330</td>
  </tr>
	  </tbody>
</table>
</div>

</body>
</html><?php }} ?>