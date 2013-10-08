<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 01:58:15
         compiled from "mostrarclientes.php" */ ?>
<?php /*%%SmartyHeaderCode:1858752159a67f386e8-49263626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '205666648c433c4446e3f5ef366d8dd3f553caf3' => 
    array (
      0 => 'mostrarclientes.php',
      1 => 1377147490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858752159a67f386e8-49263626',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52159a68005302_39176185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52159a68005302_39176185')) {function content_52159a68005302_39176185($_smarty_tpl) {?><<?php ?>?php
//Imprimo fotos de clientes "amigos" de a 2 por fila.
	$cont=0;
	while($r = $q->fetch()){
			while (cont<2 and $r and $r[es_cliente_amigo]='s'){
				echo('<a id="linkamigo" href="//'.$r[web].'" target="_blank"><img alt="Imagen Amigo" src="'.$r[url_imagen].'"></a>');
				$r= $q->fetch();
				$cont++;
			}
	}
?<?php ?>>	<?php }} ?>