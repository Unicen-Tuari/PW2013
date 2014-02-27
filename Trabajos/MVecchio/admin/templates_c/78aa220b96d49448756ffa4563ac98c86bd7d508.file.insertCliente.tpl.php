<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 20:19:40
         compiled from ".\templates\insertCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:674052826e101d02f2-16833374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78aa220b96d49448756ffa4563ac98c86bd7d508' => 
    array (
      0 => '.\\templates\\insertCliente.tpl',
      1 => 1384283821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '674052826e101d02f2-16833374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52826e101fb289_97020167',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52826e101fb289_97020167')) {function content_52826e101fb289_97020167($_smarty_tpl) {?><form id="formcontacto" method="post" action="">
	<ul>
	    <li>
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" required/>
		</li>
		<li>
			<label for="apellido">Apellido:</label>
			<input type="text" id="apellido" name="apellido"  required/>
		</li>
		<li>
			<label for="direccion">Direccion:</label>
			<input type="text" id="direccion" name="direccion"  required/>
		</li>
		<li>
			<label for="telefono">Telefono:</label>
			<input type="telefono" id="telefono"  name="telefono" required/>
		</li>
		<li>
			<label for="provincia">Provincia:</label>
			<input type="text" id="provincia" name="provincia" required/>
		</li>
		<li>
			<label for="localidad">Localidad:</label>
			<input type="text" id="localidad" name="localidad"  required/>
		</li>
		<li>
			<label for="email">Email:</label>
			<input type="text" id="email"name="email"  required/>
		</li>
		<li>
			<label for="tipo_doc">Tipo Documento:</label>
			<input type="text" id="tipo_documento"name="tipo_documento"  required/>
		</li>
		<li>
			<label for="nro_doc">Nro Documento:</label>
			<input type="text" id="nro_documento"name="nro_documento"  required/>
		</li>
		<li>
			<label for="razon_social">Razon Social:</label>
			<input type="text" id="razon_social" name="razon_social"/>
		</li>
		<li>
			<label for="cliente_amigo">Es cliente Amigo? (s/n):</label>
			<input type="text" id="es_cliente_amigo"name="es_cliente_amigo"  required/>
		</li>
		<li>
			<label for="descuento">Descuento/Oferta:</label>
			<input type="text" id="descuento"name="descuento"/>
		</li>
		<li>
			<label for="web">Web:</label>
			<input type="text" id="web" name="web"/>
		</li>
		 <li>
	       <button id="confirmarcliente" class="btn btn-primary" type="button" onClick="insertCliente();">Confirmar</button>
	       <button id="" class="btn btn-primary" type="reset">Reset</button>
	    </li>
	</ul>
</form>	<?php }} ?>