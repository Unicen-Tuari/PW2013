alert('Hola Mundo!');

function verificarFormulario()
{
	var name = document.getElementById('name');
	var lastname = document.getElementById('lastname');
	var email = document.getElementById('email');
	var consulta = document.getElementById('consulta');
	var linferior = 3;
	var lsuperior = 20;

	if(esVacio(name.value) && !largoEntre(linferior, lsuperior, name.value))
	{
		alert('Debe ingresar un nombre entre 3 y 20 caracteres');
		name.focus();
		return;
	}

	if(esVacio(lastname.value) && !largoEntre(linferior, lsuperior, lastname.value))
	{
		alert('Debe ingresar un apellido entre 3 y 20 caracteres');
		lastname.focus();
		return;
	}

	if(!emailValido(email.value))
	{
		alert('Debe ingresar un email valido');
		email.focus();
		return;
	}

	if(esVacio(consulta.value))
	{
		alert('Debe ingresar una consulta');
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