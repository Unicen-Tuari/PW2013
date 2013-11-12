{include file="header.tpl"}

<div class="f_contact">
<h2>Formulario de Contacto</h2>
<p>Envíe su consulta y en 48hs nos contactaremos con usted. En caso de que desee un producto que no esté en el catálogo, favor de ser lo más específico posible para ayudarnos en la búsqueda.</p>
<form method="post" action="/contacto/enviar" id="contactForm" name="contactForm">
  <div class="form-group">
    <input type="email" class="form-control" id="contacto_email" name="contacto_email" placeholder="Ingrese su email para poder contactarlo">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="contacto_asunto" name="contacto_asunto" placeholder="Asunto">
  </div>
  <div class="form-group">
  	<textarea class="form-control" id="contacto_mensaje" name="contacto_mensaje" placeholder="Detalle su consulta"></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
{include file="footer.tpl"}
