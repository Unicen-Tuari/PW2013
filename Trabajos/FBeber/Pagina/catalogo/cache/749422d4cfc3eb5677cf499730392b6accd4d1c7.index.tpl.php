<?php /*%%SmartyHeaderCode:9386520181ad1918c9-94948799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1380462396,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1375909886,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1375909886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9386520181ad1918c9-94948799',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524968945a9444_94283836',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524968945a9444_94283836')) {function content_524968945a9444_94283836($_smarty_tpl) {?><html>
<head>
	<title>Ejemplo Acceso al DOM</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

 <div class="container">
  <h1>Lista de Productos</h1>
  <h2>Pesca | <button>Agregar</button></h1>
   
  <table class="table table-striped">
  
  <thead>
    <tr>
      <th>Imagen</th>
      <th>Nombre</th>
	    <th>Descripcion</th>
      <th>Precio</th>
    </tr>
  </thead>
    <tbody>
   	<tr>
    <td><img src="././images/pesca/reels/reel-1.jpg"></td>
    <td>Reel Spinit Stone FD 250</td>
	  <td>Con 2 rulemanes
Carrete extra de grafito
Manivela balanceada ambidiestra
Nuevo Sistema Pick Up
Anti-reverse silencioso Multi Stop
Freno delantero progresivo
Carrete extra de grafito
Capacidad: 0.40/140 - 0.50/100
Relación: 5.5:1</td>
    <td>159</td>
    <td><button>Editar</button><button>Eliminar</button></td>
    </tr>
	 	<tr>
    <td><img src="././images/pesca/reels/reel-2.jpg"></td>
    <td>Reel Spinit Phanter 20 o 40</td>
	  <td>Carrete extra de grafito
Manivela balanceada
Anti-reverse silencioso
6 rulemanes
Nuevo sistema Pick Up</td>
    <td>330</td>
    <td><button>Editar</button><button>Eliminar</button></td>
    </tr>
	 	<tr>
    <td><img src="././images/pesca/reels/reel-3.jpg"></td>
    <td>Reel Spinit Phanter 20 o 40</td>
	  <td>Reel Spinit Comet FD 320 o 350
Con 3 rulemanes
Carrete extra de grafito
Manivela balanceada ambidiestra
Nuevo Sistema Pick Up
Anti-reverse silencioso Multi Stop
Freno delantero progresivo</td>
    <td>170</td>
    <td><button>Editar</button><button>Eliminar</button></td>
    </tr>
	 	<tr>
    <td><img src="././images/pesca/reels/reel-4.jpg"></td>
    <td>Reel Spinit Classe 30</td>
	  <td>Carrete de aluminio perforado
Carrete extra de grafito
Manivela balanceada
Nuevo sistema Pick Up
One Way Clutch
Anti-reverse silencioso
8 rulemanes</td>
    <td></td>
    <td><button>Editar</button><button>Eliminar</button></td>
    </tr>
	 	<tr>
    <td><img src="././images/pesca/reels/reel-5.jpg"></td>
    <td>Reel Spinit Amazonas 6000</td>
	  <td>Reel rotativo con devanador
3 Rulemanes
Carretel de aluminio
Armazón de bronce
Tapas de aluminio
Engranaje principal silencioso con freno estrella
Chicharra con selector
Freno dual centrífugo y mecánico
Incluye uña de devanador de repuesto</td>
    <td>599</td>
    <td><button>Editar</button><button>Eliminar</button></td>
    </tr>
	  </tbody>
</table>
</div>

</body>
</html><?php }} ?>