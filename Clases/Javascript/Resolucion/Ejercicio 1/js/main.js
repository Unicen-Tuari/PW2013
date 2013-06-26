function verificarFormulario()
{
	var email = document.getElementById('email');
	var consulta = document.getElementById('consulta');
	var linferior = 3;
	var lsuperior = 20;

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