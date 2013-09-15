function verificarFormulario()
{
	var nombre= document.getElementById('nombre');
	var asunto = document.getElementById('asunto');
	var telefono = document.getElementById('telefono');
	var email = document.getElementById('email');
	var mensaje = document.getElementById('mensaje');


	if(esVacio(nombre.value) || (nombre.value.length<3 || nombre.value.length>20))
	{
		alert('Debe ingresar un nombre entre 3 y 30 caracteres');
		nombre.focus();
		return;
	}

	if(!emailValido(email.value))
	{
		alert('Debe ingresar un email valido Ej: usuario@gmail.com');
		email.focus();
		return;
	}

	if (!esVacio(telefono.value) && (!telefonoValido (telefono.value)))
	{
		alert('Debe ingresar un telefono valido Ej: 22841546897');
		telefono.focus();
		return;
	}
	
	if(esVacio(asunto.value) && !largoEntre(linferior, lsuperior, lastname.value))
	{
		alert('Debe ingresar un asunto entre 3 y 20 caracteres');
		asunto.focus();
		return;
	}

	if(esVacio(mensaje.value))
	{
		alert('Debe ingresar un mensaje');
		mensaje.focus();
		return;
	}

	
	return alert('Mensaje Enviado. Nos comunicaremos a la brevedad.')
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

function telefonoValido(telefono){
	if( isNaN(telefono) || (telefono.length<10) ) {
  		return false;
	}
	return true;
}