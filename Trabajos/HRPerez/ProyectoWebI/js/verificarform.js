function verificarFormulario()
{
	var nombre = document.getElementById('Nombre');
    var apellido = document.getElementById('Apellido');
    var email = document.getElementById('E-mail');
	var asunto = document.getElementById('Asunto');
	var mensaje = document.getElementById('Mensaje');
	var linferior = 3;
	var lsuperior = 20;

	if(esVacio(nombre.value) && !largoEntre(linferior, lsuperior, nombre.value))
	{
		alert('Debe ingresar un nombre entre 3 y 20 caracteres');
		nombre.focus();
		return;
	}

if(esVacio(apellido.value) && !largoEntre(linferior, lsuperior, apellido.value))
	{
		alert('Debe ingresar un apellido entre 3 y 20 caracteres');
		apellido.focus();
		return;
	}

	if(!emailValido(email.value))
	{
		alert('Debe ingresar un email valido');
		email.focus();
		return;
	}

	if(esVacio(mensaje.value))
	{
		alert('Debe ingresar un mensaje');
		mensaje.focus();
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