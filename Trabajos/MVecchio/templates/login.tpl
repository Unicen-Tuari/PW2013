{if isset($usuario)}
	<h4>Bienvenido <p class="text-success">{$usuario}</p></h4><br>
    <button id="logout" type="submit" class="btn btn-primary">Salir</button>
{else}	
	<h4>Ingresa con tu Cuenta!</h4>
		<form id="formlogin" name="formlogin" method="post">
			<input id="email" type="text" name="email" placeholder="Email!" required>
			<input id="pass" type="password" name="pass" placeholder="Contrase&ntilde;a"required>
			    <h4 id="error" class="alert alert-danger" style="display: none;"></h4>
			 
			<div class="checkbox">
		        <label>
		          <input id="check"type="checkbox"> Recordarme
		        </label>
		      </div>
		    <button id="signin"type="button" class="btn btn-primary">Entrar</button>
		</form>
{/if}