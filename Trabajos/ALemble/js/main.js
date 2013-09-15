function verificarFormulario()
{
	var name = document.getElementById('name');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var email = document.getElementById('email');
	var fechaNac = document.getElementById('fechaNac');
	var linferior = 3;
	var lsuperior = 20;

	if(esVacio(name.value) && !largoEntre(linferior, lsuperior, name))
	{
		alert('Debe ingresar un nombre entre 3 y 20 caracteres');
		name.focus();
		return;
	}

	if(esVacio(username.value) && !largoEntre(linferior, lsuperior, username))
	{
		alert('Debe ingresar un nombre de usuario entre 3 y 20 caracteres');
		username.focus();
		return;
	}

	if(!emailValido(email.value))
	{
		alert('Debe ingresar un email valido');
		email.focus();
		return;
	}
	
}

function emailValido(email)
{
	if(esVacio(email)) return false;

	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
  	  return false;
	}

	return true;
}


function esVacio(valor)
{
	if(valor.length == 0)
	{
		return true;
	}

	return false;
}

function largoEntre(linferior, lsuperior, valor)
{
	if(valor.length> linferior && valor.length < lsuperior)
	{
		return true;
	}

	return false;
}