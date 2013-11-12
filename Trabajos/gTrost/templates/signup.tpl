{include file="header.tpl"}

<div class="f_signup_form navbar-inverse" id="f_signup_pre">
	<div class="f_signup_content">
	<h4>Registrar un nuevo usuario</h4>
	<form  action="/signup/newUser" method="post" id="newUserForm" name="newUserForm" onSubmit="return validateSignUp();">
		<div class="form-group ">
            <input type="text" name="usuario_nombre" id="usuario_nombre" class="form-control" placeholder="Nombre" required="true">
            <input type="email" name="usuario_mail" id="usuario_mail" class="form-control" placeholder="Email" required="true">
            
        </div>
        <div class="form-group ">
            <input type="password" name="usuario_pass1" id="usuario_pass1" class="form-control" placeholder="Contraseña" required="true">
            <input type="password" name="usuario_pass2" id="usuario_pass2" class="form-control" placeholder="Repita la contraseña" required="true">
        </div>
        <div id="pass_error">
            <p>Las contraseñas no coinciden.</p>
        </div>
        <div class="form-group ">
            <input type="text" name="usuario_direccion" id="usuario_direccion" class="form-control" placeholder="Dirección" required="true">
            <input type="text" name="usuario_ciudad" id="usuario_ciudad" class="form-control" placeholder="Ciudad" required="true">
            <input type="text" name="usuario_provincia" id="usuario_provincia" class="form-control" placeholder="Provincia" required="true">
            <input type="text" name="usuario_codigopostal" id="usuario_codigopostal" class="form-control" placeholder="Código Postal" required="true">
        </div>
        <button type="submit" id="newUser_btn" name="newUser_btn" class="btn btn-default">Enviar</button>
	</form>
	</div>
	
</div>

{include file="footer.tpl"}
