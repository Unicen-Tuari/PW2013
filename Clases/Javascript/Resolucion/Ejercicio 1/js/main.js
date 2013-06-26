function verificarFormulario()
{
	var name = document.getElementById('name');
	var lastname = document.getElementById('username');
	var lastname = document.getElementById('password');
	var email = document.getElementById('email');
	var fechaNac = document.getElementById('fechaNac');
	var fechaActual = new date();
	var linferior = 3;
	var lsuperior = 20;

	if(esVacio(name.value) && !largoEntre(linferior, lsuperior, name.value))
	{
		alert('Debe ingresar un nombre entre 3 y 20 caracteres');
		name.focus();
		return;
	}

	if(esVacio(username.value) && !largoEntre(linferior, lsuperior, username.value))
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

	if !(fechaNac(getFullYear) < (fechaActual(getFullYear) - 17)) 
		{
		alert("Tiene que ser mayor de 18 para poder registrarse.")
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


if (Date.parse(fromDate) > Date.parse(toDate)) {
alert("Invalid Date Range!\nStart Date cannot be after End Date!")
return false;
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