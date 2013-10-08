{include file="header.tpl"}

<div class="f_contact">
<h2>Formulario de Contacto</h2>
<p>Envíe su consulta que en 48hs nos contactaremos con usted. En caso de que busque un producto que no esté en el catálogo, favor de adjuntar una imagen de ejemplo para ayudarnos en la búsqueda.</p>
<form role="form">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su email para poder contactarlo">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Asunto">
  </div>
  <div class="form-group">
  	<textarea class="form-control"  placeholder="Detalle su consulta"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Adjuntar imagen</label>
    <input type="file" id="exampleInputFile">
    
  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
{include file="footer.tpl"}
